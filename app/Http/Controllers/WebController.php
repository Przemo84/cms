<?php

namespace App\Http\Controllers;

use App\Article;
use App\Commentary;
use App\Http\Requests\ArticleChangeRequest;
use App\Http\Requests\CommentChangeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{

    public function listAction(Request $request)
    {
        $articles = DB::table('articles')->paginate($request->query->getInt('limit', 10));

        $count = Article::all()->count();

        return view('list', [
            'articles' => $articles,
            'count' => $count
        ]);
    }


    public function showAction($id)
    {
        $article = Article::find($id);
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


    public function updateAction(Request $request, $id)
    {
        DB::table('articles')
            ->where('id', '=', $id)
            ->update([
                'title' => $request->get('title'),
                'content' => $request->get('content')
            ]);

        return redirect('articles');
    }


    public function deleteAction($id)
    {
        Article::destroy($id);

        return redirect('articles');
    }

    public function createAction()
    {
        return view('create');
    }


    public function storeArticleAction(ArticleChangeRequest $request)
    {
        Article::create($request->all());

        return redirect('articles');
    }


    public function storeCommentaryAction(CommentChangeRequest $request, $id)
    {
        Commentary::create([
            'article_id' => $id,
            'username' => $request->username,
            'comment' => $request->comment
        ]);

        return redirect('articles/' . $id);
    }


    public function testAction()
    {
        $name = 'Przemo';
        $age = 33;
        $content = Article::pluck('content')->first();

        return view('testview', compact('name', 'age', 'content'));
    }

}
