<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => ['required', 'regex:/^[A-Z][a-z]{1,13}$/'],
            'email' => 'required|email',
            'message' => 'required'
        ];
    }

    public function messages(){

        return [
            'required' => 'The :attribute is required.',
            'name.regex' => 'Name must start with a capital letter!'
        ];
    }
}
