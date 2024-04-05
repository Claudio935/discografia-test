<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Faixa;


class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Album::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Album::create($request->all())){
            return response()->json([
                'message'=> 'Album cadastrado com sucesso'
            ],201);
        }
        return response()->json([
            'message'=> 'Album cadastrado com sucesso'
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $album
     * @return \Illuminate\Http\Response
     */
    public function show($album)
    {
        $album = Album::with('faixas')->find($album);
        if($album){

            return $album;
        }
        return response()->json([
            'message'=>"Erro ao pesquisar o album"
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $album)
    {

        if($album){
            $album->update($request->all());
            return $album;
        }
        return response()->json([
            'message'=>"Erro ao atualizar o album"
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy($albumId)
    {
        $album = Album::find($albumId);

    if (!$album) {
        return response()->json(['message' => 'Album não encontrado'], 404);
    }

    $album->faixas()->delete();

   
    if ($album->delete()) {
        return response()->json(['message' => 'Album deletado com sucesso'], 200);
    }

    return response()->json(['message' => 'Erro ao deletar o album'], 500);
    }
}
