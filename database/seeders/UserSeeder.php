<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make(12345678)
        // ]);
        // User::create([
        //     'name' => 'service admin',
        //     'email' => 'serviceadmin@gmail.com',
        //     'service_id' => 1,
        //     'password' => Hash::make(12345678)
        // ]);
        // User::create([
        //     'name' => 'user',
        //     'email' => 'user@gmail.com',
        //     'service_id' => 1,
        //     'password' => Hash::make(12345678)
        // ]);

    }
}
