<?php

namespace App\Http\Controllers;

class EditController extends Controller
{
    public function edit($id)
    {
        //find customer
        $customer = Customer::find($id);

        //show the edit form
        return View::make('customers.edit')->with('customer', $customer);

    }

//    public function editApplicationForm()
//    {
//        return view('dashboard.user.application');
//    }

    public function update()
    {

        $validation = Validator::make(Input::all(),
            [
                'id_number'         => 'required|max:100',
                'place_of_birth'    => 'required|min:3',
                'year_of_birth'     => 'required|min:3',
                'education_level'   => 'required',
                'year_finished_sec' => 'required|min:11',
                'sec_school'        => 'required|min:11',
                'index_no'          => 'required|email',
                'course'            => 'required|max:100',
                'next_of_kin_phone' => 'required',
                'next_of_kin_email' => 'required|min:11'

            ]
        ); //close validation

        if ($validation->fails()) {
            //withInput keep the users info
            return Redirect::back()->withInput()->withErrors($validation->messages());

        } else {

            $user = Auth::user()->id;

            $id_number = Input::get('id_number');
            $place_of_birth = Input::get('place_of_birth');
            $year_of_birth = Input::get('year_of_birth');
            $education_level = Input::get('education_level');
            $year_finished_sec = Input::get('year_finished_sec');
            $sec_school = Input::get('sec_school');
            $index_no = Input::get('index_no');
            $course = Input::get('course');
            $next_of_kin_phone = Input::get('next_of_kin_phone');
            $next_of_kin_email = Input::get('next_of_kin_email');

            Customer::where('id', $user)->update([
                'name'              => $id_number,
                'address'           => $place_of_birth,
                'city'              => $year_of_birth,
                'postcode'          => $year_finished_sec,
                'phone'             => $education_level,
                'mobile'            => $sec_school,
                'email'             => $index_no,
                'contact'           => $course,
                'user_id'           => $next_of_kin_phone,
                'next_of_kin_email' => $next_of_kin_email
            ]);

            return Redirect::route('all-customers')->with('message', 'You have successfully updated');
        }
        }//close update

