<?php
namespace App\Http\Traits;

trait Confirms
{
    public function emailPhone()
    {
        if (!auth()->user()->confirmation->email_token && !auth()->user()->confirmation->phone_token ){
            return view('welcome');
        }

    }

}