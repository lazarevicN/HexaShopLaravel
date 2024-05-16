<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserRequest extends FormRequest
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
            'firstName' => ['required', 'regex:/^[A-Z][a-z]{1,13}$/'],
            'lastName' => ['required', 'regex:/^([A-Z][a-z]{1,30}\s?)+$/'],
            'city' => 'required|not_in:0',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'street' => ['required', 'regex:/^[A-Z][a-z]{3,20}(\s[A-Z][a-z]{3,20})*\s[0-9]+([a-z])?$/'],
        ];
    }

    public function messages()
    {
        return [
            'required' => 'The :attribute field is required.',
            'firstName.max' => 'First name must not be longer than :max characters.',
            'firstName.regex' => 'First name must start with a capital letter!',
            'lastName.regex' => 'Last name must start with a capital letter!',
            'lastName.max' => 'Last name must not be longer than :max characters.',
            'street.regex' => 'Street must start with a capital letter and must have number of building!',
            'password.min' => 'Password must have al least 8 characters'
            ];
    }
}
