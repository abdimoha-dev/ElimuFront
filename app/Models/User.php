<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'second_name',
        'email',
        'phone',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    /**
     * Defines the relationship between a user and an application
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

    public function school(){
        return $this->hasOne('App\Models\School', 'user_id','id');
    }
    public function application()
    {
        return $this->hasOne('App\Models\Application', 'user_id', 'id');
    }

    public function subjects(){
        return $this->hasOne('App\Models\Subject','user_id','id');

    }
    public function sender(){
        return $this->hasMany('App\Models\Message', 'sender_id', 'id');
    }

    public function recipient(){
        return $this->hasMany('App\Models\Message', 'recipient_id', 'id');
    }
    public function confirmation(){
        return $this->hasOne('App\Models\Confirmation','user_id','id');
    }

}
