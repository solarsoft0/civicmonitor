<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule as Rule;

class StorePoliticianRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => "required|string|max:25",
            'name' => "required|string|max:25",
            'other_names' => "json",
            'email' => "required|email",
            'gender' => [
                'required',
                Rule::in(['male', 'female']),
            ],
            'birth-date' => "date",
            'death-date' => "date",
            'image' => "url",
            'cover-image' => "url",
            'summary' => "text",
            'biography' => "text",
            'national_identity' => "string",
            'contact_details' => "json",
            'links' => "json",

        ];
    }
}
