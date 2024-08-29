<?php

namespace Database\Seeders;

use App\Models\AgendaKegiatan as Agenda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgendaKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'id' => 1,
                'judul' => 'Agenda 1',
                'keterangan' => '',
            ],
            [
                'id' => 2,
                'judul' => 'Agenda 2',
                'keterangan' => '',
            ]
        ])->each(function ($collection) {
            Agenda::create($collection);
        });
    }
}
