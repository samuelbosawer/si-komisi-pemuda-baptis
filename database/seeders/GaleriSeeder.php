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

                        '/gambar/galeri/2.jpg',
                        '/gambar/galeri/1.jpg',
                    ]
                ),
                'id' => 1,
                'judul' => 'galeri 1',
                'keterangan' => '',
            ],
            [
                'foto' => fake()->randomElement(
                    [

                       '/gambar/galeri/2.jpg',
                       '/gambar/galeri/1.jpg',
                    ]
                ),
                'id' => 2,
                'judul' => 'galeri 2',
                'keterangan' => '',
            ],
            [
                'foto' => fake()->randomElement(
                    [

                       '/gambar/galeri/2.jpg',
                       '/gambar/galeri/1.jpg',
                    ]
                ),
                'judul' => 'galeri 3',
                'keterangan' => '',
            ],
            [
                'foto' => fake()->randomElement(
                    [

                       '/gambar/galeri/2.jpg',
                       '/gambar/galeri/1.jpg',
                    ]
                ),
                'judul' => 'galeri 4',
                'keterangan' => '',
            ],
            [
                'foto' => fake()->randomElement(
                    [

                       '/gambar/galeri/2.jpg',
                       '/gambar/galeri/1.jpg',
                    ]
                ),
                'judul' => 'galeri 5',
                'keterangan' => '',
            ],
            [
                'foto' => fake()->randomElement(
                    [

                       '/gambar/galeri/2.jpg',
                       '/gambar/galeri/1.jpg',
                    ]
                ),
                'judul' => 'galeri 6',
                'keterangan' => '',
            ],

            [
                'foto' => fake()->randomElement(
                    [

                       '/gambar/galeri/2.jpg',
                       '/gambar/galeri/1.jpg',
                    ]
                ),
                'judul' => 'galeri 7',
                'keterangan' => '',
            ],

        ])->each(function ($collection) {
            Galeri::create($collection);
        });
    }
}
