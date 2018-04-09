<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicantsDetailsController extends Controller
{
    public function showVacancies(){
        $user=User::selectRaw("first_name, second_name, phone, email, no_of_students")->get();
        $data=[
            'user' =>$user

        ];

        return view('dashboard.user.application.vacancy.allvacancy',$data);
    }
}
