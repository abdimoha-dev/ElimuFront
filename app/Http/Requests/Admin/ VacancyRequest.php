<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class  VacancyRequest extends FormRequest
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
            'duration' => 'required|string|max:355',
            'subjects' => 'required|string|max:255',

        ];
    }

    public function messages()
    {
        return [
            'duration.required' => 'Please enter the duration of teaching',
            'subjects.required'=>'Please enter subject combination',
        ];
    }
}
