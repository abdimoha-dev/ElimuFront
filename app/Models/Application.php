<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'applications';

    protected $guarded = [];

    public function users()
    {
        return $this->hasOne('App\Models\User','id', 'user_id');
    }
}
