<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdutoModel;

class ProdutoController extends Controller
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
    public function exibirProduto()
    {
        $produto = ProdutoModel::all();
        return view('produto',compact('produto'));
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
        $produto = new ProdutoModel();
        $produto->idCategoria = $request->categoria;
        $produto->produto = $request->produto;
        $produto->valor = $request->valor;
        $produto->quantidade = $request->quantidade;
        $produto->descprod = $request->descproduto;
        //$produto->imagem = $request->file;
        $produto->save();
        return redirect('/produto');
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
        $produtos = ProdutoModel::find($id);
        $title = "Editar Produto - {$produtos->produto}";
        return view('produtoEditar',compact('title','produtos'));
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
        $produto = ProdutoModel::find($id);
        $produto->update(['produto'=>$request->produto]);
        $produto->update(['idCategoria'=>$request->categoria]);
        $produto->update(['valor'=>$request->valor]);
        $produto->update(['quantidade'=>$request->quantidade]);
        $produto->update(['descprod'=>$request->descprod]);
        return redirect()->action('App\Http\Controllers\ProdutoController@exibirProduto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = ProdutoModel::where('idProduto',$id)->delete();
        return redirect()->action('App\Http\Controllers\ProdutoController@exibirProduto');
    }
}
