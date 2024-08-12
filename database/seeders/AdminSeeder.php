<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::truncate();
        $params = [
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@123'),
            'name' => 'Krish Siddhapura',
            'image' => NULL,
            'role' => 'super-admin',
            'timezone' => 'Asia/Kolkata',
        ];
        $insert = new Admin();
        $insert->fill($params)->save();
    }
}
