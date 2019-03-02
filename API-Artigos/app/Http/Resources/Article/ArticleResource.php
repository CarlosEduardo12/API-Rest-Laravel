<?php

namespace App\Http\Resources\Article;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      return [

        'titulo'    => $this->titulo,
        'descricao' => $this->descricao,
        'data'      => $this->data,
        'conteudo'  =>$this->conteudo
      ];
    }
}
