<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gereja;

class GerejaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'nama_gereja' => 'Gereja Baptis Kiwone',
                'nama_pengguna' => 'gereja_baptis_kiwone',
                'kata_sandi' => bcrypt('gereja_baptis_kiwone'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Waena',
                'nama_pengguna' => 'gereja_baptis_waena',
                'kata_sandi' => bcrypt('gereja_baptis_waena'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Kamkey',
                'nama_pengguna' => 'gereja_baptis_kamkey',
                'kata_sandi' => bcrypt('gereja_baptis_kamkey'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Bukit Zaitun Skayland',
                'nama_pengguna' => 'gereja_baptis_bukit_zaitun_skyland',
                'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Siloam Buper',
                'nama_pengguna' => 'gereja_baptis_siloam_buper',
                'kata_sandi' => bcrypt('gereja_baptis_siloam_buper'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Bukit Pengharapan Waena',
                'nama_pengguna' => 'gereja_baptis_bukit_pengharapan_waena',
                'kata_sandi' => bcrypt('gereja_baptis_bukit_pengharapan_waena'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Tiranus Kota raya',
                'nama_pengguna' => 'gereja_baptis_tiranus_kota_raya',
                'kata_sandi' => bcrypt('gereja_baptis_tiranus_kota_raya'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Btn Kota raya',
                'nama_pengguna' => 'gereja_baptis_btn_kota_raya',
                'kata_sandi' => bcrypt('gereja_baptis_btn_kota_raya'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Obelom Wone',
                'nama_pengguna' => 'gereja_baptis_',
                'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Damai Wahno',
                'nama_pengguna' => 'gereja_baptis_',
                'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Yohanes Entrop',
                'nama_pengguna' => 'gereja_baptis_',
                'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Dawer Entrop',
                'nama_pengguna' => 'gereja_baptis_',
                'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Mula-Mula Santa Rosa',
                'nama_pengguna' => 'gereja_baptis_',
                'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Sion Angkasa',
                'nama_pengguna' => 'gereja_baptis_',
                'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis BaseG Pasir II ',
                'nama_pengguna' => 'gereja_baptis_',
                'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Kota Barat',
                'nama_pengguna' => 'gereja_baptis_',
                'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Moso Batas ',
                'nama_pengguna' => 'gereja_baptis_',
                'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Tiofon Koya ',
                'nama_pengguna' => 'gereja_baptis_',
                'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Imanuel Toladan ',
                'nama_pengguna' => 'gereja_baptis_',
                'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Yahim Sentani ',
                'nama_pengguna' => 'gereja_baptis_',
                'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Cahaya Kasih ',
                'nama_pengguna' => 'gereja_baptis_',
                'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Walibu Kehiran ',
                'nama_pengguna' => 'gereja_baptis_',
                'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Ujung Bumi',
                'nama_pengguna' => 'gereja_baptis_',
                'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 2, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Jerusalem Keerom',
                'nama_pengguna' => 'gereja_baptis_',
                'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 2, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Allah Ninom Keerom',
                'nama_pengguna' => 'gereja_baptis_',
                'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 2, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Getzemani',
                'nama_pengguna' => 'gereja_baptis_',
                'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 2, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis DKI Yahukimo',
                'nama_pengguna' => 'gereja_baptis_',
                'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 3, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Batra Bonto',
                'nama_pengguna' => 'gereja_baptis_',
                'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 3, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Gereja Baptis Sumahai',
                'nama_pengguna' => 'gereja_baptis_sumahai',
                'kata_sandi' => bcrypt('gereja_baptis_sumahai'),
                'wilayah_id' => 3, // lihat id kota/kab di WilayahSeeder

            ],

        ])->each(function ($item) {
            Gereja::create($item);
        });

    }
}
