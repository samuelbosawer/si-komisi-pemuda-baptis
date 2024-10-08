<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        $this->call(AgendaKegiatanSeeder::class);
        $this->call(GaleriSeeder::class);
        $this->call(GerejaSeeder::class);
        $this->call(JadwalIbadahSeeder::class);
        $this->call(PemudaSeeder::class);
        $this->call(PemudaSeeder::class);
        $this->call(PengumumanSeeder::class);
        $this->call(WilayahSeeder::class);

    }
}
