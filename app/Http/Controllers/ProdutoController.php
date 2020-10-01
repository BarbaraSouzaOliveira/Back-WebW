<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dev_Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = dev_Produto::get();
        return \response()->json($produtos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new dev_Produto;
        $pathfoto=null;
        if ($request->hasfile('img_produto')) {
        $pathfoto = $request->img_produto->store('public/uploads/foto');
        }
        $produto->id_gp = $request->id_gp;
        $produto->titulo = $request->titulo;
        $produto->descricao = $request->descricao;
        $produto->valor = $request->valor;
        $produto->img_produto = $pathfoto;
        $produto->promocao = $request->promocao;
        $produto->porcentagem_promocao = $request->porcentagem_promocao;
        $produto->save();
        return \response()->json($produto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = dev_Produto::where('id_produto', $id)->first();
        return \response()->json($produto);
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
        $produto = dev_Produto::find($id);
        $pathfoto=null;
        if ($request->hasfile('img_produto')) {
        $pathfoto = $request->img_produto->store('public/uploads/foto');
        }
        $produto->id_gp = $request->id_gp;
        $produto->titulo = $request->titulo;
        $produto->descricao = $request->descricao;
        $produto->valor = $request->valor;
        $produto->img_produto = $pathfoto;
        $produto->promocao = $request->promocao;
        $produto->porcentagem_promocao = $request->porcentagem_promocao;
        $produto->save();
        return \response()->json($produto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = dev_Produto::find($id);
        $produto->delete();
    }
}
