<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => ['required', 'regex:/^[A-Z][a-z]{3,20}(\s[A-Z][a-z]{3,20})*$/'],
            'brand' => 'required|not_in:0',
            'category' => 'required|not_in:0',
            'gender' => 'required|not_in:0',
            'price' => 'required|not_in:0',
            'fit' => 'required|not_in:0',
            'sizes' => 'required',
            'onSale' => 'required|not_in:0',
            'discount' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'The :attribute is/are required.',
            'name.regex' => 'Name must start with a capital letter! Can have more words.'
        ];
    }
}
