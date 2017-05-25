<?php

namespace App\Repositories;

use App\Commentary;


class CommentaryRepository
{
    protected $model;

    public function __construct(Commentary $model)
    {
        $this->model = $model;
    }

    public function create($id, $username, $comment) {

        return $this->model->create([
            'article_id' => $id,
            'username' => $username,
            'comment' => $comment
        ]);

    }


}