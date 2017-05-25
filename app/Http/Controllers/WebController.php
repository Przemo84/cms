<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleChangeRequest;
use App\Http\Requests\CommentChangeRequest;
use App\Repositories\ArticleRepository;
use App\Repositories\CommentaryRepository;
use Illuminate\Http\Request;

class WebController extends Controller
{

    public function listAction(ArticleRepository $articleRepository, Request $request)
    {

        $articles = $articleRepository->list(
            $request->query->getInt('limit', 10),
            $request->query->get('filter')
        );

        return view('list', [
            'articles' => $articles,
            'count' => Article::all()->count(),
            'limit' => $request->query->getInt('limit', 10)
        ]);
    }


    public function showAction(ArticleRepository $articleRepository, $id)
    {
        $article = $articleRepository->show($id);

        return view('read', [
            'article' => $article,
            'comments' => $article->comments
        ]);
    }

    public function editAction(ArticleRepository $articleRepository, $id)
    {
        $article = $articleRepository->edit($id);

        return view('edit', ['article' => $article]);
    }


    public function updateAction(ArticleRepository $articleRepository, Request $request, $id)
    {
        $articleRepository->update(
            $id,
            $request->get('title'),
            $request->get('content'));

        return redirect('articles');
    }


    public function deleteAction(ArticleRepository $articleRepository, $id)
    {
        $articleRepository->delete($id);

        return redirect('articles');
    }


    public function createAction()
    {
        return view('create');
    }


    public function storeArticleAction(ArticleRepository $articleRepository, ArticleChangeRequest $request)
    {
        $articleRepository->create($request->all());

        return redirect('articles');
    }


    public function storeCommentaryAction(CommentaryRepository $commentaryRepository, CommentChangeRequest $request, $id)
    {
        $commentaryRepository->create($id,
            $request->username,
            $request->comment
        );

        return redirect('articles/' . $id);
    }


    public function testAction(ArticleRepository $articleRepository, Request $request)
    {

        $articleRepository = $articleRepository->list($request->query->getInt('limit', 3));


//        $name = 'Przemo';
//        $age = 33;
//        $content = Article::pluck('content')->first();
//        return view('testview', compact('name', 'age', 'content'));
        return view('testview', compact('articleRepository'));
    }

}
