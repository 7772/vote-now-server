<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name', 'slug'];

    public function votes() {
        return $this->belongsToMany('App\Vote', 'vote_tag');
    }
}
