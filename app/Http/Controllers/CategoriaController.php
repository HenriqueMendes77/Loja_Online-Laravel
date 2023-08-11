<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriaModel;


class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function exibirCategoria()
    {
        $categoria = CategoriaModel::all();
        return view('categoria',compact('categoria'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = new CategoriaModel();
        $categoria->categoria = $request->nomeCategoria;
        $categoria->save();
        return redirect("/categoria");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = CategoriaModel::find($id);
        $title = "Editar Categoria - {$categorias->categoria}";
        return view('categoriaEditar',compact('title','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categoria = CategoriaModel::find($id);
        $categoria->update(['categoria'=>$request->nomeCategoria]);
        return redirect()->action('App\Http\Controllers\CategoriaController@exibirCategoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = CategoriaModel::where('idCategoria',$id)->delete();
        return redirect()->action('App\Http\Controllers\CategoriaController@exibirCategoria');
    }
}
