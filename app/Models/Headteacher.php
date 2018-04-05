<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Headteacher extends Model
{

    protected $table = 'headteachers';
    protected $fillable = [
        'Tsc_no',
        'id_no',
        'alt_phone',
        'email',

    ];
}
