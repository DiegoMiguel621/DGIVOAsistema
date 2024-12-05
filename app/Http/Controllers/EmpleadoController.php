<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpleadoController extends Controller
{
    public function index()
    {
        // Obtener todos los usuarios desde la base de datos
        $usuarios = DB::table('usuario')->get();
        
        // Retornar la vista con los datos de los usuarios
        return view('empleados', compact('usuarios'));
    }
}

