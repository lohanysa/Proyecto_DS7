<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;
use App\Http\Requests\usuarioRequest;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(usuarioRequest $request)
    {
        $hashedPassword = Hash::make($request->password);
        usuario::create([
            'usuario' => $request->usuario,
            'correo' => $request->correo,
            'password' => $hashedPassword,
            'nombre_contacto' => $request->nombre_contacto,
            'nombre_restaurante' => $request->nombre_restaurante,
            'imagen_fondo' => $request->imagen_fondo,
            'logo_empresa' => $request->logo_empresa,
            'tipo_usuario' => $request->tipo_usuario,
            'status' => $request->status,
        ]);

        return view('administrador.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(usuarioRequest $request, usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usuario $usuario)
    {
        //
    }
}
