<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\NewsRequest;
use App\News;
use Auth;
class NewsController extends Controller
{
    public function getList() {
		$data  = News::Select()->orderBy('id','DESC')->get()->toArray();
        return view('admin.news.list', compact('data'));
    }

    public function getAdd() {
        return view('admin.news.add');
    }

    public function postAdd(NewsRequest $request) {

        $news = new News;
        $news->user_id 		= Auth::user()->id;
        $news->title        = $request->title;
        $news->alias        = $request->alias;
        $news->description  = $request->description;
        $news->content      = $request->content;
        $news->images       = $request->images;
        $news->views        = 0;
        $news->status       = $request->status;
        $news->save();
        return redirect()->route('admin.news.getList')->with(['flash_message'=>'Thêm thành công', 'flash_level'=>'alert-info alert-dismissable']);
    }
	
	public function getEdit($id)
   	{
   		$news  = News::findOrFail($id)->toArray();
    	return view('admin.news.edit',compact('news'));
   	}
	
   	public function postEdit($id, Request $request)
   	{
		$news = News::find($id);
		$news->user_id 		= Auth::user()->id;
        $news->title        = $request->title;
        $news->alias        = $request->alias;
        $news->description  = $request->description;
        $news->content      = $request->content;
        $news->images       = $request->images;
        //$news->views        = 0;
        $news->status       = $request->status;
        $news->save();
        return redirect()->route('admin.news.getList')->with(['flash_message'=>'Sửa thành công', 'flash_level'=>'alert-info alert-dismissable']);
	}

	public function getDelete($id) {
		$new = News::find($id);
		$new ->delete();
		return redirect()->route('admin.news.getList')->with(['flash_message'=>'Xóa thành công', 'flash_level'=>'alert-success alert-dismissable']);
		
    }
	
	public function postAction(Request $request)
   	{
		$action = $request->action;
		if(!is_array($request->cbitem))
			return redirect()->route('admin.news.getList')->with(['flash_message'=>'Chưa chọn sản phẩm cần thao tác', 'flash_level'=>'alert-info alert-dismissable']);
		else if($action == '')
			return redirect()->route('admin.news.getList')->with(['flash_message'=>'Chưa chọn thao tác', 'flash_level'=>'alert-info alert-dismissable']);
		else {
			if($action == 'delete') {
				foreach($request->cbitem as $id) 
					$this->getDelete($id);
				return redirect()->route('admin.news.getList')->with(['flash_message'=>'Xóa thành công', 'flash_level'=>'alert-success alert-dismissable']);
			}
		} 
		return redirect()->route('admin.news.getList')->with(['flash_message'=>'Có lỗi xảy ra', 'flash_level'=>'alert-info alert-dismissable']);
		
	}
	
}
