<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Headteacher extends Model
{

    protected $table = 'headteacher';
    protected $fillable = [
        'tsc_no',
        'id_no',
        'user_id',
        'ht_id',
        'alt_phone',
        'email',

    ];

//    public function school()
//    {
//        return $this->hasOne('App\Models\School', 'ht_id', 'id');
//    }



    public function admin()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
