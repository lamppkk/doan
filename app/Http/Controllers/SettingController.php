<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Storage;
use App\Options;
class SettingController extends Controller
{
    public function getMenu($id) {
		$menu1 = $menu2 = $menu3 = $data = '';
		if($id == 1) {
			$menu1  ='active'; 
			$data =  Storage::get('menu1.json');
		} else if($id == 2) {
			$menu2  ='active'; 
			$data =  Storage::get('menu2.json');
		}
		else  {
			$menu3  ='active'; 
			$data =  Storage::get('menu3.json');
		}
		return view('admin.menu', compact('menu1', 'menu2', 'menu3','data'));
	}
	
	public function postMenu($id, Request $request) {
		if($id == 1) {
			$path = 'menu1.json';
		} else if($id == 2) {
			$path = 'menu2.json';
		}
		else  {
			$path = 'menu3.json';
		}
		$written = Storage::put($path, $request->jsonOutput);
		if($written === false) {
			return redirect()->route('admin.menu.getMenu', $id)->with(['flash_message'=>'Có lỗi xảy ra', 'flash_level'=>'alert-info alert-dismissable']);
		} else return redirect()->route('admin.menu.getMenu', $id)->with(['flash_message'=>'Sửa thành công', 'flash_level'=>'alert-info alert-dismissable']);
   
	}

	public function getSetting()
	{
		$data = Options::select()->get()->toArray();
		return view('admin.setting', compact('data'));
	}

	public function updateOption($name, $value)
	{
		$option = Options::where('name', $name)->update(['value' => $value]);
	}
	public function postSetting(Request $request)
	{
		$this->updateOption('sitename', $request->txtTen);
		$this->updateOption('title', $request->txtTitle);
		$this->updateOption('description', $request->txtMota);
		$this->updateOption('keyword', $request->txtTukhoa);
		$this->updateOption('logo', $request->txtLogo);
		$this->updateOption('favicon', $request->txtFavicon);
		$this->updateOption('image', $request->txtAnh);
		if(isset($request->txtTrangthai))
			$this->updateOption('status', $request->txtTrangthai);
		return redirect()->route('admin.setting')->with(['flash_message'=>'Sửa thành công', 'flash_level'=>'alert-success alert-dismissable']);
	}
}
