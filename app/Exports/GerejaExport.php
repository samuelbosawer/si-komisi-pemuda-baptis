<?php

namespace App\Exports;

use App\Models\Gereja;
use Maatwebsite\Excel\Concerns\FromCollection;

class GerejaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Gereja::all();
    }
}
