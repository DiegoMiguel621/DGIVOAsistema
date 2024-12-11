<?php

namespace App\Http\Controllers;

use App\Models\Visitas;
use Illuminate\Http\Request;

class VisitasController extends Controller
{
    public function index()
    {
        // Obtener todas las visitas del día actual
        $visitas = Visitas::whereDate('fecha', now()->toDateString())->get();

        // Retornar la vista con los datos
        return view('visitas', compact('visitas'));
    }
}
