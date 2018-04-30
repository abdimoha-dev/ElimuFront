<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $guarded=[];

    public function articles()
    {
        return $this->belongsTo('App\Models\Article', 'article_id', 'id');
    }
}
