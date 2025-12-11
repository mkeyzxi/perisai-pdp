<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'id'       => Str::uuid(),
                'username' => 'Admin',
                'email'    => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'role'     => 'admin',
            ],
            [
                'id' => Str::uuid(),
                'username' => 'Konstruksi',
                'email' => 'konstruksi@gmail.com',
                'password' => Hash::make('konstruksi123'),
                'role' => 'konstruksi',
            ],
            [
                'id' => Str::uuid(),
                'username' => 'Akuntansi',
                'email' => 'akuntansi@gmail.com',
                'password' => Hash::make('akuntansi123'),
                'role' => 'akuntansi',
            ],

        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
