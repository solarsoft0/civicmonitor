<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCandidateRequest extends FormRequest
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
            'id' => 'required|integer|exits:candidates',
            'title' => 'string',
            'name' => '|string|max:255',
            'other_names' => 'json',
            'email' => '|email',
            'gender' => '|string',
            'birth-date' => '|date',
            'death-date' => 'date',
            'image' => 'image',
            'cover-image' => 'image',
            'summary' => 'text',
            'biography' => 'text',
            'national_identity' => 'string',
            'contact_details' => 'json'];
    }
}
