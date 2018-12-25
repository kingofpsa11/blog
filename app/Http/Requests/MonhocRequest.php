<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MonhocRequest extends FormRequest
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
            //
            // 'txtMonhoc' => 'required|unique:monhocs,monhoc',
            // 'txtGiatien' => 'required',
            // 'txtGiangvien' => 'required',
        ];
    }

    public function messages()
    {
        return [
            // 'txtMonhoc.required' => 'Nhap mon hoc',
            // 'txtGiatien.required' => 'Nhap gia tien',
            // 'txtGiangvien.required' => 'Nhap giang vien',
        ];
    }
}
