<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'fullname'=>"required|string|min:4",
            'username'=>"required|string|min:4",
            'email'=>"required|string|min:4|email|unique:users,email",
            'password'=>"required|string|min:6",
            'avatar'=>"required|mimes:png,jpg",
        ];
    }
}
