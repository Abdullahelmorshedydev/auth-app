<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
    return [
        'name'=>'required',
        'email'=>'required|email|unique:users',
        'password'=>'required|min:6',
        'confirmpass'=>'required|same:password'
    ];
}
    public function messages()
    {
        return [
            'name.required'=>'This field is required',
            'email.required'=>'This field is required',
            'email.email'=>'This field type is email',
            'email.unique'=>'This email in use',
            'password.required'=>'This field is required',
            'password.min'=>'Password min length : 6',
            'confirmpass.required'=>'This field is required',
            'confirmpass.same'=>'Password does not match',
        ];
    }
}
