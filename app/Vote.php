<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = ['title', 'content'];

    /**
     * 한명의 user 에 속해있다.
     */
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag', 'vote_tag');
    }
}
