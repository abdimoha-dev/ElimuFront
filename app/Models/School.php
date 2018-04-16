<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table='schools';
    protected $fillable=[
        'name',
        'location',
        'address',
        'user_id',
        'email',
        'no_of_classes',
        'no_of_teachers',
        'no_of_students'
    ];


    public function vacancy()
    {
        return $this->hasMany('App\Models\Vacancy','school_id', 'id');
    }

    public function user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }

}
