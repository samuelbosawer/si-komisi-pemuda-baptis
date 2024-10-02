<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pemuda;

class PemudaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {

            collect([

                /*
                | ============================================================
                | Gereja : Gereja Baptis Kiwone
                | ============================================================
                */
                [
                    'nama_depan' => 'Korius',
                    'nama_tengah' => 'Kussa',
                    'nama_belakang' => 'Wenda',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Beam, 23 Februari 2000',
                    'usia' => '24',
                    'alamat' => 'Jalan Perumnas IV Padang Bulan II Itawakhu',
                    // 'email' => 'kk.wenda@gmail.com',
                    'nomor_hp' => '081234567890',
                    // 'foto' => 'foto/korius.png',
                    'gereja_id' => 1,
                ],
                [
                    'nama_depan' => 'Ana',
                    'nama_tengah' => 'Maria',
                    'nama_belakang' => 'Jikwa',
                    'jenis_kelamin' => 'Wanita',
                    // 'tempat_tanggal_lahir' => 'Wamena, 16 Juni 1989',
                    'usia' => '25',
                    'alamat' => 'Jalan Gelanggan Remaja Expo',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 1,
                ],



                [
                    'nama_depan' => 'Septian',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Wenda',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Beam, 23 Februari 2000',
                    'usia' => '18',
                    'alamat' => 'Jalan Perumnas IV Padang Bulan II Itawakhu',
                    // 'email' => 'kk.wenda@gmail.com',
                    'nomor_hp' => '081234567890',
                    // 'foto' => 'foto/korius.png',
                    'gereja_id' => 1,
                ],
                [
                    'nama_depan' => 'Martha',
                    'nama_tengah' => 'Maria',
                    'nama_belakang' => 'Wenda',
                    'jenis_kelamin' => 'Wanita',
                    // 'tempat_tanggal_lahir' => 'Wamena, 16 Juni 1989',
                    'usia' => '17',
                    'alamat' => 'Jalan Gelanggan Remaja Expo',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 1,
                ],

                /*
                | ============================================================
                | Gereja : Gereja Baptis Ujung Bumi
                | ============================================================
                */
                [
                    'nama_depan' => 'Adam',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Kogoya',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Keerom, 22 Mei 2001',
                    'usia' => '20',
                    'alamat' => 'Uncen Bawah Asrama Kanguru',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 23,
                ],
                /*
                | ============================================================
                | Gereja : Gereja Baptis Walibu Kehiran
                | ============================================================
                */
                [
                    'nama_depan' => 'Yosep',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Kogoya',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Keerom, 22 Mei 2001',
                    'usia' => '20',
                    'alamat' => 'Uncen Bawah Asrama Kanguru',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 22,
                ],
                /*
                | ============================================================
                | Gereja : Gereja Baptis Cahaya Kasih
                | ============================================================
                */
                [
                    'nama_depan' => 'Yosep',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Kogoya',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Keerom, 22 Mei 2001',
                    'usia' => '20',
                    'alamat' => 'Uncen Bawah Asrama Kanguru',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 21,
                ],

                /*
                | ============================================================
                | Gereja : Gereja Baptis DKI Yahukimo
                | ============================================================
                */
                [
                    'nama_depan' => 'Ansai',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Yando',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Ninia,11 November 2002',
                    'usia' => '22',
                    'alamat' => 'Jalan Perumnas IV Padang Bulan ',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 27,
                ],


                [
                    'nama_depan' => 'Adam',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Kogoya',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Keerom, 22 Mei 2001',
                    'usia' => '18',
                    'alamat' => 'Uncen Bawah Asrama Kanguru',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 27,
                ],

                [
                    'nama_depan' => 'Diana',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Kogoya',
                    'jenis_kelamin' => 'Wanita',
                    // 'tempat_tanggal_lahir' => 'Keerom, 22 Mei 2001',
                    'usia' => '19',
                    'alamat' => 'Uncen Bawah Asrama Kanguru',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 27,
                ],

                /*
                | ============================================================
                | Gereja : Gereja Baptis DKI Yahukimo
                | ============================================================
                */
                [
                    'nama_depan' => 'Ansai',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Yando',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Ninia,11 November 2002',
                    'usia' => '22',
                    'alamat' => 'Jalan Perumnas IV Padang Bulan ',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 27,
                ],


                [
                    'nama_depan' => 'Adam',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Kogoya',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Keerom, 22 Mei 2001',
                    'usia' => '24',
                    'alamat' => 'Uncen Bawah Asrama Kanguru',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 27,
                ],

                [
                    'nama_depan' => 'Adam',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Kogoya',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Keerom, 22 Mei 2001',
                    'usia' => '24 Tahun',
                    'alamat' => 'Uncen Bawah Asrama Kanguru',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 27,
                ],

                /*
                | ============================================================
                | Gereja : Gereja Baptis Getzemani
                | ============================================================
                */
                [
                    'nama_depan' => 'Ansai',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Yando',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Ninia,11 November 2002',
                    'usia' => '22',
                    'alamat' => 'Jalan Perumnas IV Padang Bulan ',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 26,
                ],

                   /*
                | ============================================================
                | Gereja : Gereja Baptis Allah Ninom Keerom
                | ============================================================
                */
                [
                    'nama_depan' => 'Helmar',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Yando',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Ninia,11 November 2002',
                    'usia' => '18',
                    'alamat' => 'Kerom ',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 26,
                ],

                        /*
                | ============================================================
                | Gereja : Gereja Baptis Jerusalem Keerom
                | ============================================================
                */
                [
                    'nama_depan' => 'Helmar',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Wenda',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Ninia,11 November 2002',
                    'usia' => '18',
                    'alamat' => 'Kerom ',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 24,
                ],


                /*
                | ============================================================
                | Gereja : Gereja Baptis Yahim Sentani
                | ============================================================
                */
                [
                    'nama_depan' => 'Weson',
                    'nama_tengah' => 'Naimin',
                    'nama_belakang' => 'Yigibalom',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Tiom,11 September 2002',
                    'usia' => '23',
                    'alamat' => 'Jalan Yahim Sentani',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 20,
                ],
                /*
                | ============================================================
                | Gereja : Gereja Baptis Kiwone
                | ============================================================
                */
                [
                    'nama_depan' => 'Selvia',
                    'nama_tengah' => 'Putuwati',
                    'nama_belakang' => 'Yikwa',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Wamena, 05 Oktober 2000',
                    'usia' => '2',
                    'alamat' => 'Jalan Perumnas IV Padang Bulan Blok Q ',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 1,
                ],
                /*
                | ============================================================
                | Gereja : Gereja Baptis Waena
                | ============================================================
                */
                [
                    'nama_depan' => 'Teranus',
                    'nama_tengah' => 'Tera',
                    'nama_belakang' => 'Kogoya',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Pirime, 05 November 1989',
                    'usia' => '25',
                    'alamat' => 'Jalan Perumahan Polda Buper Waena',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 2,
                ],
                /*
                | ============================================================
                | Gereja : Gereja Baptis Dawer Entrop
                | ============================================================
                */
                [
                    'nama_depan' => 'Isak',
                    'nama_tengah' => 'Ias',
                    'nama_belakang' => 'Tabuni',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Tiom, 11Desember 2000',
                    'usia' => '25',
                    'alamat' => 'Jalan Dawer Entrop Walikota',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 12,
                ],

                  /*
                | ============================================================
                | Gereja : Gereja Baptis Sion Angkasa
                | ============================================================
                */
                [
                    'nama_depan' => 'Yakop',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Tabuni',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Tiom, 11Desember 2000',
                    'usia' => '25',
                    'alamat' => 'Jalan Dawer Entrop Walikota',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 14,
                ],

                /*
                | ============================================================
                | Gereja : Gereja Baptis BaseG Pasir II
                | ============================================================
                */
                [
                    'nama_depan' => 'Nies',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Kobak',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Tiom, 11Desember 2000',
                    'usia' => '20',
                    'alamat' => 'Jalan Dawer Entrop Walikota',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 15,
                ],

                 /*
                | ============================================================
                | Gereja : Gereja Baptis Kota Barat
                | ============================================================
                */
                [
                    'nama_depan' => 'Neli',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Kobak',
                    'jenis_kelamin' => 'Wanita',
                    // 'tempat_tanggal_lahir' => 'Tiom, 11Desember 2000',
                    'usia' => '19',
                    'alamat' => 'Jalan Dawer Entrop Walikota',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 16,
                ],

                   /*
                | ============================================================
                | Gereja : Gereja Baptis Sumahai
                | ============================================================
                */
                [
                    'nama_depan' => 'Angel',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Kobak',
                    'jenis_kelamin' => 'Wanita',
                    // 'tempat_tanggal_lahir' => 'Tiom, 11Desember 2000',
                    'usia' => '19',
                    'alamat' => 'Jalan Dawer Entrop Walikota',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 29,
                ],


                      /*
                | ============================================================
                | Gereja : Gereja Baptis Batra Bonto
                | ============================================================
                */
                [
                    'nama_depan' => 'Juli',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Wenda',
                    'jenis_kelamin' => 'Wanita',
                    // 'tempat_tanggal_lahir' => 'Tiom, 11Desember 2000',
                    'usia' => '20',
                    'alamat' => 'Jalan Dawer Entrop Walikota',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 28,
                ],

                [
                    'nama_depan' => 'Yansen',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Morib',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Tiom, Agustus 2001',
                    'usia' => '23',
                    'alamat' => 'Jalan Perumnas 3 Kamolker',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 28,
                ],


                /*
                | ============================================================
                | Gereja : Gereja Baptis Bukit Zaitun Skaylend
                | ============================================================
                */
                [
                    'nama_depan' => 'Selrio',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Morib',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Tiom, Agustus 2001',
                    'usia' => '23',
                    'alamat' => 'Jalan Perumnas 3 Kamolker',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 4,
                ],
                /*
                | ============================================================
                | Gereja : Gereja Baptis Kamkey Tanah Hitam
                | ============================================================
                */
                [
                    'nama_depan' => 'Sarah',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Bosawer',
                    'jenis_kelamin' => 'Wanita',
                    // 'tempat_tanggal_lahir' => 'Sorong, 12 Maret 2000',
                    'usia' => '24',
                    'alamat' => 'Jalan Jeruk Nipis Kota Raya Luar',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 3,
                ],


            ],
            /*
            | ============================================================
            | Gereja : Gereja Baptis Siloam Buper
            | ============================================================
            */
            [
                'nama_depan' => 'Samuel',
                'nama_tengah' => '',
                'nama_belakang' => 'Kogoya',
                'jenis_kelamin' => 'Laki-Laki',
                // 'tempat_tanggal_lahir' => 'Sorong, 12 Maret 2000',
                'usia' => '24',
                'alamat' => 'Jalan Jeruk Nipis Kota Raya Luar',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876543',
                'foto' => fake()->randomElement(
                    [
                        '/gambar/mahasiswa/1.jpg',
                        '/gambar/mahasiswa/2.jpg'
                    ]
                ),
                'gereja_id' => 6,
            ],

            [
                'nama_depan' => 'Septer',
                'nama_tengah' => '',
                'nama_belakang' => 'Kogoya',
                'jenis_kelamin' => 'Laki-Laki',
                // 'tempat_tanggal_lahir' => 'Sorong, 12 Maret 2000',
                'usia' => '24',
                'alamat' => 'Jalan Jeruk Nipis Kota Raya Luar',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876543',
                'foto' => fake()->randomElement(
                    [
                        '/gambar/mahasiswa/1.jpg',
                        '/gambar/mahasiswa/2.jpg'
                    ]
                ),
                'gereja_id' => 6,
            ],


             /*
            | ============================================================
            | Gereja : Gereja Baptis Bukit Pengharapan Waena
            | ============================================================
            */
            [
                'nama_depan' => 'Angel',
                'nama_tengah' => '',
                'nama_belakang' => 'Wenda',
                'jenis_kelamin' => 'Wanita',
                // 'tempat_tanggal_lahir' => 'Sorong, 12 Maret 2000',
                'usia' => '19',
                'alamat' => 'Jalan Jeruk Nipis Kota Raya Luar',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876541',
                'foto' => fake()->randomElement(
                    [
                        '/gambar/mahasiswa/1.jpg',
                        '/gambar/mahasiswa/2.jpg'
                    ]
                ),
                'gereja_id' => 7,
            ],

            [
                'nama_depan' => 'Janzen',
                'nama_tengah' => '',
                'nama_belakang' => 'Kogoya',
                'jenis_kelamin' => 'Laki-Laki',
                // 'tempat_tanggal_lahir' => 'Sorong, 12 Maret 2000',
                'usia' => '17',
                'alamat' => 'Jalan Jeruk Nipis Kota Raya Luar',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209176543',
                'foto' => fake()->randomElement(
                    [
                        '/gambar/mahasiswa/1.jpg',
                        '/gambar/mahasiswa/2.jpg'
                    ]
                ),
                'gereja_id' => 7,
            ],

              /*
            | ============================================================
            | Gereja : Gereja Baptis Tiranus Kota raya
            | ============================================================
            */
            [
                'nama_depan' => 'Dessy',
                'nama_tengah' => '',
                'nama_belakang' => 'Jikwa',
                'jenis_kelamin' => 'Wanita',
                // 'tempat_tanggal_lahir' => 'Sorong, 12 Maret 2000',
                'usia' => '20',
                'alamat' => '',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876541',
                'foto' => fake()->randomElement(
                    [
                        '/gambar/mahasiswa/1.jpg',
                        '/gambar/mahasiswa/2.jpg'
                    ]
                ),
                'gereja_id' => 8,
            ],

            [
                'nama_depan' => 'Yohanes',
                'nama_tengah' => '',
                'nama_belakang' => 'Alua',
                'jenis_kelamin' => 'Laki-Laki',
                // 'tempat_tanggal_lahir' => 'Sorong, 12 Maret 2000',
                'usia' => '18',
                'alamat' => 'Jalan Jeruk Nipis Kota Raya Luar',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209176543',
                'foto' => fake()->randomElement(
                    [
                        '/gambar/mahasiswa/1.jpg',
                        '/gambar/mahasiswa/2.jpg'
                    ]
                ),
                'gereja_id' => 8,
            ],

                /*
            | ============================================================
            | Gereja : Gereja Baptis Btn Kota raya
            | ============================================================
            */
            [
                'nama_depan' => 'Nel',
                'nama_tengah' => '',
                'nama_belakang' => 'Jikwa',
                'jenis_kelamin' => 'Wanita',
                // 'tempat_tanggal_lahir' => 'Sorong, 12 Maret 2000',
                'usia' => '20',
                'alamat' => '',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876541',
                'foto' => fake()->randomElement(
                    [
                        '/gambar/mahasiswa/1.jpg',
                        '/gambar/mahasiswa/2.jpg'
                    ]
                ),
                'gereja_id' => 9,
            ],

            [
                'nama_depan' => 'Jekson',
                'nama_tengah' => '',
                'nama_belakang' => 'Alua',
                'jenis_kelamin' => 'Laki-Laki',
                // 'tempat_tanggal_lahir' => 'Sorong, 12 Maret 2000',
                'usia' => '18',
                'alamat' => 'Jalan Jeruk Nipis Kota Raya Luar',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209176543',
                'foto' => fake()->randomElement(
                    [
                        '/gambar/mahasiswa/1.jpg',
                        '/gambar/mahasiswa/2.jpg'
                    ]
                ),
                'gereja_id' => 9,
            ],


                /*
            | ============================================================
            | Gereja : Gereja Baptis Obelom Wone
            | ============================================================
            */
            [
                'nama_depan' => 'Agnes',
                'nama_tengah' => '',
                'nama_belakang' => 'Yemu',
                'jenis_kelamin' => 'Wanita',
                // 'tempat_tanggal_lahir' => 'Sorong, 12 Maret 2000',
                'usia' => '20',
                'alamat' => '',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876541',
                'foto' => fake()->randomElement(
                    [
                        '/gambar/mahasiswa/1.jpg',
                        '/gambar/mahasiswa/2.jpg'
                    ]
                ),
                'gereja_id' =>10,
            ],

            [
                'nama_depan' => 'Jekson',
                'nama_tengah' => '',
                'nama_belakang' => 'Kogoya',
                'jenis_kelamin' => 'Laki-Laki',
                // 'tempat_tanggal_lahir' => 'Sorong, 12 Maret 2000',
                'usia' => '18',
                'alamat' => 'Jayapura',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209176543',
                'foto' => fake()->randomElement(
                    [
                        '/gambar/mahasiswa/1.jpg',
                        '/gambar/mahasiswa/2.jpg'
                    ]
                ),
                'gereja_id' =>10,
            ],


                /*
            | ============================================================
            | Gereja : Gereja Baptis Yohanes Entrop
            | ============================================================
            */
            [
                'nama_depan' => 'Agnes',
                'nama_tengah' => '',
                'nama_belakang' => 'Yemu',
                'jenis_kelamin' => 'Wanita',
                // 'tempat_tanggal_lahir' => 'Sorong, 12 Maret 2000',
                'usia' => '20',
                'alamat' => '',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876541',
                'foto' => fake()->randomElement(
                    [
                        '/gambar/mahasiswa/1.jpg',
                        '/gambar/mahasiswa/2.jpg'
                    ]
                ),
                'gereja_id' =>11,
            ],

            [
                'nama_depan' => 'Jekson',
                'nama_tengah' => '',
                'nama_belakang' => 'Kogoya',
                'jenis_kelamin' => 'Laki-Laki',
                // 'tempat_tanggal_lahir' => 'Sorong, 12 Maret 2000',
                'usia' => '18',
                'alamat' => 'Jayapura',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209176543',
                'foto' => fake()->randomElement(
                    [
                        '/gambar/mahasiswa/1.jpg',
                        '/gambar/mahasiswa/2.jpg'
                    ]
                ),
                'gereja_id' =>11,
            ],


                /*
                | ============================================================
                | Gereja : Gereja Baptis Baseg Pasir II
                | ============================================================
                */
                [
                    'nama_depan' => 'Yesaya',
                    'nama_tengah' => 'Yeko',
                    'nama_belakang' => 'Kogoya',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Gamelia, 12 Juli 2000',
                    'usia' => '24',
                    'alamat' => 'Jalan Pasir II Pantae Baseg',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 1,
                ],
                /*
                | ============================================================
                | Gereja : Gereja Baptis Baseg Pasir II
                | ============================================================
                */
                [
                    'nama_depan' => 'Santi',
                    'nama_tengah' => 'Olan',
                    'nama_belakang' => 'Kogoya',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Tinume, 12 Maret 2002',
                    'usia' => '22',
                    'alamat' => 'Jalan Perumnas IV Padang Bulan Blok D ',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 1,
                ],
                /*
                | ============================================================
                | Gereja : Gereja Baptis Waena
                | ============================================================
                */
                [
                    'nama_depan' => 'Bominus',
                    'nama_tengah' => 'Bowen',
                    'nama_belakang' => 'Wenda',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Guna, 12 April 2001',
                    'usia' => '23',
                    'alamat' => 'Jalan Naik Perumahan Polda Bupert Expo',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 1,
                ],
                /*
                | ============================================================
                | Gereja : Gereja Baptis Waena
                | ============================================================
                */
                [
                    'nama_depan' => 'Selinda',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Wenda',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Guna, 12 November 2000',
                    'usia' => '24',
                    'alamat' => 'Jalan Sentani Pos 7 ',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 1,
                ],

                /*
                | ============================================================
                | Gereja : Gereja Baptis Kiwone
                | ============================================================
                */
                [
                    'nama_depan' => 'Nipon',
                    'nama_tengah' => 'Nikcy',
                    'nama_belakang' => 'Wanimbo',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Indawan, 12 Oktober 2002',
                    'usia' => '22',
                    'alamat' => 'Jalan Perumnas II Asrama Putra Lanny Jaya',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 1,
                ],

                /*
                | ============================================================
                | Gereja : Gereja Baptis Kiwone Padang Bulan
                | ============================================================
                */
                [
                    'nama_depan' => 'Alua',
                    'nama_tengah' => 'Robert',
                    'nama_belakang' => 'Kogoya',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Lualo, 10 Juni 2003',
                    'usia' => '21',
                    'alamat' => 'Jalan Perumahan Polda Atas Buper',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 1,
                ],

                /*
                | ============================================================
                | Gereja : Gereja Baptis Kiwone Padang Bulan
                | ============================================================
                */
                [
                    'nama_depan' => 'Hanna',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Tabuni',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Wamena, 8 September 2003',
                    'usia' => '21',
                    'alamat' => 'Jalan Perumnas IV Padang Bulan II Itawakhu',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 1,
                ],

                /*
                | ============================================================
                | Gereja : Gereja Baptis Mula-mula Santa Rosa
                | ============================================================
                */
                [
                    'nama_depan' => 'Iman ',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Wenda',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Beam, 12 Oktober 2001',
                    'usia' => '23',
                    'alamat' => 'Jalan Walikota Entrop',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 13,
                ],
                /*
                | ============================================================
                | Gereja : Gereja Baptis Kiwone
                | ============================================================
                */
                [
                    'nama_depan' => 'Jules ',
                    'nama_tengah' => 'Yulian',
                    'nama_belakang' => 'Yikwa',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Muara, 22 Desember 2002',
                    'usia' => '22',
                    'alamat' => 'Jalan Perumnas IV Padang Bulan ',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 1,
                ],
                /*
                | ============================================================
                | Gereja : Gereja Baptis Kiwone
                | ============================================================
                */
                [
                    'nama_depan' => 'Dekinus ',
                    'nama_tengah' => 'Deki',
                    'nama_belakang' => 'Kogoya',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Kurugume, 12 Juli 2002',
                    'usia' => '22',
                    'alamat' => 'Asrama Putra Lanny Jaya',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 1,
                ],
                /*
                | ============================================================
                | Gereja : Gereja Baptis Kiwone
                | ============================================================
                */
                [
                    'nama_depan' => 'Ibrahim  ',
                    'nama_tengah' => 'Ibra',
                    'nama_belakang' => 'Kogoya',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Tinume, 22 Agustus 2001',
                    'usia' => '23',
                    'alamat' => 'Jalan Perumnas IV Padang Bulan Blok Q Gunung ',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 1,
                ],
                /*
                | ============================================================
                | Gereja : Gereja Baptis Cahaya Kasih
                | ============================================================
                */
                [
                    'nama_depan' => 'Pingkan',
                    'nama_tengah' => '',
                    'nama_belakang' => 'Mokai',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Jayapura, 24 Oktober 2000',
                    'usia' => '24',
                    'alamat' => 'Jalan Sentani ',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876543',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 1,
                ],
                [
                    'nama_depan' => 'Anis',
                    'nama_tengah' => 'Olse',
                    'nama_belakang' => 'Yikwa',
                    'jenis_kelamin' => 'Laki-Laki',
                    // 'tempat_tanggal_lahir' => 'Wamena, 24 Mei 2003',
                    'usia' => '23',
                    'alamat' => 'Jalan Kota Raya Dalam',
                    // 'email' => 'maria.jikwa@gmail.com',
                    'nomor_hp' => '081209876533',
                    'foto' => fake()->randomElement(
                        [
                            '/gambar/mahasiswa/1.jpg',
                            '/gambar/mahasiswa/2.jpg'
                        ]
                    ),
                    'gereja_id' => 1,
                ],



            )->each(function ($items) {
                Pemuda::create($items);
            });
        }
    }
}
