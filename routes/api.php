<?php
use illuminate\Http\Request;
use illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

Route::apiResource('empleados',EmpleadoController::class);
