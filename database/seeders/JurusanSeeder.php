<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jurusan;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jurusan::create(
            [
                'jurusan' => 'Sistem Informasi',
                'keterangan' => '',

            ]
        );

        Jurusan::create(
            [
                'jurusan' => 'Statistika',
                'keterangan' => '',

            ]
        );

        Jurusan::create(
            [
                'jurusan' => 'Matematika',
                'keterangan' => '',

            ]
        );

        Jurusan::create(
            [
                'jurusan' => 'Fisika',
                'keterangan' => '',

            ]
        );


        Jurusan::create(
            [
                'jurusan' => 'Farmasi',
                'keterangan' => '',

            ]
        );

    }
}
