<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class NewsRequest extends Request
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
            'title' => 'required|unique:news,title',
            'alias' => 'required|unique:news,alias',
            'content' => 'required',
            'images' => 'required',
            //
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Vui lòng nhập tiêu đề',
            'title.unique' => 'Bài viết đã tồn tại',
            'alias.required' => 'Vui lòng chọn đường dẫn',
            'alias.unique' => 'Đường dẫn đã tồn tại',
            'content.required' => 'Vui lòng nhập nội dung',
            'images.required' => 'Vui lòng chọn ảnh đại diện',
            //
        ];
    }
}
