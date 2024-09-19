<?php

namespace App\Exports;

use App\Models\Galeri;
use Maatwebsite\Excel\Concerns\FromCollection;

class GaleriExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Galeri::all();
    }
}
