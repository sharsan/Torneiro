<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atleta extends Model
{
      protected $fillable =['nome','apelido','cinturao','clube','categoria','escalao','peso','sexo','idade','telefone','email','treinador','descricao'];
}
