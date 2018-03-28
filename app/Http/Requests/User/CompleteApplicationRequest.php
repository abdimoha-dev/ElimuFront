<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CompleteApplicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "id_number"          => "required",
            "place_of_birth"     => "required",
            "place_of_residence" => "required",
            "year_of_birth"      => "required",
            "year_finished_sec"  => "required",
            "education_level"    => "required",
            "sec_school"         => "required",
            "index_no"           => "required",
            "course"             => "required",
            "next_of_kin_phone"  => "required",
            "next_of_kin_email"  => "required",
        ];
    }

    public function messages()
    {
        return [
            "id_number.required"          => 'Please enter your identification number',
            "place_of_birth.required"     => 'Please enter your place of birth',
            "place_of_residence.required" => 'Please enter your place of birth',
            "year_of_birth.required"      => 'Please enter your year of birth',
            "year_finished_sec.required"  => 'Please enter year you finished school',
            "education_level.required"    => 'Please enter your education level',
            "sec_school.required"         => 'Please enter your schhol',
            "index_no.required"           => 'Please enter your index number',
            "course.required"             => 'Please enter the course you studied',
            "next_of_kin_phone.required"  => 'Please enter enter next of kin phone number',
            "next_of_kin_email.required"  => 'Please enter email',
        ];
    }
}
