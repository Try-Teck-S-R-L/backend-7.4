<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'administrador',
            'password' => Hash::make('123123123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Mauricio',
            'email' => 'maury.vargasl@gmail.com',
            'role' => 'administrador',
            'password' => Hash::make('123123123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Juan',
            'email' => 'juan@gmail.com',
            'role' => 'usuario',
            'password' => Hash::make('123123123'),
        ]);
    }
}
