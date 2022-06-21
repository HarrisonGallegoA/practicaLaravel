<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Empleados_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargo = DB::table('cargos')->where(['nombre'=>'Instructor'])->value('id');

    DB::table('empleados')->insert([
        'nombre'=> 'Dony Cardenas',
        'email' => 'cardenasdonny@gmail.com',
        'direccion' => 'calle62B',
        'edad' => 36,
        'idCargo' => 1
    ]);
    DB::table('empleados')->insert([
        'nombre'=> 'Harrison Gallego',
        'email' => 'harrison@gmail.com',
        'direccion' => 'calle54D',
        'edad' => 18,
        'idCargo' => 2
    ]);
    DB::table('empleados')->insert([
        'nombre'=> 'Manuela cardona',
        'email' => 'ManuelaA@gmail.com',
        'direccion' => 'calle37A',
        'edad' => 23,
        'idCargo' => 3
    ]);
    }
}
