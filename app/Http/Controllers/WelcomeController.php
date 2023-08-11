<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WelcomeModel;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
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
    public function exibirWelcome(Request $request)
    {
        $categoria = '';
        $preco = '';
        $nome = '';
        $filtro1 = '';
        $filtro2 = '';
        $filtro3 = '';
        $consulta = '';

        $tudo = 'SELECT * FROM tbProduto INNER JOIN tbCategoria ON tbProduto.idCategoria = tbCategoria.idCategoria';
        $ordem = 'ORDER BY produto';

        if(($request->filtroCategoria) == true){
            $filtroCategoria = $request->filtroCategoria;
            $categoria = $filtroCategoria;
            $filtro1 = true;
        }
        if(($request->filtroPreco) == true){
            $filtroPreco = $request->filtroPreco;
            $filtroPreco = floatval($filtroPreco);
            $preco = $filtroPreco;
            $filtro2 = true;
        }
        if(($request->txPesquisa) == true){
            $pesquisa = $request->txPesquisa;
            $nome = $pesquisa;
            $filtro3 = true;
        }
        
        if($filtro1 == true){
            $consulta = ' WHERE tbProduto.idCategoria = '.$categoria;
        }
        if($filtro2 == true){
            $consulta = ' WHERE valor <= '.$preco;
        }
        if($filtro3 == true){
            $consulta = ' WHERE produto LIKE "%'.$pesquisa.'%"';
        }
        if($filtro1 == true and $filtro2 == true){
            $consulta = ' WHERE tbProduto.idCategoria = '.$categoria.' AND valor <= '.$preco;
        }
        if($filtro2 == true and $filtro3 == true){
            $consulta = ' WHERE valor <= '.$preco.' AND produto LIKE "%'.$pesquisa.'%"';
        }
        if($filtro1 == true and $filtro3 == true){
            $consulta = ' WHERE tbProduto.idCategoria = '.$categoria.' AND produto LIKE "%'.$pesquisa.'%"';
        }
        if($filtro1 == true and $filtro2 == true and $filtro3 == true){
            $consulta = ' WHERE tbProduto.idCategoria = '.$categoria.' AND valor <= '.$preco.' AND produto LIKE "%'.$pesquisa.'%"';
        }
        
        

        //$produto = WelcomeModel::all();

        $produto = DB::select('SELECT * FROM tbProduto INNER JOIN tbCategoria ON tbProduto.idCategoria = tbCategoria.idCategoria'.$consulta.' '.$ordem);
        
        return view('welcome',compact('produto'));
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
        /*$produto = WelcomeModel::join('tbProduto', 'tbProduto.idCategoria', '=', 'tbCategoria.idCategoria')->join('tbCategoria', 'tbProduto.idCategoria', '=', 'tbCategoria.idCategoria');

        if($request->produto){
            $produto->where('produto', 'like', "%$request->produto%");
        }
        $produto = $produto->get();*/
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
