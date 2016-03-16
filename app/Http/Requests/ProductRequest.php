<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request
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
			'txtTen' => 'required|unique:products,name',
            'txtAlias' => 'required|unique:products,alias',
			'txtNoiDung' => 'required',
			'txtTukhoa' => 'required',
            'txtMota' => 'required',
			'sltDanhmuc' => 'required',
			'txtDongia' => 'required',
			'anhspReq' => 'required',
			'txtImage' => 'required',
			
			'txtTrangthai' => 'required',
        ];

    }
	
	public function messages()
    {
        return [
            'txtTen.required' => 'Vui lòng nhập tên sản phẩm',
            'txtTen.unique' => 'Sản phẩm đã tồn tại',
            'txtAlias.required' => 'Vui lòng chọn đường dẫn',
            'txtAlias.unique' => 'Đường dẫn đã tồn tại',
            'txtTukhoa.required' => 'Vui lòng nhập từ khóa',
            'txtMota.required' => 'Vui lòng nhập mô tả',
			'txtNoiDung.required' => 'Vui lòng nhập nội dung',
			'txtImage.required' => 'Vui lòng chọn ảnh đại diện',
			'anhspReq.required' => 'Vui lòng chọn ít nhất một ảnh sản phẩm',
			
			'sltDanhmuc.required' => 'Vui lòng chọn danh mục',
            
        ];
    }
}
