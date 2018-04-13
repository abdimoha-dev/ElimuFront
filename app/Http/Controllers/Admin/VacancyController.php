<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\VacancyRequest;
use App\Models\Application;
use App\Models\Subject;
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
            'reference_no' => $request->reference_no,
            'class'        => $request->class,
        ]);
    }

    public function allteachersvacancy()
    {

        return view('dashboard.admin.details.vacancy.teachersvacancy', [
            'teachers' => User::where('ROLE', 'USER')->paginate(20),


        ]);

    }

    public function showTeachersDetails($id)
    {
        return view('dashboard.admin.details.admindetails', [
            'details' => Application::where('user_id', $id)->get(),


        ]);

    }

    public function showMyVacancies()
    {
        return view('dashboard.admin.details.vacancy.schoolvacancy', [
            'vacancies' => Vacancy::where('school_id', auth()->user()->id)->get(),
        ]);

    }

    public function vacancyId($id)
    {
        $vacancy = Vacancy::find($id);

        return view('dashboard.admin.details.vacancy.relatedvacancy', [
            'teachers' => Application::where('subject_one', $vacancy->subjects)
                ->orwhere('subject_two', $vacancy->subjects)->get(),

        ]);

    }
}
