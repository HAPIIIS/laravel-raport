<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'nisn' => '0025018207',
                'name' => 'Akun Guru',
                'role' => 'admin',
                'password' => bcrypt('12345678'),
            ],
            [
                'nisn' => '0025018208',
                'name' => 'Akun Siswa',
                'role' => 'siswa',
                'password' => bcrypt('12345678'),
            ]
        ]);
    }
}
