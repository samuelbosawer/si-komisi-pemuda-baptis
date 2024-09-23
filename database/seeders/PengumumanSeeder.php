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
                'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quisquam rerum dolor eius repellendus et dolorum. Dolorum aspernatur incidunt, impedit minus nemo dolore animi iure expedita, ipsam, saepe accusantium sit?',
            ],
            [
                'id' => 2,
                'judul' => 'Pengumuman 2',
                'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quisquam rerum dolor eius repellendus et dolorum. Dolorum aspernatur incidunt, impedit minus nemo dolore animi iure expedita, ipsam, saepe accusantium sit?',
            ]
        ])->each(function ($collection) {
            Pengumuman::create($collection);
        });
    }
}
