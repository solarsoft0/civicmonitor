<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIssuePositionRequest extends FormRequest
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
            'issue_id' => 'required|integer|exits:issues',
            'candidate_id' => 'required|integer|exits:candidates',
            'title' => 'required|string|max:225',
            'body' => "text",
            'audio' => 'mimes:mp3',
            'sources' => "json",

        ];
    }
}
