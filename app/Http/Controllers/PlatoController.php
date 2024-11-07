<?php

namespace App\Http\Controllers;

use App\Models\plato;
use App\Models\Categoriaplato;
use App\Models\usuario;
use Illuminate\Http\Request;

class PlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $platos = Plato::all();
        return view('plato.index', compact('platos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoriaplato::all();
        $correo = Usuario::select('correo', 'id')->get();
        return view('plato.create', compact('categorias', 'correo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        Plato::create($request->all());
        
        return redirect(route('plato.index'))->with("mensaje", "se ha creado un nuevo plato ");
    }

    /**
     * Display the specified resource.
     */
    public function show(plato $plato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(plato $plato)
    {
        $categorias = Categoriaplato::all('Nombre_categoria','id');
        return view('plato.edit', compact('plato', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, plato $plato)
    {
        $plato->update($request->all());
        return redirect(route("plato.index"))->with("mensaje", "se ha actualizado la categoria");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(plato $plato)
    {
        $plato->delete($plato);
        return redirect(route("plato.index"))->with("mensaje", "Se ha eliminado el plato");
    }
}
