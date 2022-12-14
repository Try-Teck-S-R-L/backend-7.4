<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'idCategoria' => '1',
            'nombreCategoria' => 'categoria +35',
            'edadMinima' => '35',
            'edadMaxima' => '70'
        ]);

        DB::table('categorias')->insert([
            'idCategoria' => '2',
            'nombreCategoria' => 'categoria +45',
            'edadMinima' => '45',
            'edadMaxima' => '70'
        ]);

        DB::table('categorias')->insert([
            'idCategoria' => '3',
            'nombreCategoria' => 'categoria +55',
            'edadMinima' => '55',
            'edadMaxima' => '70'
        ]);
    }
}
