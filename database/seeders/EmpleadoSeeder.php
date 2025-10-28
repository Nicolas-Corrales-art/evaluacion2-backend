<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds. creamos 10 ejemplos
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
            'correo'=>'rl@gmail.com',
            'salario'=>45000,
            ]);

             Empleado::create([
            'nombre'=>'Micaela',
            'apellido'=>'Flores',
            'correo'=>'micaela@gmail.com',
            'salario'=>95000,
           ]);
              

             Empleado::create([
            'nombre'=>'Raul',
            'apellido'=>'Flores',
            'correo'=>'raul@gmail.com',
            'salario'=>85000,
           ]);
              

             Empleado::create([
            'nombre'=>'Carlos',
            'apellido'=>'Lopez',
            'correo'=>'carlosm@gmail.com',
            'salario'=>37000,
           ]);   

             Empleado::create([
            'nombre'=>'Alberto',
            'apellido'=>'Rojas',
            'correo'=>'alberto@gmail.com',
            'salario'=>35060,
           ]);
               Empleado::create([
            'nombre'=>'Juan',
            'apellido'=>'Rojas',
            'correo'=>'juan@gmail.com',
            'salario'=>65000,
           ]);
               Empleado::create([
            'nombre'=>'David',
            'apellido'=>'Rojas',
            'correo'=>'david@gmail.com',
            'salario'=>50000,
           ]);
                Empleado::create([
            'nombre'=>'Erick',
            'apellido'=>'Rojas',
            'correo'=>'erick@gmail.com',
            'salario'=>15000,
           ]);
                 Empleado::create([
            'nombre'=>'Angel',
            'apellido'=>'Rojas',
            'correo'=>'angel@gmail.com',
            'salario'=>95000,
           ]);


         
    }
}
