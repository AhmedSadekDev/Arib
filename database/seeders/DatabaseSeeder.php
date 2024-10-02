<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Roles::create([
            'name' => 'Super_admin',
        ]);
        Roles::create([
            'name' => 'Employee',
        ]);
        User::create([
            'f_name' => 'Super Admin',
            'l_name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'phone' => '00000000000000',
            'password' => Hash::make('12345678'),
            'role_id' => 1,
        ]);
    }
}
