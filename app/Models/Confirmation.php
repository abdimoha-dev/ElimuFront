<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Confirmation extends Model
{
    protected $table = 'confirmations';
    protected $fillable = [
        'user_id',
        'email_token',
        'phone_token',
        'sms_code',

    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

}
