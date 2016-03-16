<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CategoryRequest;

use App\Categorys;

class CategoryController extends Controller
{
    public function getList()
    {
    	$data  = Categorys::Select('id','name', 'description', 'parent_id')->orderBy('id','DESC')->get()->toArray();

    	$parent = Categorys::Select('id','name','parent_id')->get()->toArray();

    	return view('admin.categorys.list',compact('data', 'parent'));

    }

    public function postList(CategoryRequest $request)
    {
    	
    	$category = new Categorys;
    	$category->name = $request->txtTen;
    	$category->alias = $request->txtAlias;
    	//$category->order = $request->txtOrder;
    	$category->keyword = $request->txtTukhoa;
    	$category->description = $request->txtMota;
    	$category->parent_id = $request->txtLoaicha;
        $category->save();
        return redirect()->route('admin.categorys.getList')->with(['flash_message'=>'Thêm thành công', 'flash_level'=>'alert-info alert-dismissable']);
    
    }

   	public function getDelete($id)
   	{
		$parent = Categorys::where('parent_id', $id)->count();
		if($parent == 0) {
			$category = Categorys::find($id);
			$category->delete();
			return redirect()->route('admin.categorys.getList')->with(['flash_message'=>'Xóa thành công', 'flash_level'=>'alert-success alert-dismissable']);
		} else {
			return redirect()->route('admin.categorys.getList')->with(['flash_message'=>'Bạn không thể xóa loại sản phẩm này', 'flash_level'=>'alert-danger alert-dismissable']);
		
		}
   	}

   	public function getEdit($id)
   	{
		$data  = Categorys::Select('id','name', 'description', 'parent_id')->orderBy('id','DESC')->get()->toArray();

   		$edit  = Categorys::findOrFail($id)->toArray();

    	$parent = Categorys::Select('id','name','parent_id')->get()->toArray();

    	return view('admin.categorys.edit',compact('data', 'parent', 'edit', 'id'));
   	}
   	public function postEdit(Request $request, $id)
   	{
   		$this->validate($request, 
			["txtTen" => "required"],
			["txtTen.required" => "Vui lòng nhập tên"]
		);
		$category = Categorys::find($id);
    	$category->name = $request->txtTen;
    	$category->alias = $request->txtAlias;
    	//$category->order = $request->txtOrder;
    	$category->keyword = $request->txtTukhoa;
    	$category->description = $request->txtMota;
    	$category->parent_id = $request->txtLoaicha;
        $category->save();
        return redirect()->route('admin.categorys.getList')->with(['flash_message'=>'Sửa thành công', 'flash_level'=>'alert-info alert-dismissable']);
   
   	}
	
	public function postDeleteN(Request $request)
   	{
		if(is_array($request->cbitem)) {
			foreach($request->cbitem as $id)
				$this->getDelete($id);
			return redirect()->route('admin.categorys.getList')->with(['flash_message'=>'Xóa thành công', 'flash_level'=>'alert-success alert-dismissable']);
		} else 
		return redirect()->route('admin.categorys.getList')->with(['flash_message'=>'Chưa chọn loại sản phẩm cần xóa', 'flash_level'=>'alert-info alert-dismissable']);
		
	}
	
}
