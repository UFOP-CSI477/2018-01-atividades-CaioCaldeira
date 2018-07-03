<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = [ 'ano', 'semestre' , 'aluno_id' , 'nota1' , 'nota2' , 'nota3' , 'aprovado' ];

    public $timestamps = false;
}
