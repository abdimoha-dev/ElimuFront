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
        'ht_id',
        'no_of_classes',
        'no_of_teachers',
        'no_of_students'
    ];



//    public function headteacher()
//    {
//        return $this->belongsTo('App\Models\Headteacher', 'ht_id', 'id');
//    }

    public function vacancy()
    {
        return $this->hasMany('App\Models\Vacancy','school_id', 'id');
    }


}
