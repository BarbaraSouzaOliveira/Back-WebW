<?php

namespace App\Http\Controllers;

use App\Models\dev_Loja;
use Illuminate\Http\Request;
use App\Models\dev_Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = dev_Usuario::get();
        return $usuarios;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new dev_Usuario();
        $usuario->email = $request->input('email');
        $usuario->senha = $request->input('senha');
        $usuario->cpf = $request->input('cpf');
        $usuario->nome = $request->input('nome');
        $usuario->telefone = $request->input('telefone');
        $usuario->telefone_secundario = $request->input('telefone_secundario');        
        $usuario->endereco = $request->input('endereco');
        $usuario->latitude = $request->input('latitude');
        $usuario->longitude = $request->input('longitude');
        $usuario->numero = $request->input('numero');
        $usuario->complemento = $request->input('complemento');
        $usuario->pontos = $request->input('pontos');
        $usuario->save();
        return response()->json($usuario);
    }

    

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = dev_Usuario::find($id);
        return response()->json($usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = dev_Usuario::find($id);
        $usuario->email = $request->input('email');
        $usuario->senha = $request->input('senha');
        $usuario->cpf = $request->input('cpf');
        $usuario->nome = $request->input('nome');
        $usuario->telefone = $request->input('telefone');
        $usuario->telefone_secundario = $request->input('telefone_secundario');        
        $usuario->endereco = $request->input('endereco');
        $usuario->latitude = $request->input('latitude');
        $usuario->longitude = $request->input('longitude');
        $usuario->numero = $request->input('numero');
        $usuario->complemento = $request->input('complemento');
        $usuario->pontos = $request->input('pontos');
        $usuario->save();
        return \response()->json($usuario);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function meusDados(Request $request)
    {

        $bl_cliente = true;
        $usuario = dev_Usuario::where('email', $request->email_usuariosessao)->first();

        if (empty($usuario)) {
            $bl_cliente = false;
            $usuario = dev_Loja::where('email', $request->email_usuariosessao)->first();
        }

        $usuario['bl_cliente'] = $bl_cliente;
        //unset($usuario['senha'], $usuario['email']);

        return response()->json($usuario);

    }

    

}
