<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dev_Avaliacao;

class AvaliacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avaliacaos= dev_Avaliacao::get();
        return \response()->json($avaliacaos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $avaliacao = new dev_Avaliacao;
        $avaliacao->avaliacao = $request->avaliacao;
        $avaliacao->save();
        return \response()->json($avaliacao);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $avaliacao = dev_Avaliacao::where('id_avaliacao', $id)->first();
        return \response()->json($avaliacao);
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
        $avaliacao = de_Avaliacao::find($id);
        $avaliacao->avaliacao = $request->avaliacao;
        $avaliacao->save();
        return \response()->json($avaliacao);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $avaliacao = dev_Avaliacao::find($id);
        $avaliacao->delete();
    }
}
