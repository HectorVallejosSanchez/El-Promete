<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\candidato;
use App\propuesta;
use DB;
use View;

class detalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
       $datosC1=DB::table('propuestas')
        ->join('candidatos','propuestas.candidato_id','=','candidatos.id')
        ->select('propuestas.id as id_propuesta','candidatos.nombre as candidato_nombre','propuestas.url_propuesta','propuestas.votos_favor','candidatos.url_foto as foto_candidato','candidatos.updated_at as time','propuestas.nombre as propuesta_nombre','propuestas.descripcion')
        ->get();
        return View::make('listado',compact('datosC1'));   

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datosC=DB::table('propuestas')
        ->join('candidatos','propuestas.candidato_id','=','candidatos.id')
        ->select('candidatos.nombre as candidato_nombre','propuestas.nombre as propuesta_nombre','propuestas.id as id_propuesta')
        ->take(5)->get();

        $datosC1=DB::table('propuestas')
        ->join('candidatos','propuestas.candidato_id','=','candidatos.id')
        ->select('candidatos.nombre as candidato_nombre','propuestas.url_propuesta','candidatos.url_foto','candidatos.updated_at as time','propuestas.nombre as propuesta_nombre','propuestas.descripcion')
        ->where('propuestas.id', $id)->get();

        $datos = candidato::orderBy('indicador','DESC')->take(5)->get();;
        return View::make('detalle',compact('datos','datosC1','datosC'));  

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
