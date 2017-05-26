<?php

namespace App\Api\Http\Controllers;

use App\Api\Http\Transformers\ArticleTransformer;
use App\Http\Requests\ArticleChangeRequest;
use App\Repositories\ArticleRepository;


class ArticlesController extends BaseController
{

    /**
     * @param ArticleRepository $articleRepository
     * @return mixed
     */
    public function indexAction(ArticleRepository $articleRepository)
    {
        return  $articleRepository->list();
    }

    /**
     * @param ArticleRepository $articleRepository
     * @param $id
     * @return \Dingo\Api\Http\Response
     */
    public function showAction(ArticleRepository $articleRepository, $id)
    {

        $article = $articleRepository->show($id);
        return $this->response->item($article, new ArticleTransformer())->statusCode(200) ;
    }

    /**
     * @param ArticleRepository $articleRepository
     * @param $id
     * @return \Dingo\Api\Http\Response
     */
    public function deleteAction(ArticleRepository $articleRepository, $id)
    {
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
        $requestBody = json_decode($request->getContent(), true);
        $articleRepository->update($id,$requestBody['title'],$requestBody['content']);

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