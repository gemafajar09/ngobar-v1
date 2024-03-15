<?php

namespace App\Http\Requests;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ];
    }

    public function messages() : array {
        return [
            'name.required'     => 'Masukan Nama',
            'email.required'    => 'Masukan Alamat Email',
            'email.email'       => 'Masukan Alamat Email dengan benar!',
            'email.unique'       => 'Alamat Email Sudah Ada!',
            'password.required' => 'Masukan Password Dengan Benar!',
            'password.min'      => 'Masukan Password Minimal 8 Karakter!',
        ];
    }
}
