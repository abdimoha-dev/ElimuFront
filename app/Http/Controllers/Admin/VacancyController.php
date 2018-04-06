<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\VacancyRequest;
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
            'reference_no' =>$request-> reference_no,
            'class'        => $request->class,
        ]);
    }
}
