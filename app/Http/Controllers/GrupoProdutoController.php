<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dev_GrupoProduto;

class GrupoProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupoProdutos = dev_GrupoProduto::get();
        return \response()->json($grupoProdutos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grupoProduto = new dev_GrupoProduto;
        $grupoProduto->descricao = $request->descricao;
        $grupoProduto->save();
        return \response()->json($grupoProduto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grupoProduto = dev_GrupoProduto::where('id_gp', $id)->first();
        return \response()->json($grupoProduto);
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
        $grupoProduto = dev_GrupoProduto::find($id);
        $grupoProduto->descricao = $request->descricao;
        $grupoProduto->save();
        return \response()->json($grupoProduto);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grupoProduto = dev_GrupoProduto::find($id);
        $grupoProduto->delete();
    }
}
