<?php
//=========================================================================

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente', function () {
    return view('cliente');
});

Route::get('/produto', function () {
    return view('produto');
});

Route::get('/categoria', function () {
    return view('categoria');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/pedido', function () {
    return view('pedido');
});

Route::get('/logout', function () {
    return view('logout');
});

//=========================================================================

Route::get('/categoria','App\Http\Controllers\CategoriaController@exibirCategoria');

Route::get('/produto','App\Http\Controllers\ProdutoController@exibirProduto');

Route::get('/','App\Http\Controllers\WelcomeController@exibirWelcome');

//=========================================================================

Route::post('/categoria/inserir','App\Http\Controllers\CategoriaController@store');

Route::post('/produto/inserir','App\Http\Controllers\ProdutoController@store');

Route::post('/contato/inserir','App\Http\Controllers\ContatoController@store');

Route::post('/cliente/inserir','App\Http\Controllers\ClienteController@store');

Route::post('/cliente/login','App\Http\Controllers\ClienteController@login');

//=========================================================================

Route::get('/produto/{id}','App\Http\Controllers\ProdutoController@destroy');

Route::get('/categoria/{id}','App\Http\Controllers\CategoriaController@destroy');

//=========================================================================

Route::get('/categoria-editar/{id}/editar','App\Http\Controllers\CategoriaController@edit');

Route::get('/produto-editar/{id}/editar','App\Http\Controllers\ProdutoController@edit');

//=========================================================================

Route::post('/categoria-alterar/{id}','App\Http\Controllers\CategoriaController@update');

Route::post('/produto-alterar/{id}','App\Http\Controllers\ProdutoController@update');

//=========================================================================

Route::get('/pesquisar','App\Http\Controllers\WelcomeController@exibirWelcome');