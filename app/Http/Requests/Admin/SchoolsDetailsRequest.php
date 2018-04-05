<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SchoolsDetailsRequest extends FormRequest
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
            'name' => 'required|string|max:355',
            'location' => 'required|string|max:255',
            'address' =>'required|string|max:255',
            'no_of_classes'=>'required|string|max:255',
            'no_of_students'=>'required|string|max:255',
            'no_of_teachers'=>'required|string|max:255',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter the school name',
            'location.required'=>'Please enter school location',
            'address.required'=>'Please enter school address',
            'no_of_classes.required' => 'Please enter the number of classes',
            'no_of_students.required'=>'Please enter the number of students',
            'no_of_teachers.required'=>'Please enter the number of teachers',
        ];
    }
}
