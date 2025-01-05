<?php

namespace App\Exports;

use App\Models\Gereja;
use App\Models\Wilayah;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WilayahExport implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    protected $request, $no;

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
         $query = Wilayah::where(function ($query) {
                $query->where('nama_wilayah', '!=', Null);
                if (($s = $this->request->s)) {
                    $query->where('nama_wilayah', 'LIKE', '%' . $s . '%')
                        ->orWhere('kode_wilayah', 'LIKE', '%' . $s . '%')
                        ->orWhere('keterangan', 'LIKE', '%' . $s . '%');
                }
            });


            if(Auth::user()->hasRole('wilayah'))
            {
                $query->where('id', Auth::user()->wilayah_id);
            }

            if(Auth::user()->hasRole('gereja'))
            {
                $id = Gereja::where('id',Auth::user()->gereja_id)->first();
                $query->where('id', $id->wilayah_id);
            }



            return $query->orderBy('id', 'desc')->get();

    }

    public function headings(): array
    {
        return [
            'No',
            'Nama Wilayah',
            'Kode Wilayah',
            'Jumlah Gereja',
            'Jumlah Pemuda',
            'Keterangan',
        ];
    }


    public function map($wilayah): array
    {
        $no = ++$this->no;
        return [
            $no,
            $wilayah->nama_wilayah,
            $wilayah->kode_wilayah,
            $wilayah->gereja->count(),
            $wilayah->pemuda->count(),
            $wilayah->keterangan,
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
