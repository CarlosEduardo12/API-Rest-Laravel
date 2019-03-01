<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

class ArticleController extends Controller
{
  /**
   * Estanciar a varivel dentro do meu controle.
   *
   * @var Article
   */
  private $article;

  public function __construct(Article $article){
    $this->article = $article;

  }

    public function index(){
      // Retorna todos os dados da tabela artigo com no max 10 por pagina
      return response()->json($this->article->paginate(10));

    }

    public function show($id){
      //encontrar o artigo pelo id
      $article = $this->article->find($id);
      //verificar se o artigo existe
      $msg=['msg' => ' Artigo nao Encontrado -  404'];
      if(! $article) return response()->json($msg, 404);

      return response()->json($article);
    }

}
