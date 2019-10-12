<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['name','ator','capa','descricao'];
    protected $table = 'livros';
}
