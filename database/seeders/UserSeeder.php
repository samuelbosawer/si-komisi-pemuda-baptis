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



        $gereja = [
            [
                'name' => 'Gereja Baptis Kiwone',
                'email' => 'kiwone@gmail.com',
                'password' => bcrypt('kiwone@gmail.com'),
                'gereja_id' => 1,

            ],
            [
                'name' => 'Gereja Baptis Waena',
                'email' => 'waena@gmail.com',
                'password' => bcrypt('waena@gmail.com'),
                'gereja_id' => 2,

            ],
            [
                'name' => 'Gereja Baptis Kamkey',
                'email' => 'kamkey@gmail.com',
                'password' => bcrypt('kamkey@gmail.com'),
                'gereja_id' => 3,

            ],
            [
                'name' => 'Gereja Baptis Bukit Zaitun Skayland',
                'email' => 'skayland@gmail.com',
                'password' => bcrypt('skayland@gmail.com'),
                'gereja_id' => 4,

            ],
            [
                'name' => 'Gereja Baptis Siloam Buper',
                'email' => 'siloam@gmail.com',
                'password' => bcrypt('siloam@gmail.com'),
                'gereja_id' => 5,

            ],
            [
                'name' => 'Gereja Baptis Bukit Pengharapan Waena',
                'email' => 'pengharapan@gmail.com',
                'password' => bcrypt('pengharapan@gmail.com'),
                'gereja_id' => 6,

            ],
            [
                'name' => 'Gereja Baptis Tiranus Kota raya',
                'email' => 'tiranus@gmail.com',
                'password' => bcrypt('tiranus@gmail.com'),
                'gereja_id' => 7,

            ],

            [
                'name' => 'Gereja Baptis Btn Kota raya',
                'email' => 'btn@gmail.com',
                'password' => bcrypt('btn@gmail.com'),
                'gereja_id' => 8,

            ],

            [
                'name' => 'Gereja Baptis Obelom Wone',
                'email' => 'wone@gmail.com',
                'password' => bcrypt('wone@gmail.com'),
                'gereja_id' => 9,

            ],

            [
                'name' => 'Gereja Baptis Damai Wahno',
                'email' => 'wahno@gmail.com',
                'password' => bcrypt('wahno@gmail.com'),
                'gereja_id' => 10,

            ],

            [
                'name' => 'Gereja Baptis Yohanes Entrop',
                'email' => 'entrop@gmail.com',
                'password' => bcrypt('entrop@gmail.com'),
                'gereja_id' => 11,

            ],

            [
                'name' => 'Gereja Baptis Dawer Entrop',
                'email' => 'dawer@gmail.com',
                'password' => bcrypt('dawer@gmail.com'),
                'gereja_id' => 12,

            ],
            [
                'name' => 'Gereja Baptis Mula-Mula Santa Rosa',
                'email' => 'santarosa@gmail.com',
                'password' => bcrypt('santarosa@gmail.com'),
                'gereja_id' => 13,

            ],
            [
                'name' => 'Gereja Baptis Sion Angkasa',
                'email' => 'sionangkasa@gmail.com',
                'password' => bcrypt('sionangkasa@gmail.com'),
                'gereja_id' => 14,

            ],
            [
                'name' => 'Gereja Baptis BaseG Pasir II',
                'email' => 'baseg@gmail.com',
                'password' => bcrypt('baseg@gmail.com'),
                'gereja_id' => 15,

            ],
            [
                'name' => 'Gereja Baptis Kota Barat',
                'email' => 'koyabarat@gmail.com',
                'password' => bcrypt('koyabarat@gmail.com'),
                'gereja_id' => 16,

            ],
            [
                'name' => 'Gereja Baptis Moso Batas ',
                'email' => 'moso@gmail.com',
                'password' => bcrypt('moso@gmail.com'),
                'gereja_id' => 17,

            ],
            [
                'name' => 'Gereja Baptis Tiofon Koya',
                'email' => 'tiofonkoya@gmail.com',
                'password' => bcrypt('tiofonkoya@gmail.com'),
                'gereja_id' => 18,

            ],
            [
                'name' => 'Gereja Baptis Imanuel Toladan',
                'email' => 'imanuel@gmail.com',
                'password' => bcrypt('imanuel@gmail.com'),
                'gereja_id' => 19,

            ],
            [
                'name' => 'Gereja Baptis Yahim Sentani ',
                'email' => 'yahim@gmail.com',
                'password' => bcrypt('yahim@gmail.com'),
                'gereja_id' => 20,

            ],
            [
                'name' => 'Gereja Baptis Cahaya Kasih ',
                'email' => 'cahayakasih@gmail.com',
                'password' => bcrypt('cahayakasih@gmail.com'),
                'gereja_id' => 21,

            ],
            [
                'name' => 'Gereja Baptis Walibu Kehiran ',
                'email' => 'walibukehiran@gmail.com',
                'password' => bcrypt('walibukehiran@gmail.com'),
                'gereja_id' => 22,

            ],
            [
                'name' => 'Gereja Baptis Ujung Bumi ',
                'email' => 'ujungbumi@gmail.com',
                'password' => bcrypt('ujungbumi@gmail.com'),
                'gereja_id' => 23,

            ],
            [
                'name' => 'Gereja Baptis Jerusalem Keerom',
                'email' => 'jerusalem@gmail.com',
                'password' => bcrypt('jerusalem@gmail.com'),
                'gereja_id' => 24,

            ],
            [
                'name' => 'Gereja Baptis Allah Ninom Keerom',
                'email' => 'allahninom@gmail.com',
                'password' => bcrypt('allahninom@gmail.com'),
                'gereja_id' => 25,

            ],
            [
                'name' => 'Gereja Baptis Getzemani',
                'email' => 'getzemani@gmail.com',
                'password' => bcrypt('getzemani@gmail.com'),
                'gereja_id' => 26,

            ],
            [
                'name' => 'Gereja Baptis DKI Yahukimo',
                'email' => 'dkiyahukimo@gmail.com',
                'password' => bcrypt('dkiyahukimo@gmail.com'),
                'gereja_id' => 27,

            ],
            [
                'name' => 'Gereja Baptis Batra Bonto',
                'email' => 'batrabonto@gmail.com',
                'password' => bcrypt('batrabonto@gmail.com'),
                'gereja_id' => 28,

            ],
            [
                'name' => 'Gereja Baptis Sumahai',
                'email' => 'sumahai@gmail.com',
                'password' => bcrypt('sumahai@gmail.com'),
                'gereja_id' => 29,

            ],
        ];

        foreach ($gereja as $user) {
            $newUser = User::create($user);
            $newUser->assignRole('gereja');
        }


        $wilayah = [
            [
                'name' => 'Wilayah Jayapura',
                'email' => 'jayapura@gmail.com',
                'password' => bcrypt('jayapura@gmail.com'),
                'wilayah_id' => 1,

            ],

            [
                'name' => 'Wilayah Keerom',
                'email' => 'keerom@gmail.com',
                'password' => bcrypt('keerom@gmail.com'),
                'wilayah_id' => 2,

            ],

            [
                'name' => 'Wilayah Yahukomi',
                'email' => 'yahukomi@gmail.com',
                'password' => bcrypt('yahukomi@gmail.com'),
                'wilayah_id' => 3,

            ],
        ];

        foreach ($wilayah as $user) {
            $newUser = User::create($user);
            $newUser->assignRole('gereja');
        }
    }
}
