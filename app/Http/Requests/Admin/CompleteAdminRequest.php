<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class  CompleteAdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tsc_no' => 'required|string|max:255',
            'id_no' => 'required|string|max:255',
            'alt_phone' => 'required|string|max:10',

        ];
    }

    public function messages()
    {
        return [
            'tsc_no.required' => 'Please enter your TSC Number',
            'id_no.required'=>'Please enter your ID Number',
            'alt_phone.required'=>'Please enter your alternative phone Number',
        ];
    }
}
