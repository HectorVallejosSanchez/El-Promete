<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class propuesta extends Model
{
    protected $table = 'propuestas';
    protected $fillable = ['nombre','plan_gobierno','url_propuesta','descripcion','votos_favor','votos_contra','numero_visitas','candidato_id','categoria_id'];
}
