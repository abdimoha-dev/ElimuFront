<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $table = 'uploads';
    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}