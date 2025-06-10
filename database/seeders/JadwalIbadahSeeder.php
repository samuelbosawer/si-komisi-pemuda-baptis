<?php

namespace Database\Seeders;

use App\Models\JadwalIbadah as JadwalIbadah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class JadwalIbadahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect(
            [
                [
                    'id' => 1,

                    'tempat_ibadah' => 'Gereja Baptis Kiwone',
                    'pelayan_firman' => 'Ev. Yokiles Wandik.S.Th.',
                    'doa_syukur' => 'Ev. Binias Wandik.S.Th.',
                    'doa_syafaat' => 'Ev. Yohanan wakerkwa.S.Th.',
                    'status' => 'Terlaksana',
                    'tanggal' => Carbon::now(),


                ],
                [
                    'id' => 2,

                    'tempat_ibadah' => 'Gereja Baptis Waena',
                    'pelayan_firman' => 'Ev. Yenius Wainmbo.Dip Th.',
                    'doa_syukur' => 'Ev. Binias Wandik.S.Th.',
                    'doa_syafaat' => 'Ev. Kulok Yigibalom.S.Th. ',
                    'status' => 'Tidak Terlaksana',
                    'tanggal' => Carbon::now(),


                ]

                // collect([
                //     [
                //         'id' => 1,
                // 'nama_gereja' => 'Semua Gereja',
                // 'tanggal' => Carbon::now(),
                // 'status' => 'aktif',
                // 'tempat_ibadah' => 'Gereja Baptis Kiwone',
                // 'pelayan_firman' => 'Ev Yokiles Wandik. S.Th',
                // 'doa_syukur' => 'Ev. Yokiles Wandik. S.Th',
                // 'doa_syafaat' => 'Ev. Yenius Wanimbo.Dip.Th',


                // 'mulai' => Carbon::Now(),
                // 'selesai' => Carbon::Now(),
                // ],
                // [
                //     'id' => 2,
                // 'nama_gereja' => 'Semua Gereja',
                // 'tanggal' => Carbon::now(),
                // 'status' => 'aktif',
                // 'tempat_ibadah' => 'Gereja Baptis Waena',
                // 'pelayan_firman' => 'Ev Penas Wandik. S.Th',
                // 'doa_syukur' => 'Ev. Penas Wandik. S.Th',
                // 'doa_syafaat' => 'Ev. Yohanan Wakerkwa. S.Th',


                // 'mulai' => Carbon::Now(),
                // 'selesai' => Carbon::Now(),
                //     ],

            ]
        )->each(function ($item) {
            JadwalIbadah::create($item);
        });

        //
    }
}
