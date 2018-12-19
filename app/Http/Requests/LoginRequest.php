<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'name' => 'required|max:20',
            'age' => 'required|integer|max:20'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute Khong duoc de trong',
            'max' => ':attribute Khong duoc lon hon :max',
        ]
    }

    public function attributes()
    {
        return[
            'name' => 'Ten dang nhap',
            'age' => 'Tuoi',
        ]
    }
}
