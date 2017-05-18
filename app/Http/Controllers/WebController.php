<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;

class WebController extends Controller
{

    public function listAction()
    {
        $articles = Article::all();


        return view('list', ['articles' => $articles]);
    }


    public function showAction(Article $article) // Posyłając App\Article on się domyśla że chcemy wyciągać z tabeli articles
    {                                            // o takim PRIMARY KEY jak posłano w adresie
                                        // $id artykułu jest znane bo w widoku list kliknelismy na konkretny artykul ktory to id jest posylany do href=""

//        $article = Article::find($id);
        $comments = $article->comments;

        return view('read', [
            'article' => $article,
            'comments' => $comments
        ]);
    }

    public function editAction($id)
    {
        $article = Article::find($id);

        return view('edit', ['article' => $article]);
    }

    public function deleteAction($id)
    {
        $article = Article::destroy($id);


        return redirect('article');
    }

    public function createAction()
    {

        return view('create');
    }

    public function storeAction(Request $request)
    {
//       $title = $request->get('title');
//       $content = $request->get('content');
//
//       dump($content);die;

       $article = new Article();

       $article->title = $request->get('title');
       $article->content = $request->get('content');

       $article->save();

        //Odczytaj dane z requesta
        // Zapisz dane do bady
        // przekieruj na stronę główna.


//        return view('create');
    }


    public function testAction()
    {

        $name = 'Przemo';
        $age = 33;
        $content = Article::pluck('content')->first();

        return view('testview', compact('name', 'age', 'content'));
    }

}
