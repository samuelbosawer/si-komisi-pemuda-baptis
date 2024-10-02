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
                'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, error! Ratione dicta sit nihil ab, quasi, labore delectus quas odit, recusandae dolorem repellat quis ad. Vel reiciendis, nobis excepturi animi mollitia amet maxime earum incidunt obcaecati error ex molestiae voluptates?',
                'status' => 'Aktif'
            ],
            [
                'id' => 2,
                'judul' => 'Agenda 2',
                'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, error! Ratione dicta sit nihil ab, quasi, labore delectus quas odit, recusandae dolorem repellat quis ad. Vel reiciendis, nobis excepturi animi mollitia amet maxime earum incidunt obcaecati error ex molestiae voluptates?',
                'status' => 'Aktif'
            ],
            [
                'id' => 3,
                'judul' => 'Agenda 3',
                'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, error! Ratione dicta sit nihil ab, quasi, labore delectus quas odit, recusandae dolorem repellat quis ad. Vel reiciendis, nobis excepturi animi mollitia amet maxime earum incidunt obcaecati error ex molestiae voluptates?',
                'status' => 'Aktif'
            ]
        ])->each(function ($collection) {
            Agenda::create($collection);
        });
    }
}
