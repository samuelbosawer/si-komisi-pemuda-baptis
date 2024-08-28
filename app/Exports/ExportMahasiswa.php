<?php

namespace App\Exports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Illuminate\Http\Request;

class ExportMahasiswa implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    protected $request,$no;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->no = 0;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mahasiswa::with('jurusan')->where([
            ['nama_lengkap', '!=', Null],
            [function ($query) {
                if (($s = $this->request->s)) {
                    $query->orWhere('nama_lengkap', 'LIKE', '%' . $s . '%')
                        ->orWhere('jenis_kelamin', 'LIKE', '%' . $s . '%')
                        ->orWhere('nim', 'LIKE', '%' . $s . '%')
                        ->orWhere('no_hp', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->orderBy('id', 'desc')->get();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'No',
            'NIM',
            'Nama Lengkap',
            'Jurusan',
            'Email',
            'No HP',
            'Jenis Kelamin',
            'Alamat',
            'Keterangan',
            // 'Foto',
        ];
    }

    /**
     * @var Mahasiswa $mahasiswa
     * @return array
     */
    public function map($mahasiswa): array
    {
          $no = ++$this->no;
        return [

            $no,
            $mahasiswa->nim,
            $mahasiswa->nama_lengkap,
            $mahasiswa->jurusan->jurusan,
            $mahasiswa->email,
            $mahasiswa->no_hp,
            $mahasiswa->jenis_kelamin,
            $mahasiswa->alamat,
            $mahasiswa->keterangan,
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
