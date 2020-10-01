<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dev_HorarioFuncionamento;

class HorarioFuncionamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarioFuncionamentos = dev_HorarioFuncionamento::get();
        return \response()->json($horarioFuncionamentos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horarioFuncionamento = new dev_HorarioFuncionamento;
        $horarioFuncionamento->seg_horario_inicio = $request->seg_horario_inicio;
        $horarioFuncionamento->seg_horario_fim = $request->seg_horario_fim ;
        $horarioFuncionamento->ter_horario_inicio = $request->ter_horario_inicio ;
        $horarioFuncionamento->ter_horario_fim = $request->ter_horario_fim ;
        $horarioFuncionamento->quar_horario_inicio = $request->quar_horario_inicio;
        $horarioFuncionamento->quar_horario_fim = $request->quar_horario_fim;
        $horarioFuncionamento->quin_horario_inicio = $request->quin_horario_inicio;
        $horarioFuncionamento->quin_horario_fim = $request->quin_horario_fim;
        $horarioFuncionamento->sex_horario_inicio = $request->sex_horario_inicio;
        $horarioFuncionamento->sex_horario_fim = $request->sex_horario_fim;
        $horarioFuncionamento->sab_horario_inicio = $request->sab_horario_inicio;
        $horarioFuncionamento->sab_horario_fim = $request->sab_horario_fim;
        $horarioFuncionamento->dom_horario_inicio = $request->dom_horario_inicio;
        $horarioFuncionamento->dom_horario_fim = $request->dom_horario_fim;
        $horarioFuncionamento->save();
        return \response()->json($horarioFuncionamento);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horarioFuncionamento = dev_HorarioFuncionamento::where('id_horario', $id)->first();
        return \response()->json($horarioFuncionamento);
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
        $horarioFuncionamento = dev_HorarioFuncionamento::find($id);
        $horarioFuncionamento->seg_horario_inicio = $request->seg_horario_inicio;
        $horarioFuncionamento->seg_horario_fim = $request->seg_horario_fim ;
        $horarioFuncionamento->ter_horario_inicio = $request->ter_horario_inicio ;
        $horarioFuncionamento->ter_horario_fim = $request->ter_horario_fim ;
        $horarioFuncionamento->quar_horario_inicio = $request->quar_horario_inicio;
        $horarioFuncionamento->quar_horario_fim = $request->quar_horario_fim;
        $horarioFuncionamento->quin_horario_inicio = $request->quin_horario_inicio;
        $horarioFuncionamento->quin_horario_fim = $request->quin_horario_fim;
        $horarioFuncionamento->sex_horario_inicio = $request->sex_horario_inicio;
        $horarioFuncionamento->sex_horario_fim = $request->sex_horario_fim;
        $horarioFuncionamento->sab_horario_inicio = $request->sab_horario_inicio;
        $horarioFuncionamento->sab_horario_fim = $request->sab_horario_fim;
        $horarioFuncionamento->dom_horario_inicio = $request->dom_horario_inicio;
        $horarioFuncionamento->dom_horario_fim = $request->dom_horario_fim;
        $horarioFuncionamento->save();
        return \response()->json($horarioFuncionamento);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $horarioFuncionamento = dev_HorarioFuncionamento::find($id);
        $horarioFuncionamento->delete();
    }
}
