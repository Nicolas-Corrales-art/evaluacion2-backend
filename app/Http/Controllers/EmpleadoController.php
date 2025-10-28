<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;   

class EmpleadoController extends Controller
{
    /**
     * Mostrar todos los productos (SELECT)
     */
        public function index(){
        $empleados = Empleado::all(); // SELECT * FROM empleados
        return response()->json($empleados);
         }
    

    // INSERT (crear nuevo empleado)
    public function store(Request $request)
    {
        // Validamos los campos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'salario' => 'required|numeric|min:0'
        ]);

        // Insertamos el nuevo empleado
        $empleado = Empleado::create([
            'nombre' => $request->nombre,
            'cargo' => $request->cargo,
            'salario' => $request->salario
        ]);

        // Retornamos una respuesta JSON
        return response()->json([
            'message' => 'Empleado creado correctamente',
            'empleado' => $empleado
        ], 201);
    }

}

   

   

  
