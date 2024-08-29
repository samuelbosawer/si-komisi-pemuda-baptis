<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Galeri;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'foto' => fake()->randomElement(
                    [
                        'foto/girl.png',
                        'foto/girl-2.png'
                    ]
                ),
                'id' => 1,
                'judul' => 'galeri 1',
                'keterangan' => '',
            ],
            [
                'foto' => fake()->randomElement(
                    [
                        'foto/girl.png',
                        'foto/girl-2.png'
                    ]
                ),
                'id' => 2,
                'judul' => 'galeri 2',
                'keterangan' => '',
            ]
        ])->each(function ($collection) {
            Galeri::create($collection);
        });
    }
}
