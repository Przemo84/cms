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

    public function readAction($id)
    {
        $article = Article::find($id);

        return view('read', ['article' => $article]);
    }

    public function editAction($id)
    {
        $article = Article::find($id);

        return view('edit', ['article' => $article]);
    }


}
