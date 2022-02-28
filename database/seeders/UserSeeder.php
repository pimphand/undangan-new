<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "admin",
            'whatsapp' => "08977931249",
            'username' => 'admin',
            'email' => "admin@gmail.com",
            'password' => bcrypt('admin'),
            'role' => 0,
            'status' => 1
        ]);
        User::create([
            'name' => "user",
            'whatsapp' => "08977931219",
            'username' => 'user',
            'email' => "user@gmail.com",
            'password' => bcrypt('user'),
            'role' => 1,
            'status' => 1
        ]);

        User::create([
            'name' => "organizer",
            'whatsapp' => "08977931229",
            'username' => 'organizer',
            'email' => "organizer@gmail.com",
            'password' => bcrypt('organizer'),
            'role' => 2,
            'status' => 1
        ]);

        User::create([
            'name' => "reseller",
            'whatsapp' => "08977931239",
            'username' => 'reseller',
            'email' => "reseller@gmail.com",
            'password' => bcrypt('reseller'),
            'role' => 2,
            'status' => 1
        ]);
    }
}
