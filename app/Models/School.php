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
        'no_of_classes',
        'no_of_teachers',
        'no_of_students'
    ];
}
