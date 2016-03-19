<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class OrderRequest extends Request
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
            'txtHoten' => 'required',
            'txtSdt' => 'required',
            'txtEmail' => 'required',
            'txtDiachi' => 'required',
            'thanhtoan' => 'required',
        ];
    }
	
	public function messages()
    {
        return [
            'txtHoten.required' => 'Vui lòng nhập họ tên',
            'txtSdt.required' => 'Vui lòng nhập số điện thoại',
            'txtEmail.required' => 'Vui lòng nhập email',
            'txtDiachi.required' => 'Vui lòng nhập địa chỉ',
			'thanhtoan.required' => 'Vui lòng chọn hình thức thanh toán',
           
        ];
    }
}
