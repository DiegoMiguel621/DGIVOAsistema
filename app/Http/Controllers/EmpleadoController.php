<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpleadoController extends Controller
{
    // Mostrar la lista de empleados
    public function index()
    {
        // Obtener todos los usuarios desde la base de datos
        $usuarios = DB::table('usuario')->get();
        
        // Retornar la vista con los datos de los usuarios
        return view('empleados', compact('usuarios'));
    }

    // Mostrar la vista de agregar empleado
    public function create()
    {
        // Retornar la vista del formulario de agregar empleado
        return view('AddEmpleados');
    }

    // Guardar un nuevo empleado en la base de datos
    public function store(Request $request)
    {
        // Validar los datos enviados desde el formulario
        $request->validate([
            'primerNombre' => 'required|string|max:30',
            'segundoNombre' => 'nullable|string|max:30',
            'apPaterno' => 'required|string|max:30',
            'apMaterno' => 'nullable|string|max:30',
            'correo' => 'required|email|unique:usuario,correo',
            'contraseña' => 'required|string|min:6',
            'direccion' => 'required|string|in:DICO,DEROA,General',
        ]);

        // Insertar el nuevo empleado en la base de datos
        DB::table('usuario')->insert([
            'primerNombre' => $request->primerNombre,
            'segundoNombre' => $request->segundoNombre,
            'apPaterno' => $request->apPaterno,
            'apMaterno' => $request->apMaterno,
            'correo' => $request->correo,
            'contraseña' => bcrypt($request->contraseña), // Encriptar la contraseña
            'direccion' => $request->direccion,
        ]);

        // Redirigir a la lista de empleados con un mensaje de éxito
        return redirect()->route('empleados')->with('success', 'Empleado agregado correctamente.');
    }

    // Mostrar el formulario de edición con los datos cargados
    public function edit($id)
    {
        // Obtener los datos del empleado por su ID
        $empleado = DB::table('usuario')->where('idUser', $id)->first();

        // Verificar si el empleado existe
        if (!$empleado) {
            return redirect()->route('empleados')->with('error', 'Empleado no encontrado.');
        }

        // Retornar la vista con los datos del empleado
        return view('editEmpleados', compact('empleado'));
    }

    // Actualizar los datos del empleado en la base de datos
    public function update(Request $request, $id)
    {
        // Validar los datos enviados desde el formulario
        $request->validate([
            'primerNombre' => 'required|string|max:30',
            'segundoNombre' => 'nullable|string|max:30',
            'apPaterno' => 'required|string|max:30',
            'apMaterno' => 'nullable|string|max:30',
            'correo' => 'required|email|unique:usuario,correo,' . $id . ',idUser',
            'contraseña' => 'nullable|string|min:6',
            'direccion' => 'required|string|in:DICO,DEROA,General',
        ]);

        // Preparar los datos a actualizar
        $updateData = [
            'primerNombre' => $request->primerNombre,
            'segundoNombre' => $request->segundoNombre,
            'apPaterno' => $request->apPaterno,
            'apMaterno' => $request->apMaterno,
            'correo' => $request->correo,
            'direccion' => $request->direccion,
        ];

        // Si se proporciona una nueva contraseña, encriptarla
        if ($request->filled('contraseña')) {
            $updateData['contraseña'] = bcrypt($request->contraseña);
        }

        // Actualizar los datos del empleado
        DB::table('usuario')->where('idUser', $id)->update($updateData);

        // Redirigir a la lista de empleados con un mensaje de éxito
        return redirect()->route('empleados')->with('success', 'Empleado actualizado correctamente.');
    }
}
