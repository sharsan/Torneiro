<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Torneiro extends Model
{
    protected $fillable=[ 'nome', 'datai', 'datat', 'participantes', 'rapazes', 'raparigas','desclassificados','descricao','created_at','updated_at'];
}       