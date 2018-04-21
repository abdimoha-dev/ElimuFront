<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SchoolsDetailsRequest;
use App\Models\School;

class SchoolDetailsController extends Controller
{
    public function showSchoolDetails()
    {
        return view('dashboard.admin.details.schools');

    }

    public function addSchoolDetails(SchoolsDetailsRequest $request)
    {
        School::create([
            'user_id'        => auth()->user()->id,
            'name'           => $request->name,
            'location'       => $request->location,
            'address'        => $request->address,
            'no_of_classes'  => $request->no_of_classes,
            'no_of_teachers' => $request->no_of_teachers,
            'no_of_students' => $request->no_of_students,

        ]);

        return redirect('home');


    }
}
