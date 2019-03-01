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

  public function __construct(Article $article)
  {
    $this->article = $article;

  }
    public function index(){
      // Retorna todos os dados da tabela artigo com no max 10 por pagina
      return response()->json($this->article->paginate(10));

    }


}
