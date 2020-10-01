<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dev_EnderecoUsuario;

class EnderecoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enderecoUsuarios=dev_EnderecoUsuario::get();
        return \response()->json($enderecoUsuarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enderecoUsuario = new dev_EnderecoUsuario;
        $enderecoLoja->endereco = $request->endereco;
        $enderecoLoja->latitude = $request->latitude;
        $enderecoLoja->longitude = $request->longitude;
        $enderecoLoja->numero = $request->numero;
        $enderecoLoja->complemento = $request->complemento;
        $enderecoUsuario->save();
        return \response()->json($enderecoUsuario);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enderecoUsuario = dev_EnderecoUsuario::where('id_endereco', $id)->first();
        return \response()->json($enderecoUsuario);
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
        $enderecoUsuario = dev_EnderecoUsuario::find($id);
        $enderecoLoja->endereco = $request->endereco;
        $enderecoLoja->latitude = $request->latitude;
        $enderecoLoja->longitude = $request->longitude;
        $enderecoLoja->numero = $request->numero;
        $enderecoLoja->complemento = $request->complemento;
        $enderecoUsuario->save();
        return \response()->json($enderecoUsuario);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enderecoUsuario = dev_EnderecoUsuario::find($id);
        $enderecoUsuario->delete();
    }
}
