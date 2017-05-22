<?php

namespace App;


class Article extends Model
{
    public function comments() {
        return $this->hasMany('App\Commentary');
    }
}
