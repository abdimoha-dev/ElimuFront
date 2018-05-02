<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\VacancyRequest;
use App\Models\Application;
use App\Models\User;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VacancyController extends Controller
{
    public function showVacancyDetails()
    {
        return view('dashboard.admin.details.vacancy');
    }

    public function AddVacancyDetails(VacancyRequest $request)
    {
        Vacancy::create([

            'duration'     => $request->duration,
            'subjects'     => $request->subjects,
            'reference_no' => strtoupper(str_random(10)),
            'class'        => $request->class,
            'school_id'    =>auth()->user()->school->id,

        ]);
    }
//getting all the applicant teachers
    public function allteachersvacancy()
    {

        return view('dashboard.admin.details.vacancy.teachersvacancy', [
            'teachers' => User::where('ROLE', 'USER')->paginate(20),


        ]);

    }
//showing each teachers details
    public function showTeachersDetails($id)
    {
        return view('dashboard.admin.details.admindetails', [
            'details' => Application::where('user_id', $id)->paginate(15),


        ]);

    }
//vancancies in a school
    public function showMyVacancies()
    {
        return view('dashboard.admin.details.vacancy.schoolvacancy', [
            'vacancies' => Vacancy::where('school_id', auth()->user()->id)->paginate(15),
        ]);

    }
//teachers job application vacancy related to a school
    public function vacancyId($id)
    {
        $vacancy = Vacancy::find($id);
        return view('dashboard.admin.details.vacancy.relatedvacancy', [
            'teachers' => Application::where('subject_one', $vacancy->subjects)
                ->orwhere('subject_two', $vacancy->subjects)->paginate(15),

        ]);

    }
}
