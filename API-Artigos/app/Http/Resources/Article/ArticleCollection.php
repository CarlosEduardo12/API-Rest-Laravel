<?php

namespace App\Http\Resources\Article;

use Illuminate\Http\Resources\Json\JsonResource;


class ArticleCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      return [
        'id'        =>$this->id,
        'titulo'    => $this->titulo,
        'descricao' => $this->descricao,
        'data'      => $this->data,
        'href'      =>[
            'conteudo'=> route('api.articles_show', $this->id)
        ]
      ];
    }
}
