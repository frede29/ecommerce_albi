<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//monter qu'un topic appartient à une seul utilisateur

class Topic extends Model
{
protected $guarded=[];

    public function user()
    {

        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this ->morphMany('App\Comment','commentable')->latest();
    }
}
