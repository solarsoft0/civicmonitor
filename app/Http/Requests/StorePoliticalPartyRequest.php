<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePoliticalPartyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Symfony\Component\HttpKernel\Tests\EventListener\FragmentListenerTest;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:225',
            'description' => 'required|string',
            'acronym' => 'required|string|max:10',
            'founded_date' => 'date',
        ];
    }
}
