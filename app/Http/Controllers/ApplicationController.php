<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{


    public function insertform()
    {
        return view('application');
    }

    public function saveApplication(Request $request)
    {

        $user = Auth::user();


        $id = Auth::id();


        Application::create([


            'user_id'           =>$user->id,
            'id_number'         => $request->id_number,
            'place_of_birth'    => $request->place_of_birth,
            'year_of_birth'     => $request->year_of_birth,
            'place_of_residence'=>$request->place_of_residence,
            'education_level'   => $request->education_level,
            'year_finished_sec' => $request->year_finished_sec,
            'sec_school'        => $request->sec_school,
            'index_no'          => $request->index_no,
            'course'            => $request->course,
            'next_of_kin_phone' => $request->next_of_kin_phone,
            'next_of_kin_email' => $request->next_of_kin_email,
        ]);


    }
}
