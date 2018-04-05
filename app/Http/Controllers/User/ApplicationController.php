<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CompleteApplicationRequest;
use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\View;

class ApplicationController extends Controller
{
    public function showCompleteApplicationForm()
         {
        return view('dashboard.user.application.complete');
    }

    public function saveAdditinalApplicationDetails(CompleteApplicationRequest $request)
    {

        Application::create([
            'user_id'            => auth()->user()->id,
            'id_number'          => $request->id_number,
            'place_of_birth'     => $request->place_of_birth,
            'year_of_birth'      => $request->year_of_birth,
            'place_of_residence' => $request->place_of_residence,
            'education_level'    => $request->education_level,
            'year_finished_sec'  => $request->year_finished_sec,
            'sec_school'         => $request->sec_school,
            'index_no'           => $request->index_no,
            'course'             => $request->course,
            'next_of_kin_phone'  => $request->next_of_kin_phone,
            'next_of_kin_email'  => $request->next_of_kin_email,
        ]);


//        return redirect('home');
    }

    public function showApplicationDetails()
    {

//        dump($user->toArray());

//        dump($user->first_name);
//
//        dump($user->application->toArray());
//
//        dump($user->application->place_of_residence);

        return view('dashboard.user.application.details', [
            'user' => auth()->user()
        ]);
    }
}
