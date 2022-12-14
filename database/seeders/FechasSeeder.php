<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FechasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fechas')->insert([
            'etapa' => 'inicioInscripciones',
            'fechaLimite' => '2022-07-01',
            'monto' => '0'
        ]);

        DB::table('fechas')->insert([
            'etapa' => 'finDescuento',
            'fechaLimite' => '2022-08-01',
            'monto' => '250'
        ]);

        DB::table('fechas')->insert([
            'etapa' => 'finInscripciones',
            'fechaLimite' => '2023-01-01',
            'monto' => '350'
        ]);
    }
}
