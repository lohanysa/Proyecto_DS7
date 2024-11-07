<?php

namespace App\Http\Controllers;

use App\Models\Categoriaplato;
use App\Models\usuario;
use Illuminate\Http\Request;

class CategoriaplatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoriaplato::all();
        return view('categoria_plato.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuarios = usuario::all();
        return view('categoria_plato.create', compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        Categoriaplato::create($request->all());
        $categorias = Categoriaplato::all();
        return view('categoria_plato.index', compact('categorias'))->with("mensaje", "se ha creado una nueva categoria");
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoriaplato $categoriaplato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoriaplato $administrador_categorium)
    {
        
        return view('categoria_plato.edit', compact('administrador_categorium'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoriaplato $administrador_categorium)
    {
        $administrador_categorium->update($request->all());
        return redirect(route("administrador_categoria.index"))->with("mensaje", "se ha actualizado la categoria");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoriaplato $administrador_categorium)
    {
        $administrador_categorium->delete($administrador_categorium);
        return redirect(route("administrador_categoria.index"))->with("mensaje", "Se ha eliminado la categoria");
    }
}
