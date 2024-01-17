<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Riza Anando',
                'email' => 'riza_anando@gmail.com',
                'password' => bcrypt('qwerty'),
                'role' => 'user'
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('qwerty'),
                'role' => 'admin'
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}