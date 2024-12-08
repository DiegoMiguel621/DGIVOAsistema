<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Buscar al usuario en la base de datos
        $user = DB::table('usuario')->where('correo', $request->email)->first();

        // Verificar si el usuario existe y la contraseña es correcta
        if ($user && $request->password === $user->contraseña) {
            // Iniciar sesión (almacenar usuario en la sesión)
            session(['user' => $user]);            
            return redirect()->route('menuOpciones');
        }

        // Si los datos son incorrectos, redirigir al login con error
        return back()->withErrors(['loginError' => 'Correo o contraseña incorrectos.']);
    }
}
