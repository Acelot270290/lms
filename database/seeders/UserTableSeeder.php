<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            // Admin
            [
                'name' => 'Alan',
                'username' => 'admin',
                'email' => 'contato@alandiniz.com.br',
                'password' => Hash::make('123456789'),
                'role' => 'admin',
                'status' => '1',
            ],
            // Instructor
            [
                'name' => 'Instructor',
                'username' => 'instructor',
                'email' => 'instructor@alandiniz.com.br',
                'password' => Hash::make('123456789'),
                'role' => 'instructor',
                'status' => '1',
            ],
            // User
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@alandiniz.com.br',
                'password' => Hash::make('123456789'),
                'role' => 'user',
                'status' => '1',
            ],
        ];

        DB::table('users')->insert($users);
    }
}
