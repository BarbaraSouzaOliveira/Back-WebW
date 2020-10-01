<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dev_Pedido;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = dev_Pedido::get();
        return \response()->json($pedidos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedido = new dev_Pedido;
        $pedido->descricao = $request->descricao;
        $pedido->nome = $request->nome;
        $pedido->telefone = $request->telefone;
        $pedido->endereco = $request->endereco;
        $pedido->numero = $request->numero;
        $pedido->complemento = $request->complemento;
        $pedido->pagamento = $request->pagamento;
        $pedido->obs_para_pagamento = $request->obs_para_pagamento;
        $pedido->compra_total = $request->compra_total;
        $pedido->frete = $request->frete;
        $pedido->array = $request->array;
        $pedido->save();
        return \response()->json($pedido);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedido = dev_Pedido::where('id_pedido', $id)->first();
        return \response()->json($pedido);
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
        $pedido = dev_Pedido::find($id);
        $pedido->descricao = $request->descricao;
        $pedido->nome = $request->nome;
        $pedido->telefone = $request->telefone;
        $pedido->endereco = $request->endereco;
        $pedido->numero = $request->numero;
        $pedido->complemento = $request->complemento;
        $pedido->pagamento = $request->pagamento;
        $pedido->obs_para_pagamento = $request->obs_para_pagamento;
        $pedido->compra_total = $request->compra_total;
        $pedido->frete = $request->frete;
        $pedido->array = $request->array;
        $pedido->save();
        return \response()->json($pedido);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = dev_Pedido::find($id);
        $pedido->delete();
    }
}
