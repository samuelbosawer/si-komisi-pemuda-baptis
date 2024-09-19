<?php

namespace App\Exports;

use App\Models\AgendaKegiatan;
use Maatwebsite\Excel\Concerns\FromCollection;

class AgendasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return AgendaKegiatan::all();
    }
}
