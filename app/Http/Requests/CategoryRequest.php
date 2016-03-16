<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoryRequest extends Request
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
            'txtTen' => 'required|unique:categorys,name',
            'txtAlias' => 'required|unique:categorys,alias',
            //'txtOrder' => 'required',
            'txtTukhoa' => 'required',
            'txtMota' => 'required',
            'txtLoaicha' => 'required',
            //
        ];
    }

    public function messages()
    {
        return [
            'txtTen.required' => 'Vui lòng nhập tên loại sản phẩm',
            'txtTen.unique' => 'Loại sản phẩm đã tồn tại',
            'txtAlias.required' => 'Vui lòng chọn đường dẫn',
            'txtAlias.unique' => 'Đường dẫn đã tồn tại',
            //'txtOrder.required' => 'Vui lòng nhập sắp xếp',
            'txtTukhoa.required' => 'Vui lòng nhập từ khóa',
            'txtMota.required' => 'Vui lòng nhập mô tả',
            'txtLoaicha.required' => 'Vui lòng chọn loại cha',

            //
        ];
    }
}
