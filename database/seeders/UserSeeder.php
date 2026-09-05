<?php

namespace Database\Seeders;

use App\Enums\RolesEnum;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Ram Adhikari',
            'email' => 'ram@example.com',
            'password' => bcrypt('ram@12345'),
        ])->assignRole(RolesEnum::User->value);

        User::factory()->create([
            'name' => 'Vendor Vendor',
            'email' => 'vendor@example.com',
            'password' => bcrypt('vendor@12345'),
        ])->assignRole(RolesEnum::Vendor->value);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@12345'),
        ])->assignRole(RolesEnum::Admin->value);
    }
}
