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
            [
                'name' => 'Gereja Baptis Mula-Mula Santa Rosa',
                'email' => 'santarosa@gmail.com',
                'password' => bcrypt('santarosa@gmail.com'),
                'gereja_id' => 13,
                'role' => 'gereja'
            ],
            [
                'name' => 'Gereja Baptis Sion Angkasa',
                'email' => 'sionangkasa@gmail.com',
                'password' => bcrypt('sionangkasa@gmail.com'),
                'gereja_id' => 14,
                'role' => 'gereja'
            ],
            [
                'name' => 'Gereja Baptis BaseG Pasir II',
                'email' => 'baseg@gmail.com',
                'password' => bcrypt('baseg@gmail.com'),
                'gereja_id' => 15,
                'role' => 'gereja'
            ],
            [
                'name' => 'Gereja Baptis Kota Barat',
                'email' => 'koyabarat@gmail.com',
                'password' => bcrypt('koyabarat@gmail.com'),
                'gereja_id' => 16,
                'role' => 'gereja'
            ],
            [
                'name' => 'Gereja Baptis Moso Batas ',
                'email' => 'moso@gmail.com',
                'password' => bcrypt('moso@gmail.com'),
                'gereja_id' => 17,
                'role' => 'gereja'
            ],
            [
                'name' => 'Gereja Baptis Tiofon Koya',
                'email' => 'tiofonkoya@gmail.com',
                'password' => bcrypt('tiofonkoya@gmail.com'),
                'gereja_id' => 18,
                'role' => 'gereja'
            ],
            [
                'name' => 'Gereja Baptis Imanuel Toladan',
                'email' => 'imanuel@gmail.com',
                'password' => bcrypt('imanuel@gmail.com'),
                'gereja_id' => 19,
                'role' => 'gereja'
            ],
            [
                'name' => 'Gereja Baptis Yahim Sentani ',
                'email' => 'yahim@gmail.com',
                'password' => bcrypt('yahim@gmail.com'),
                'gereja_id' => 20,
                'role' => 'gereja'
            ],
            [
                'name' => 'Gereja Baptis Cahaya Kasih ',
                'email' => 'cahayakasih@gmail.com',
                'password' => bcrypt('cahayakasih@gmail.com'),
                'gereja_id' => 21,
                'role' => 'gereja'
            ],
            [
                'name' => 'Gereja Baptis Walibu Kehiran ',
                'email' => 'walibukehiran@gmail.com',
                'password' => bcrypt('walibukehiran@gmail.com'),
                'gereja_id' => 22,
                'role' => 'gereja'
            ],
            [
                'name' => 'Gereja Baptis Ujung Bumi ',
                'email' => 'ujungbumi@gmail.com',
                'password' => bcrypt('ujungbumi@gmail.com'),
                'gereja_id' => 23,
                'role' => 'gereja'
            ],
            [
                'name' => 'Gereja Baptis Jerusalem Keerom',
                'email' => 'jerusalem@gmail.com',
                'password' => bcrypt('jerusalem@gmail.com'),
                'gereja_id' => 24,
                'role' => 'gereja'
            ],
            [
                'name' => 'Gereja Baptis Allah Ninom Keerom',
                'email' => 'allahninom@gmail.com',
                'password' => bcrypt('allahninom@gmail.com'),
                'gereja_id' => 25,
                'role' => 'gereja'
            ],
            [
                'name' => 'Gereja Baptis Getzemani',
                'email' => 'getzemani@gmail.com',
                'password' => bcrypt('getzemani@gmail.com'),
                'gereja_id' => 26,
                'role' => 'gereja'
            ],
            [
                'name' => 'Gereja Baptis DKI Yahukimo',
                'email' => 'dkiyahukimo@gmail.com',
                'password' => bcrypt('dkiyahukimo@gmail.com'),
                'gereja_id' => 27,
                'role' => 'gereja'
            ],
            [
                'name' => 'Gereja Baptis Batra Bonto',
                'email' => 'batrabonto@gmail.com',
                'password' => bcrypt('batrabonto@gmail.com'),
                'gereja_id' => 28,
                'role' => 'gereja'
            ],
            [
                'name' => 'Gereja Baptis Sumahai',
                'email' => 'sumahai@gmail.com',
                'password' => bcrypt('sumahai@gmail.com'),
                'gereja_id' => 29,
                'role' => 'gereja'
            ],
        ];

        foreach ($users as $user) {
            $newUser = User::create($user);
            $newUser->assignRole($user['role']);
        }
    }
}
