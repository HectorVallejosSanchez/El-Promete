<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidato extends Model
{
    protected $table = 'candidatos';
    protected $fillable = ['nombre','edad','numero_gobiernos','descripcion','fecha_nacimiento','nombre_partido','indicador','ocupacion','url_foto'];
}
