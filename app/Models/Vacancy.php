<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $table = 'vacancy';
    protected $guarded;
    protected $fillable = [
        'vacancy_id',
        'reference_no',
        'duration',
        'subjects',
        'class',

    ];


    public function school()
    {
        return $this->belongsTo('App\Models\School', 'school_id', 'id');
    }
}
