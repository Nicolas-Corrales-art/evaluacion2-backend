<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Empleado::create([
            'nombre'=>'Nicolas',
            'apellido'=>'Corrales',
            'correo'=>'ripolnick82@gmail.com',
            'salario'=>5000,
        
            ]);
             Empleado::create([
            'nombre'=>'Raul',
            'apellido'=>'Perez',
            'correo'=>'raul@gmail.com',
            'salario'=>4500,
            ]);

             Empleado::create([
            'nombre'=>'Micaela',
            'apellido'=>'Flores',
            'correo'=>'@gmail.com',
            'salario'=>3500,
           ]);

         
    }
}
