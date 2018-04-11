<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CompleteApplicationRequest;
use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\DB;
use App\Models\School;
use App\Models\Vacancy;

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
            'higher_inst'        => $request->higher_inst,
            'course'             => $request->course,
            'subject_taught'     => $request->subject_taught,
            'next_of_kin_name'   => $request->next_of_kin_name,
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
            'user' => auth()->user(),
        ]);
    }

    public function showSchools()
    {
        return view('dashboard.user.application.vacancy.allvacancy', [
            'schools' => School::paginate(15),
        ]);
    }

    public function showVacancies($id)
    {
        return view('dashboard.user.application.vacancy.schoolvacancy', [
            'vacancies' => Vacancy::where('school_id', $id)->get(),


        ]);

    }



    public function vacancybycounty(Request $request)
    {
//    dd($request->counties);
        return view('dashboard.user.application.vacancy.vacancybycounty', [
            'counties' => School::where('location', $request->counties)->get(),

        ]);

    }

    public function vacancybysubjects()
    {
//       dd(auth()->user()->application->subject_taught);
        return view('dashboard.user.application.vacancy.subjectsvacancy', [
            'subjects' => Vacancy::where('subjects', auth()->user()->application->subject_taught)->get(),
//           'schools'=>School::where('school_id',vacancy.school_id)->get(),

        ]);

    }


}
