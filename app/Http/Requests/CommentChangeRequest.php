<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentChangeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
      return [
        'username' => 'required',
        'content' => 'required'
      ];

    }

}