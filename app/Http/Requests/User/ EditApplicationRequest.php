<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class  EditApplicationRequest extends FormRequest
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
            //  "id_number" => "required",
            "place_of_birth"     => "required",
            "place_of_residence" => "required",
            "year_of_birth"      => "required",
            "year_finished_sec"  => "required",
            "education_level"    => "required",
            "sec_school"         => "required",
            "index_no"           => "required",
            "higher_inst"        => "required",
            "course"             => "required",
            "subject_one"        => "required",
            "subject_two"        => "required",
            "first_reference"    => "required",
            "second_reference"   => "required",
            "next_of_kin_name"   => "required",
            "next_of_kin_phone"  => "required",
            "relationship"       => "required",
        ];
    }

    public function messages()
    {
        return [
            // "id_number.required" => 'Please enter your identification number',
            "place_of_birth.required"     => 'Please enter your place of birth',
            "place_of_residence.required" => 'Please enter your place of birth',
            "year_of_birth.required"      => 'Please enter your year of birth',
            "year_finished_sec.required"  => 'Please enter year you finished school',
            "education_level.required"    => 'Please enter your education level',
            "sec_school.required"         => 'Please enter your schhol',
            "index_no.required"           => 'Please enter your index number',
            "higher_inst.required"        => 'please enter the institution you studied',
            "course.required"             => 'Please enter the course you studied',
            "subject_one.required"        => 'please enter the subjects you can teach',
            "subject_two.required"        => 'please enter the subjects you can teach',
            "first_reference"             => "please enter your reference",
            "second_reference"            => "please enter your reference",
            "next_of_kin_name.required"   => 'Please enter enter next of kin phone name',
            "next_of_kin_phone.required"  => 'Please enter enter next of kin phone number',
            "relationship.required"       => 'Please enter your relationship',
        ];
    }
}
