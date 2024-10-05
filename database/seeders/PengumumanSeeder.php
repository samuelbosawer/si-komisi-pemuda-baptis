<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengumuman;
use Illuminate\Support\Carbon;

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
                'judul' => 'Selamat Hari Kenaikan TUHAN YESUS KRISTUS',
                'keterangan' => 'BADAN PELAYAN PUSAT
PERSEKUTUAN GEREJA-GEREJA BAPTIS PAPUA (PGBP)
Fellowship of Bapstist Churhes of Papua
Mengucapkan,

Selamat Hari Kenaikan TUHAN YESUS KRISTUS
Di rumah Bapa-Ku banyak tempat tinggal. Jika tidak demikian, tentu Aku mengatakannya kepadamu. Sebab Aku pergi ke situ untuk menyediakan tempat bagimu.

Yohanes 14:2 TB
TUHAN YESUS MEMBERKATI,
Salam Dalam Satu Tuhan – Satu Iman dan Satu Baptisan

BANGKIT – MANDIRI – MISIONER',
                'mulai' => Carbon::Now(),
                'selesai' => Carbon::Now(),

                'gereja_id' => 1,

            ],
            [
                'id' => 2,
                'judul' => 'Mision Trip Papua to Sumatera 2024',
                'keterangan' => 'Shalom Bapak Ibu Terkasih Dalam Tuhan Yesus Kristus. Badan Pelayan Pusat Persekutuan Gereja-Gereja Baptis Papua, Wilayah Papua Barat, Bersama Dept. MISI dan PI PGBP. Baru saja melaksanakan Ibadah Peletakan Batu Pertama Pembangunan Gedung Gereja Pos PI Baptis Dame Samosir.

Lokasi Peletakan Batu dilaksanakan di Desa Parbaba Dolok Kec. Pangururan, Kab. Samosir.',
                'mulai' => Carbon::Now(),
                'selesai' => Carbon::Now(),
                'gereja_id' => 2,
            ]
        ])->each(function ($collection) {
            Pengumuman::create($collection);
        });
    }
}