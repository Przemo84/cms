<?php

namespace App;


class Commentary extends Model
{
    public function article() {
        return $this->belongsTo('App\Article');
    }

}
