<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmpleadoController;


Route::get('/', function () {
    return view('login');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/menuOpciones', function () {
    return view('menuOpciones');
})->name('menuOpciones');

Route::get('/menuOpciones', function () {
    if (!session('user')) {
        return redirect('/'); // Redirige al login si no hay un usuario autenticado en la sesión
    }
    return view('menuOpciones'); // Muestra la vista si el usuario está autenticado
})->name('menuOpciones');

Route::get('/logout', function () {
    session()->forget('user'); // Limpia la sesión del usuario
    return redirect('/'); // Redirige al login
})->name('logout');

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleados');

