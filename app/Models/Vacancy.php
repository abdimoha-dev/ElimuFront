<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $table = 'vacancy';
    protected $guarded;
    protected $fillable = [
        'reference_no',
        'duration',
        'subjects',
        'school_id',
        'class',

    ];


    public function school()
    {
        return $this->belongsTo('App\Models\School', 'school_id', 'id');
    }
}
