<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * php artisan make:seeder NivelSeeder
 * php artisan db:seed --class=NivelSeeder
 */

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $niveles = [
            'Primaria',
            'Secundaria',
            'Preparatoria',
            'Universidad',
        ];

        foreach ($niveles as $nivel) {
           DB::table('niveles')->insert([
               'nombre' => $nivel,
           ]);
        }
    }
}
