<?php

namespace App\Repositories;

use App\Article;


class ArticleRepository
{
    protected $model;

    /**
     * ArticleRepository constructor.
     * @param Article $model
     */
    public function __construct(Article $model)
    {
        $this->model = $model;
    }


    /**
     * @param null $limit
     * @param null $filter
     * @return Collection
     */
    public function list($limit = null, $filter = null)
    {
        if ($filter == null) {

            return $this->model->paginate($limit);

        }
        return $this->model
            ->where('title', 'LIKE', "%{$filter}%")
            ->orderBy('title', 'asc')
            ->paginate($limit);
    }


    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->model->find($id);
    }


    /**
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        return $this->model->find($id);
    }


    /**
     * @param $id
     * @param null $title
     * @param null $content
     * @return mixed
     */
    public function update($id, $title = null, $content = null)
    {
        return $this->model
            ->where('id', '=', $id)
            ->update([
                'title' => $title,
                'content' => $content
            ]);
    }


    public function delete($id)
    {
        return $this->model->destroy($id);
    }


    public function create($all)
    {
        return $this->model->create($all);
    }

}