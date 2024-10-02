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



        $users = [
            [
                'name' => 'Gereja Baptis Kiwone',
                'email' => 'kiwone@gmail.com',
                'password' => bcrypt('kiwone@gmail.com'),
                'gereja_id' => 1,
                'role' => 'gereja'
            ],
            [
                'name' => 'Gereja Baptis Waena',
                'email' => 'waena@gmail.com',
                'password' => bcrypt('waena@gmail.com'),
                'gereja_id' => 2,
                'role' => 'gereja'
            ],
            [
                'name' => 'Gereja Baptis Kamkey',
                'email' => 'kamkey@gmail.com',
                'password' => bcrypt('kamkey@gmail.com'),
                'gereja_id' => 3,
                'role' => 'gereja'
            ],
            [
                'name' => 'Gereja Baptis Bukit Zaitun Skayland',
                'email' => 'skayland@gmail.com',
                'password' => bcrypt('skayland@gmail.com'),
                'gereja_id' => 4,
                'role' => 'gereja'
            ],
            [
                'name' => 'Gereja Baptis Siloam Buper',
                'email' => 'siloam@gmail.com',
                'password' => bcrypt('siloam@gmail.com'),
                'gereja_id' => 5,
                'role' => 'gereja'
            ],
            [
                'name' => 'Gereja Baptis Bukit Pengharapan Waena',
                'email' => 'pengharapan@gmail.com',
                'password' => bcrypt('pengharapan@gmail.com'),
                'gereja_id' => 6,
                'role' => 'gereja'
            ],
            [
                'name' => 'Gereja Baptis Tiranus Kota raya',
                'email' => 'tiranus@gmail.com',
                'password' => bcrypt('tiranus@gmail.com'),
                'gereja_id' => 7,
                'role' => 'gereja'
            ],

            [
                'name' => 'Gereja Baptis Btn Kota raya',
                'email' => 'btn@gmail.com',
                'password' => bcrypt('btn@gmail.com'),
                'gereja_id' => 8,
                'role' => 'gereja'
            ],

            [
                'name' => 'Gereja Baptis Obelom Wone',
                'email' => 'wone@gmail.com',
                'password' => bcrypt('wone@gmail.com'),
                'gereja_id' => 9,
                'role' => 'gereja'
            ],

            [
                'name' => 'Gereja Baptis Damai Wahno',
                'email' => 'wahno@gmail.com',
                'password' => bcrypt('wahno@gmail.com'),
                'gereja_id' => 10,
                'role' => 'gereja'
            ],

            [
                'name' => 'Gereja Baptis Yohanes Entrop',
                'email' => 'entrop@gmail.com',
                'password' => bcrypt('entrop@gmail.com'),
                'gereja_id' => 11,
                'role' => 'gereja'
            ],

            [
                'name' => 'Gereja Baptis Dawer Entrop',
                'email' => 'dawer@gmail.com',
                'password' => bcrypt('dawer@gmail.com'),
                'gereja_id' => 12,
                'role' => 'gereja'
            ],
        ];

        foreach ($users as $user) {
            $newUser = User::create($user);
            $newUser->assignRole($user['role']);
        }



    }
}
