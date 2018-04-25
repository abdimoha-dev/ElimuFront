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
            'user_id' => auth()->user()->id,
            'id_number' => $request->id_number,
            'place_of_birth' => $request->place_of_birth,
            'year_of_birth' => $request->year_of_birth,
            'place_of_residence' => $request->place_of_residence,
            'education_level' => $request->education_level,
            'year_finished_sec' => $request->year_finished_sec,
            'sec_school' => $request->sec_school,
            'index_no' => $request->index_no,
            'higher_inst' => $request->higher_inst,
            'course' => $request->course,
            'subject_one' => $request->subject_one,
            'subject_two' => $request->subject_two,
            'first_reference' => $request->first_reference,
            'second_reference' => $request->second_reference,
            'next_of_kin_name' => $request->next_of_kin_name,
            'next_of_kin_phone' => $request->next_of_kin_phone,
            'relationship' => $request->relationship,
        ]);


        return redirect('home');
    }

    public function showApplicationDetails()//show details for a registered user
    {


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
            'vacancies' => Vacancy::where('school_id', $id)->paginate(10),

        ]);

    }

    //get vacancy dropdown
    public function county()
    {
        return view('dashboard.user.application.vacancy.vacancydropdown');
    }


    public function vacancybycounty(Request $request)
    {

        return view('dashboard.user.application.vacancy.vacancybycounty', [
            'counties' => School::where('location', $request->counties)->get(),

        ]);

    }

    public function vacancybysubjects()
    {
        return view('dashboard.user.application.vacancy.subjectsvacancy', [
            'subjects' => Vacancy::where('subjects', auth()->user()->application->subject_one)
                ->orwhere('subjects', auth()->user()->application->subject_two)->paginate(10),


        ]);

    }

    public function vacancybyschool($id)
    {
        return view('dashboard.user.application.vacancy.vacancybyschool', [
            'schools' => Vacancy::where('school_id', $id)->paginate(10),
        ]);

    }

}
