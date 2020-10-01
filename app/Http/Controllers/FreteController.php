<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dev_Frete;

class FreteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fretes = dev_Frete::get();
        return \response()->json($fretes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $frete = new dev_Frete;
        $frete->distancia1 = $request->distancia1;
        $frete->distancia2 = $request->distancia2;
        $frete->distancia3 = $request->distancia3;
        $frete->distancia4 = $request->distancia4;
        $frete->valor1 = $request->valor1;
        $frete->valor2 = $request->valor2;
        $frete->valor3 = $request->valor3;
        $frete->valor4 = $request->valor4;
        $frete->save();
        return \response()->json($frete);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $frete = dev_Frete::where('id_frete', $id)->first();
        return \response()->json($frete);
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
        $frete = dev_Frete::find($id);
        $frete->distancia1 = $request->distancia1;
        $frete->distancia2 = $request->distancia2;
        $frete->distancia3 = $request->distancia3;
        $frete->distancia4 = $request->distancia4;
        $frete->valor1 = $request->valor1;
        $frete->valor2 = $request->valor2;
        $frete->valor3 = $request->valor3;
        $frete->valor4 = $request->valor4;
        $frete->save();
        return \response()->json($frete);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $frete = dev_Frete::find($id);
        $frete->delete();
    }
}
