<?php

namespace App;

use App\Http\Requests\Request;

class ArticleChangeRequest extends Request
{
    public function rules()
    {
        return [
            'title' => 'required',
            'content' => 'required'
        ];
    }

}