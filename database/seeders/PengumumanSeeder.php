<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengumuman;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'id' => 1,
                'judul' => 'Pengumuman 1',
                'keterangan' => '',
            ],
            [
                'id' => 2,
                'judul' => 'Pengumuman 2',
                'keterangan' => '',
            ]
        ])->each(function ($collection) {
            Pengumuman::create($collection);
        });
    }
}
