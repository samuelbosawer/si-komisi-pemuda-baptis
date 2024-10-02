<?php

namespace Database\Seeders;

use App\Models\AgendaKegiatan as Agenda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

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
                'judul' => 'IBADAH GABUNGAN BERSAMA MISI BMA DI WILAYAH TYOM',
                'keterangan' => 'Dalam Waktu Tuhan yang baik, pada hari minggu, (02/06/2024) Umat Tuhan di Wilayah Tyom mendapat Kunjungan dari Misi Baptis Australia (Baptist Mission Australia – BMA) sebutan nama baru dari Perubahan ABMS ke GIA dan sekarang BMA (Baptist Mission Australia) bersama dengan Badan Pelayan Pusat Persekutuan Gereja-Gereja Baptis Papua (BPP-PGBP) serta Delegasi para tamu undangan.',
                'status' => 'Aktif',
                'tanggal_kegiatan'=> Carbon::now(),
            ],
            [
                'id' => 2,
                'judul' => 'IBADAH GABUNGAN PENCURAHAN ROH KUDUS',
                 'keterangan' => 'PERSEKUTUAN GEREJA-GEREJA BAPTIS PAPUA (PGBP)
WILAYAH JAYAPURA KEEROM YAHUKIMO
IBADAH GABUNGAN
PENCURAHAN ROH KUDUS
” BIARKAN ROH KUDUS MEMIMPIN DALAM KEBENARAN | YOHANES 16:13 “',
                'status' => 'Aktif',
                'tanggal_kegiatan'=> Carbon::now(),

            ]
        ])->each(function ($collection) {
            Agenda::create($collection);
        });
    }
}
