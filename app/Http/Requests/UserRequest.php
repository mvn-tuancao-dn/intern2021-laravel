<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


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
        $rules = [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'gender' =>'required',
            'birthday' => 'required'
        ];
        if ($this->id) {
            $rules['email'] = 'required|email|unique:users'.$this->id;
        }
        return $rules;
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên người dùng không được để trống',
            'email.required' => 'Email người dùng không được để trống',
            'email.unique' => 'Email người dùng đã tồn tại',
            'gender.required' => 'Giới tính không được để trống',
            'birthday.required' => 'Ngày sinh không được để trống'
        ];
    }
}
