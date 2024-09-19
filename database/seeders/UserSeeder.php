<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
        // 'user' => 'Admin',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' =>  bcrypt('admin@gmail.com')
        ]);
        $admin->assignRole('admin');

        $admin = User::create([
        // 'user' => 'Gereja',
            'name' => 'Gereja',
            'email' => 'gereja@gmail.com',
            'password' =>  bcrypt('gereja@gmail.com')
        ]);
        $admin->assignRole('gereja');

        $admin = User::create([
        // 'user' => 'wilayah',
            'name' => 'wilayah',
            'email' => 'wilayah@gmail.com',
            'password' =>  bcrypt('wilayah@gmail.com')
        ]);
        $admin->assignRole('wilayah');



    }
}
