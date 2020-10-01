<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/autenticar', 'LoginController@login');

Route::middleware(['rotas-altenticadas'])->group(function () {

    
    Route::get('/usuario/meus-dados', 'UsuarioController@meusDados');
    Route::get('/usuario/{id}', 'UsuarioController@show');
    Route::post('/usuario/{id}', 'UsuarioController@update');

    Route::post('/enderecoLoja', 'EnderecoLojaController@store');
    Route::put('/enderecoLoja/{id}', 'EnderecoLojaController@update');
    Route::delete('/enderecoLoja/{id}', 'EnderecoLojaController@destroy');

    Route::get('/enderecoUsuario', 'EnderecoUsuarioController@index');
    Route::get('/enderecoUsuario/{id}', 'EnderecoUsuarioController@show');
    Route::post('/enderecoUsuario', 'EnderecoUsuarioController@store');
    Route::put('/enderecoUsuario/{id}', 'EnderecoUsuarioController@update');
    Route::delete('enderecoUsuario/{id}', 'EnderecoUsuarioController@destroy');

    Route::get('/frete', 'FreteController@index');
    Route::get('/frete/{id}', 'FreteController@show');
    Route::post('/frete', 'FreteController@store');
    Route::put('/frete/{id}', 'FreteController@update');
    Route::delete('/frete/{id}', 'FreteController@destroy');

    Route::post('/grupoProduto', 'GrupoProdutoController@store');
    Route::put('/grupoProduto/{id}', 'GrupoProdutoController@update');
    Route::delete('/grupoProduto/{id}', 'GrupoProdutoController@destroy');

    Route::get('/historicoPedido', 'HistoricoPedidoController@index');
    Route::get('/historicoPedido/{id}', 'HistoricoPedidoController@show');
    Route::post('/historicoPedido', 'HistoricoPedidoController@store');
    Route::put('/historicoPedido/{id}', 'HistoricoPedidoController@update');
    Route::delete('/historicoPedido/{id}', 'HistoricoPedidoController@destroy');

    Route::post('/horarioFuncionamento', 'HorarioFuncionamentoController@store');
    Route::put('/horarioFuncionamento/{id}', 'HorarioFuncionamentoController@update');
    Route::delete('/horarioFuncionamento/{id}', 'HorarioFuncionamentoController@destroy');

    Route::post('/painel', 'PainelLojistaController@store');
    Route::post('/painel/{id}', 'PainelLojistaController@update');
    Route::delete('/painel/{id}', 'PainelLojistaController@destroy');

    Route::get('/pedido', 'PedidoController@index');
    Route::get('/pedido/{id}', 'PedidoController@show');
    Route::post('/pedido', 'PedidoController@store');
    Route::put('/pedido/{id}', 'PedidoController@update');
    Route::delete('/pedido/{id}', 'PedidoController@destroy');


    Route::post('/produto', 'ProdutoController@store');
    Route::post('/produto/{id}', 'ProdutoController@update');
    Route::delete('/produto/{id}', 'ProdutoController@destroy');

});


Route::post('/usuario', 'UsuarioController@store');

Route::get('/painel', 'PainelLojistaController@index');
Route::get('/painel/{id}', 'PainelLojistaController@show');

Route::get('/horarioFuncionamento', 'HorarioFuncionamentoController@index');
Route::get('/horarioFuncionamento/{id}', 'HorarioFuncionamentoController@show');

Route::get('/enderecoLoja', 'EnderecoLojaController@index');
Route::get('/enderecoLoja/{id}', 'EnderecoLojaController@show');

Route::get('/avaliacao', 'AvaliacaoController@index');
Route::get('/avaliacao/{id}', 'AvaliacaoController@show');
Route::post('/avaliacao', 'AvaliacaoController@store');
Route::put('/avaliacao/{id}', 'AvaliacaoController@update');
Route::delete('/avaliacao/{id}', 'AvaliacaoController@destroy');

Route::get('/grupoProduto', 'GrupoProdutoController@index');
Route::get('/grupoProduto/{id}', 'GrupoProdutoController@show');

Route::get('/produto', 'ProdutoController@index');
Route::get('/produto/{id}', 'ProdutoController@show');

Auth::routes();
