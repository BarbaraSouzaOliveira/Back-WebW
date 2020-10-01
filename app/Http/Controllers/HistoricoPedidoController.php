<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dev_HistoricoPedido;

class HistoricoPedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historicoPedidos = dev_HistoricoPedido::get();
        return \response()->json($historicoPedidos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $historicoPedido = new dev_HistoricoPedido;
        $historicoPedido->id_usuario = $request->id_usuario;
        $historicoPedido->save();
        return \response()->json($historicoPedido);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historicoPedido = dev_HistoricoPedido::where('id_pedido', $id)->first();
        return \response()->json($historicoPedido);
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
        $historicoPedido = dev_HistoricoPedido::find($id);
        $historicoPedido->id_usuario = $request->id_usuario;
        $historicoPedido->save();
        return \response()->json($historicoPedido);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $historicoPedido = dev_HistoricoPedido::find($id);
        $historicoPedido->delete();
    }
}
