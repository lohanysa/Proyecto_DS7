<?php

namespace App\Http\Controllers;

use App\Models\inscripcion;
use Illuminate\Http\Request;

class InscripcionController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {      
       $request->validate(['correo'=>'required|email'],

       [
        'email.required' => 'El campo de correo electrónico es obligatorio.',
        'email.email' => 'Por favor, ingrese una dirección de correo electrónico válida.']);
        
       inscripcion::create($request->all());
       return back()->with("mensaje","se ha inscrito correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(inscripcion $inscripcion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(inscripcion $inscripcion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, inscripcion $inscripcion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(inscripcion $inscripcion)
    {
        //
    }
}
