<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
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
            "tittle" => "required",
            "body"   => "required",
        ];
    }

    public function message()
    {
        return [
            "tittle.required" => "please enter the tittle",
            "body.required"   => "please enter the content",
        ];

    }
}
