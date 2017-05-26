<?php

namespace App\Api\Http\Transformers;

use App\Article;
use League\Fractal\TransformerAbstract;

class ArticleTransformer extends TransformerAbstract
{

    /**
     * @param Article $article
     */
    public function transform(Article $article)
    {
        return [
          'title'=> $article->title,
          'content'=> $article->content
        ];
    }

}