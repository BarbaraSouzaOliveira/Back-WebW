<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dev_EnderecoLoja;

class EnderecoLojaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enderecoLojas=dev_EnderecoLoja::get();
        return \response()->json($enderecoLojas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enderecoLoja = new dev_EnderecoLoja;;
        $enderecoLoja->endereco = $request->endereco;
        $enderecoLoja->latitude = $request->latitude;
        $enderecoLoja->longitude = $request->longitude;
        $enderecoLoja->numero = $request->numero;
        $enderecoLoja->complemento = $request->complemento;
        $enderecoLoja->save();
        return \response()->json($enderecoLoja);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enderecoLoja = dev_EnderecoLoja::where('id_endereco', $id)->first();
        return \response()->json($enderecoLoja);
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
        $enderecoLoja = dev_EnderecoLoja::find($id);
        $enderecoLoja->endereco = $request->endereco;
        $enderecoLoja->latitude = $request->latitude;
        $enderecoLoja->longitude = $request->longitude;
        $enderecoLoja->numero = $request->numero;
        $enderecoLoja->complemento = $request->complemento;
        $enderecoLoja->save();
        return \response()->json($enderecoLoja);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enderecoLoja = dev_EnderecoLoja::find($id);
        $enderecoLoja->delete();
    }
}
