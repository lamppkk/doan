<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
            'txtUser' => 'required|unique:users,username',
			'txtEmail' => 'required|unique:users,email',
			'txtPass' => 'required',
			'txtRePass' => 'required|same:txtPass',
			'txtLevel' => 'required'
        ];
    }
	
	public function messages()
    {
        return [
            'txtUser.required' => 'Vui lòng nhập tên người dùng',
            'txtUser.unique' => 'Tên người dùng đã tồn tại',
			'txtEmail.required' => 'Vui lòng nhập email',
			'txtEmail.unique' => 'Email đã tồn tại',
			'txtPass.required' => 'Vui lòng nhập mật khẩu',
			'txtRePass.required' => 'Vui lòng nhập lại mật khẩu',
			'txtRePass.same' => 'Mật khẩu không trùng khớp',
			'txtLevel.required' => 'Vui lòng chọn quyền'
        ];
    }
}
