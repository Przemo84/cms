<?php

namespace App\Api\Http\Controllers;

use App\Api\Http\Transformers\ArticleTransformer;
use App\Http\Requests\ArticleChangeRequest;
use App\Repositories\ArticleRepository;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class ArticlesController extends BaseController
{

    /**
     * @param ArticleRepository $articleRepository
     * @return mixed
     */
    public function indexAction(ArticleRepository $articleRepository)
    {
        $articles = $articleRepository->list();

        dump($articles);die;


        return $this->response()->paginator($articles, new ArticleTransformer());
    }


    /**
     * @param ArticleRepository $articleRepository
     * @param $id
     * @return \Dingo\Api\Http\Response
     */
    public function showAction(ArticleRepository $articleRepository, $id)
    {
        $article = $articleRepository->show($id);

        if (!$article) {
            throw new NotFoundHttpException("Requested resource doesn't exist");
        }
        return $this->response->item($article, new ArticleTransformer());
    }


    /**
     * @param ArticleRepository $articleRepository
     * @param $id
     * @return \Dingo\Api\Http\Response
     */
    public function deleteAction(ArticleRepository $articleRepository, $id)
    {
        if (!$articleRepository->show($id)) {
            throw new NotFoundHttpException("Requested resource doesn't exist");
        }
        $articleRepository->delete($id);

        return $this->response->noContent();
    }


    /**
     * @param ArticleRepository $articleRepository
     * @param ArticleChangeRequest $request
     * @param $id
     * @return \Dingo\Api\Http\Response
     */
    public function updateAction(ArticleRepository $articleRepository, ArticleChangeRequest $request, $id)
    {
        dump($request);die;

        $articleRepository->update($id, $request->get('title'), $request->get('content'));

        return $this->response->noContent()->statusCode(200);
    }


    /**
     * @param ArticleRepository $articleRepository
     * @param ArticleChangeRequest $request
     * @return \Dingo\Api\Http\Response
     */
    public function createAction(ArticleRepository $articleRepository, ArticleChangeRequest $request)
    {
        $articleRepository->create($request->all());

        return $this->response->noContent()->statusCode(204);
    }


}