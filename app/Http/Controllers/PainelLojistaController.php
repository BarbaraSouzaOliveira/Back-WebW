<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dev_PainelLojista;

class PainelLojistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $painelLojistas = dev_PainelLojista::get();
        return \response()->json($painelLojistas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $painelLojista = new dev_PainelLojista;
        $pathperfil=null;
        $pathbanner=null;
        if ($request->hasfile('img_perfil')) {
        $pathperfil = $request->img_perfil->store('public/uploads/perfil');
        }
        if ($request->hasfile('img_banner')) {
            $pathbanner = $request->img_banner->store('public/uploads/banner');
        }
        $painelLojista->cor_primaria = $request->cor_primaria;
        $painelLojista->cor_secundaria = $request->cor_secundaria;
        $painelLojista->img_perfil = $pathperfil;
        $painelLojista->img_banner = $pathbanner;
        $painelLojista->descricao_loja = $request->descricao_loja;
        $painelLojista->titulo_loja = $request->titulo_loja;
        $painelLojista->tempo_espera = $request->tempo_espera;
        $painelLojista->retirada_loja = $request->retirada_loja;
        $painelLojista->pagamento_entrega = $request->pagamento_entrega;
        $painelLojista->pagamento_paypal = $request->pagamento_paypal;
        $painelLojista->credito = $request->credito;
        $painelLojista->debito = $request->debito;
        $painelLojista->dinheiro = $request->dinheiro;
        $painelLojista->obs_pagamento = $request->obs_pagamento;
        $painelLojista->ponto_gerado = $request->ponto_gerado;
        $painelLojista->comprado_real = $request->comprado_real;
        $painelLojista->ponto_real = $request->ponto_real;
        $painelLojista->cupom_real = $request->cupom_real;
        $painelLojista->save();
        
        return \response()->json($painelLojista);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $painelLojista = dev_PainelLojista::where('id_painel', $id)->first();
        return \response()->json($painelLojista);
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
        $painelLojista = dev_PainelLojista::find($id);
        $pathperfil=null;   
        $pathbanner=null;
        if ($request->hasfile('img_perfil')) {
        $pathperfil = $request->img_perfil->store('public/uploads/perfil');
        }
        if ($request->hasfile('img_banner')) {
            $pathbanner = $request->img_banner->store('public/uploads/banner');
        }
        $painelLojista->cor_primaria = $request->cor_primaria;
        $painelLojista->cor_secundaria = $request->cor_secundaria;
        $painelLojista->img_perfil = $pathperfil;
        $painelLojista->img_banner = $pathbanner;
        $painelLojista->descricao_loja = $request->descricao_loja;
        $painelLojista->titulo_loja = $request->titulo_loja;
        $painelLojista->tempo_espera = $request->tempo_espera;        
        $painelLojista->retirada_loja = $request->retirada_loja;
        $painelLojista->pagamento_entrega = $request->pagamento_entrega;
        $painelLojista->pagamento_paypal = $request->pagamento_paypal;
        $painelLojista->credito = $request->credito;
        $painelLojista->debito = $request->debito;
        $painelLojista->dinheiro = $request->dinheiro;
        $painelLojista->obs_pagamento = $request->obs_pagamento;
        $painelLojista->ponto_gerado = $request->ponto_gerado;
        $painelLojista->comprado_real = $request->comprado_real;
        $painelLojista->ponto_real = $request->ponto_real;
        $painelLojista->cupom_real = $request->cupom_real;
        $painelLojista->save();
        return \response()->json($painelLojista);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $painelLojista = dev_PainelLojista::find($id);
        $painelLojista->delete();
    }
}
