<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  protected $fillable = ['titulo', 'descricao', 'conteudo', 'data'];

  protected $dates = ['deleted_at'];
}
