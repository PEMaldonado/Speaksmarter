<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin@example.com'),
        ])->assignRole('admin');


        User::create([
            'name' => 'Editor',
            'email' => 'editor@example.com',
            'password' => bcrypt('editor@example.com'),
        ])->assignRole('editor');
    }
}
