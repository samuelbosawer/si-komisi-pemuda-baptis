<?php

namespace App\Exports;

use App\Models\JadwalIbadah;
use Maatwebsite\Excel\Concerns\FromCollection;

class JadwalIbadahExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return JadwalIbadah::all();
    }
}
