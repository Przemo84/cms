<?php

namespace App\Api\Http\Controllers;

use App\Api\Http\Transformers\ArticleTransformer;
use App\Http\Requests\CommentChangeRequest;
use App\Repositories\CommentaryRepository;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class ArticlesController extends BaseController
{

    public function indexAction(CommentaryRepository $commentaryRepository)
    {
        return  $commentaryRepository->list();
    }


    public function showAction(CommentaryRepository $commentaryRepository, $id)
    {
        $article = $commentaryRepository->show($id);

        if(!$article) {
            throw new NotFoundHttpException("Requested resource doesn't exist");
        }
        return $this->response->item($article, new ArticleTransformer())->statusCode(200) ;
    }


    public function deleteAction(CommentaryRepository $commentaryRepository, $id)
    {
        $commentaryRepository->delete($id);

        return $this->response->noContent();
    }


}