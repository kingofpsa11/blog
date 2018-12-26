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
            'txtMonhoc' => 'required|unique:monhocs,monhoc',
            'txtGiatien' => 'required',
            'txtGiangvien' => 'required',
            'fImages' => 'required|image|max:100',
        ];
    }

    public function messages()
    {
        return [
            'required' => ' Đề nghị nhập :attribute',
            'txtMonhoc.unique' => 'Ten mon hoc da ton tai',
            'fImages.image' => 'De nghi chi upload anh',
            'fImages.max' => 'Vuot qua dung luong cho phep',
        ];
    }
    public function attributes()
    {
        return [
            'txtMonhoc' => 'Môn học',
            'txtGiatien' => 'Giá tiền',
            'txtGiangvien' => 'Giảng viên',
            'fImages' => 'Ảnh',
        ];
    }
}
