<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            [
                'nisn'=>'0012345',
                'name'=>'Hafizh Trisnindito',
                'role'=>'0',
                'password'=>bcrypt('123456'),
            ],
            [
                'nisn'=>'0012346',
                'name'=>'Hafizh Waluyo',
                'role'=>'1',
                'password'=>bcrypt('123456'),
            ],
            [
                'nisn'=>'0012347',
                'name'=>'Hafizh Kebab',
                'role'=>'2',
                'password'=>bcrypt('123456'),
            ],
        ]);
    }
}
