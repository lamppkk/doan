<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\User;
use Auth;
class UserController extends Controller
{
	public function getList() {
		$data  = User::Select()->orderBy('id','DESC')->get()->toArray();
		return view('admin.user.list', compact('data'));
    }
	
	public function postList(UserRequest $request) {
		$user = new User;
    	$user->username = $request->txtUser;
    	$user->password = bcrypt($request->txtPass);
    	$user->email = $request->txtEmail;
    	$user->level = $request->txtLevel;
    	$user->remember_token = $request->_token;
    	$user->status = 1;
        $user->save();
        return redirect()->route('admin.user.getList')->with(['flash_message'=>'Thêm thành công', 'flash_level'=>'alert-info alert-dismissable']);
    
    }
	
	public function getDelete($id)
   	{
		$user = User::find($id);
		$user->delete();
		return redirect()->route('admin.user.getList')->with(['flash_message'=>'Xóa thành công', 'flash_level'=>'alert-info alert-dismissable']);
    
   	}
	
	public function getEdit($id)
   	{
		$data  = User::Select()->orderBy('id','DESC')->get()->toArray();
		$user = User::find($id)->toArray();
   		return view('admin.user.edit', compact('data','user'));
   	}
	
   	public function postEdit(Request $request, $id )
   	{
		$user = User::find($id);
		if($request->input('txtPass')) {
			$this->validate($request,
				['txtPass' => 'same:txtRePass'],
				['txtPass.same' => 'Mật khẩu không trùng khớp']
			);
			$user->password = bcrypt($request->input('txtPass'));
		}
		$user->email = $request->input('txtEmail');
    	$user->level = $request->input('txtLevel');
    	$user->remember_token = $request->input('_token');
		$user->save();
        return redirect()->route('admin.user.getList')->with(['flash_message'=>'Sửa thành công', 'flash_level'=>'alert-info alert-dismissable']);
    
	}
		
	public function postAction(Request $request)
   	{
		$action = $request->action;
		if(!is_array($request->cbitem))
			return redirect()->route('admin.user.getList')->with(['flash_message'=>'Chưa chọn sản phẩm cần thao tác', 'flash_level'=>'alert-info alert-dismissable']);
		else if($action == null)
			return redirect()->route('admin.user.getList')->with(['flash_message'=>'Chưa chọn thao tác', 'flash_level'=>'alert-info alert-dismissable']);
		else {
			if($action == 'delete') {
				foreach($request->cbitem as $id) 
					$this->getDelete($id);
				return redirect()->route('admin.user.getList')->with(['flash_message'=>'Xóa thành công', 'flash_level'=>'alert-success alert-dismissable']);
			}
		} 
		return redirect()->route('admin.user.getList')->with(['flash_message'=>'Có lỗi xảy ra', 'flash_level'=>'alert-info alert-dismissable']);
		
	}
	
	
}
