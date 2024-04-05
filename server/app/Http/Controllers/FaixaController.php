<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faixa;

class FaixaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Faixa::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Faixa::create($request->all())){
            return response()->json([
                'message'=> 'Faixa cadastrado com sucesso'
            ],201);
        }
        return response()->json([
            'message'=> 'Faixa cadastrado com sucesso'
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $faixa
     * @return \Illuminate\Http\Response
     */
    public function show($faixa)
    {
        $faixa = Faixa::find($faixa);
        if($faixa){

            $response=[
                'faixa'=>$faixa,
                'album'=>$faixa->album
            ];

            return $response;
        };
        return response()->json([
            'message'=>"Erro ao pesquisar o faixa"
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $faixa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $faixa)
    {
        $faixa = Faixa::find($faixa);
        if($faixa){
            $faixa->update($request->all());
            return $faixa;
        }
        return response()->json([
            'message'=>"Erro ao atualizar o faixa"
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $faixa
     * @return \Illuminate\Http\Response
     */
    public function destroy($faixa)
    {
        if(Faixa::destroy($faixa)){
            return response()->json([
                'message'=> 'Faixa deletado com sucesso'
            ],201);
        }
        return response()->json([
            'message'=>"Erro ao deletar o faixa"
        ], 404);
    }
}
