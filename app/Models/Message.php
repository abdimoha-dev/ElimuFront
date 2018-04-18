<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';

    protected $fillable = [
        'sender_id',
        'recipient_id',
        'message',

    ];
    public function sendMessage()
    {
        return $this->belongsTo('App\Models\User', 'sender_id', 'id');
    }
    public function receiveMessage()
    {
        return $this->belongsTo('App\Models\User', 'recipient_id', 'id');
    }
}
