<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'applications';

    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo('App\Models\User','user_id', 'id');
    }


//    public function retrieve(){
////        $this->users();
//        $titles = DB::table('users')->pluck('title');
//
//        foreach ($titles as $title) {
//            echo $title;
//        }
//    }
}
