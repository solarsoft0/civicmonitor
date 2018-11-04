<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCandidateRequest extends FormRequest
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
           'title' =>  'required|string',
           'name' => 'required|string|max:255',
           'other_names' => 'json',
           'email' =>  'required|email',
           'gender' =>  'required|string',
            'birth-date' =>  'required|date',
            'death-date' => 'date',
           'image' => 'image',
           'cover-image' => 'image',
            'summary' => 'text',
            'biography' =>  'required',
           'national_identity' => 'string',
           'contact_details' => 'json'
        ];
    }
}
