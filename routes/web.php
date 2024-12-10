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

// Mostrar la lista de empleados
Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleados');

// Mostrar la vista de agregar empleado
Route::get('/add-empleados', [EmpleadoController::class, 'create'])->name('addEmpleados');

// Guardar un nuevo empleado en la base de datos
Route::post('/empleados', [EmpleadoController::class, 'store'])->name('empleados.store');


// Mostrar formulario de edición
Route::get('/empleados/{id}/edit', [EmpleadoController::class, 'edit'])->name('empleados.edit');

// Actualizar empleado
Route::put('/empleados/{id}', [EmpleadoController::class, 'update'])->name('empleados.update');