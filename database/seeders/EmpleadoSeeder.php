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
            'correo'=>'r@gmail.com',
            'salario'=>4500,
            ]);

             Empleado::create([
            'nombre'=>'Micaela',
            'apellido'=>'Flores',
            'correo'=>'micaela@gmail.com',
            'salario'=>9500,
           ]);
              

             Empleado::create([
            'nombre'=>'Raul',
            'apellido'=>'Flores',
            'correo'=>'raul@gmail.com',
            'salario'=>8500,
           ]);
              

             Empleado::create([
            'nombre'=>'Carlos',
            'apellido'=>'Lopez',
            'correo'=>'carlos@gmail.com',
            'salario'=>3700,
           ]);   

             Empleado::create([
            'nombre'=>'Alberto',
            'apellido'=>'Rojas',
            'correo'=>'alberto@gmail.com',
            'salario'=>3506,
           ]);
               Empleado::create([
            'nombre'=>'Juan',
            'apellido'=>'Rojas',
            'correo'=>'juan@gmail.com',
            'salario'=>6500,
           ]);
               Empleado::create([
            'nombre'=>'David',
            'apellido'=>'Rojas',
            'correo'=>'david@gmail.com',
            'salario'=>500,
           ]);
                Empleado::create([
            'nombre'=>'Erick',
            'apellido'=>'Rojas',
            'correo'=>'erick@gmail.com',
            'salario'=>1500,
           ]);
                 Empleado::create([
            'nombre'=>'Angel',
            'apellido'=>'Rojas',
            'correo'=>'angel@gmail.com',
            'salario'=>9500,
           ]);


         
    }
}
