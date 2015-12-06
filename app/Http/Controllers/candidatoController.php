<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\candidato;
use App\propuesta;
use DB;
use View;

class candidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        return "algo";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.crearCandidato');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        candidato::create([
            'nombre'=>$request['nombre'],
            'edad'=>$request['edad'],
            'numero_gobiernos'=>$request['numero_gobiernos'],
            'descripcion'=>$request['descripcion'],
            'fecha_nacimiento'=>$request['fecha_nacimiento'],
            'nombre_partido'=>$request['nombre_partido'],
            'indicador'=>$request['indicador'],
            'ocupacion'=>$request['ocupacion'],
            'url_foto'=>$request['url_foto'],
            ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {   
        $datosC1=DB::table('propuestas')
        ->join('candidatos','propuestas.candidato_id','=','candidatos.id')
        ->select('propuestas.id as id_propuesta','candidatos.id',
            'candidatos.indicador','candidatos.nombre as candidato_nombre',
            'propuestas.url_propuesta','propuestas.votos_favor',
            'candidatos.url_foto as foto_candidato','candidatos.updated_at as time',
            'propuestas.nombre as propuesta_nombre','propuestas.descripcion','propuestas.numero_visitas')
        ->where('propuestas.candidato_id',$id)->get();
       /* $datosC1=DB::table('propuestas')
        ->join('candidatos','propuestas.candidato_id','=','candidatos.id')
        ->select('candidatos.nombre as candidato_nombre',
                        'candidatos.numero_gobiernos',
                        'candidatos.descripcion as candidato_descripcion',
                        'candidatos.edad',
                        'candidatos.ocupacion',
                        'candidatos.indicador',
                        'propuestas.url_propuesta',
                        'candidatos.url_foto',
                        'candidatos.updated_at as time',
                        'propuestas.nombre as propuesta_nombre',
                        'propuestas.descripcion',
                        'propuestas.id as id_propuestas')
        ->where('id_propuestas','=',$id)->get();*/
         $dato2=DB::table('candidatos')
        ->where('id',$id)->get();

        return View::make('candidato',compact('dato2','datosC1')); 

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
