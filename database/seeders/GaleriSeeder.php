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
                'keterangan' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto temporibus eum doloribus, fugiat atque eligendi voluptatibus modi adipisci veniam at.',
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
                'keterangan' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto temporibus eum doloribus, fugiat atque eligendi voluptatibus modi adipisci veniam at.',
                'gereja_id' => 1,
            ],
            [
                'foto' => fake()->randomElement(
                    [

                        '/gambar/galeri/2.jpg',
                        '/gambar/galeri/1.jpg',
                    ]
                ),
                'judul' => 'galeri 3',
                'keterangan' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto temporibus eum doloribus, fugiat atque eligendi voluptatibus modi adipisci veniam at.',
                'gereja_id' => 3,
            ],
            [
                'foto' => fake()->randomElement(
                    [

                        '/gambar/galeri/2.jpg',
                        '/gambar/galeri/1.jpg',
                    ]
                ),
                'judul' => 'galeri 4',
                'keterangan' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto temporibus eum doloribus, fugiat atque eligendi voluptatibus modi adipisci veniam at.',
                'gereja_id' => 1,
            ],
            [
                'foto' => fake()->randomElement(
                    [

                        '/gambar/galeri/2.jpg',
                        '/gambar/galeri/1.jpg',
                    ]
                ),
                'judul' => 'galeri 5',
                'keterangan' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto temporibus eum doloribus, fugiat atque eligendi voluptatibus modi adipisci veniam at.',
            ],
            [
                'foto' => fake()->randomElement(
                    [

                        '/gambar/galeri/2.jpg',
                        '/gambar/galeri/1.jpg',
                    ]
                ),
                'judul' => 'galeri 6',
                'keterangan' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto temporibus eum doloribus, fugiat atque eligendi voluptatibus modi adipisci veniam at.',
            ],

            [
                'foto' => fake()->randomElement(
                    [

                        '/gambar/galeri/2.jpg',
                        '/gambar/galeri/1.jpg',
                    ]
                ),
                'judul' => 'galeri 7',
                'keterangan' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto temporibus eum doloribus, fugiat atque eligendi voluptatibus modi adipisci veniam at.',
            ],

        ])->each(function ($collection) {
            Galeri::create($collection);
        });
    }
}