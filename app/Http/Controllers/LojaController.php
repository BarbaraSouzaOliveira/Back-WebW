<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dev_Loja;

class LojaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lojas = dev_Loja::get();
        return \response()->json($lojas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loja = new dev_Loja;
        $loja->email = $request->email;
        $loja->cnpj = $request->cnpj;
        $loja->razao_social = $request->razao_social;
        $loja->nome_fantasia = $request->nome_fantasia;
        $loja->telefone = $request->telefone;
        $loja->telefone_secundario = $request->telefone_secundario;
        $loja->save();
        return \response()->json($loja);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $loja = dev_Loja::where('id_loja', $id)->first();
        return \response()->json($loja);
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
        $loja = dev_Loja::find($id);
        $loja->email = $request->email;
        $loja->cnpj = $request->cnpj;
        $loja->razao_social = $request->razao_social;
        $loja->nome_fantasia = $request->nome_fantasia;
        $loja->telefone = $request->telefone;
        $loja->telefone_secundario = $request->telefone_secundario;
        $loja->save();
        return \response()->json($loja);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loja = dev_Loja::find($id);
        $loja->delete();
    }
}
