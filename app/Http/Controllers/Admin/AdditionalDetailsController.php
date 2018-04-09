<?php

namespace App\Http\Controllers\Admin;

//use App\headteacher;
use App\Http\Requests\Admin\CompleteAdminRequest;
use App\Http\Controllers\Controller;
use App\Models\Headteacher;

class AdditionalDetailsController extends Controller
{
    public function showAdminDetailsForm()
    {
        return view('dashboard.admin.details.headteacher');
    }


    public function adminAdditinalDetails(CompleteAdminRequest $request)
    {
Headteacher::create([
            'user_id'   => auth()->user()->id,
            'tsc_no'    => $request->tsc_no,
            'id_no'     => $request->id_no,
            'alt_phone' => $request->alt_phone,
        ]);


        return redirect('home');
    }
}
