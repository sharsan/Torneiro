<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clube extends Model
{
protected $fillable=[ 'nome', 'provincia', 'cidade','descricao','created_at','updated_at'];
}
