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
      //verificar se o artigo existe, caso nao exista mostrar msg de erro
      $msg = ['msg' => ' Artigo nao Encontrado -  404'];
      if(! $article) return response()->json($msg, 404);

      return response()->json($article);
    }

    public function store(Request $request){
      //criar um validação caso ocorra alguem erro mostrar a Exception
      try {
        // Salvar todos os dados passados no request e cria um novo artigo
        $articleData = $request->all();
        $this->article->create($articleData);

        $msg = ['msg' => ' Artigo Cadastrado com Sucesso - 201'];
        return response()->json($msg, 201);
        // captura a Exception
      } catch (\Exception $e) {
        if(config('app.debug')) {
          return response()->json($e->getMessage(), 500);
        }

      }
    }

    public function update(Request $request, $id){
      //criar um validação caso ocorra alguem erro mostrar a Exception
      try {
        // Atualizar só os dados passados no request e cria um novo artigo
        $articleData = $request->all();
        $article     = $this->article->find($id);

  			$article->update($articleData);

        $msg = ['msg' => ' Artigo Atualizado com Sucesso - 201'];
        return response()->json($msg, 201);
        // captura a Exception
      } catch (\Exception $e) {
        if(config('app.debug')) {
          return response()->json($e->getMessage(), 500);
        }

      }
    }



}
