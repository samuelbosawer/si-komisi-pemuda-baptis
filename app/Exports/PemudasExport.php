<?php

namespace App\Exports;

use App\Models\Pemuda;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemudasExport implements FromCollection, WithHeadings, WithMapping, WithStyles
{
   protected $request, $no;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->no = 0;
    }

    public function collection()
    {

          $query =  Pemuda::with('gereja')->whereHas('gereja')
            ->where(function ($query) {
                $query->where('nama_depan', '!=', Null);
                if (($s = $this->request->s)) {
                    $query->orWhere('nama_depan', 'LIKE', '%' . $s . '%')
                    ->orWhere('nama_tengah', 'LIKE', '%' . $s . '%')
                    ->orWhere('nama_belakang', 'LIKE', '%' . $s . '%')
                    ->orWhere('nomor_hp', 'LIKE', '%' . $s . '%')
                    ->orWhere('jenis_kelamin', 'LIKE', '%' . $s . '%')
                    ->orWhere('tempat_lahir', 'LIKE', '%' . $s . '%')
                    ->orWhere('tanggal_lahir', 'LIKE', '%' . $s . '%')
                    ->orWhere('nomor_hp', 'LIKE', '%' . $s . '%')
                    ->orWhere('usia', 'LIKE', '%' . $s . '%')
                    ->orWhere('alamat', 'LIKE', '%' . $s . '%')
                    ->orWhere('angkatan', 'LIKE', '%' . $s . '%')
                    ->orWhere('nik', 'LIKE', '%' . $s . '%');
                }
            })
            ->orderBy('id', 'desc');
            if(Auth::user()->hasRole('gereja'))
            {
                $query->where('gereja_id', Auth::user()->gereja_id);
            }
            if(Auth::user()->hasRole('wilayah'))
            {
                $query->whereHas('gereja', function($query) {
                    $query->whereHas('wilayah', function($subQuery) {
                        $subQuery->where('id', Auth::user()->wilayah_id);
                    });
                });
            }



            return $query->get();
    }

    public function headings(): array
    {
        return [
            'No',
            'Nama',
            'NIK',
            'Jenis Kelamin',
            'TTL',
            'No HP',
            'Usia (Tahun)',
            'Alamat',
            'Gereja',
            // 'Foto',
        ];
    }


    public function map($pemuda): array
    {
          $no = ++$this->no;
        return [
            $no,
            $pemuda->nama_depan.' '.$pemuda->nama_tengah.' '.$pemuda->nama_belakang,
            $pemuda->nik,
            $pemuda->jenis_kelamin,
            $pemuda->tempat_lahir.' '.strftime('%d %B %Y', strtotime($pemuda->tanggal_lahir)),
            $pemuda->no_hp,
            $pemuda->usia,
            $pemuda->alamat,
            $pemuda->gereja->nama_gereja,
            // $mahasiswa->foto,
        ];
    }

    /**
     * @param Worksheet $sheet
     * @return array
     */
    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],
        ];
    }
}
