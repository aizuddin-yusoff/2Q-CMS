<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $pass = Hash::make('password');

        $user = [
            [ 'name' => 'Administrator', 'email' => 'admin@admin.com', 'password' => $pass ]
        ];

        DB::table('users')->insert($user);
    }
}
