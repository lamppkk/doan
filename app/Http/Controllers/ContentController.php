<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Options;

class ContentController extends Controller
{
	public function updateOption($name, $value)
    {
        $option = Options::where('name', $name)->update(['value' => $value]);
    }

    public function getGioiThieu()
    {
    	return view('admin.gioithieu');
    }

    public function postGioiThieu(Request $request)
    {
    	$this->updateOption('gioithieu-title', $request->txtTieude);
    	$this->updateOption('gioithieu-content', $request->txtNoiDung);
    	$this->updateOption('gioithieu-description', $request->txtMota);
    	$this->updateOption('gioithieu-keyword', $request->txtTukhoa);
    	return redirect()->route('admin.getGioithieu')->with(['flash_message'=>'Sửa thành công', 'flash_level'=>'alert-info alert-dismissable']);
    

	}

	public function getDieukhoan()
    {
    	return view('admin.dieukhoan');
    }

    public function postDieukhoan(Request $request)
    {
    	$this->updateOption('dieukhoan-title', $request->txtTieude);
    	$this->updateOption('dieukhoan-content', $request->txtNoiDung);
    	$this->updateOption('dieukhoan-description', $request->txtMota);
    	$this->updateOption('dieukhoan-keyword', $request->txtTukhoa);
    	return redirect()->route('admin.getDieukhoan')->with(['flash_message'=>'Sửa thành công', 'flash_level'=>'alert-info alert-dismissable']);
	}

	public function getHuongdan()
    {
    	return view('admin.huongdan');
    }

    public function postHuongdan(Request $request)
    {
    	$this->updateOption('huongdan-title', $request->txtTieude);
    	$this->updateOption('huongdan-content', $request->txtNoiDung);
    	$this->updateOption('huongdan-description', $request->txtMota);
    	$this->updateOption('huongdan-keyword', $request->txtTukhoa);
    	return redirect()->route('admin.getHuongdan')->with(['flash_message'=>'Sửa thành công', 'flash_level'=>'alert-info alert-dismissable']);
	}

	public function getChinhsach()
    {
    	return view('admin.chinhsach');
    }

    public function postChinhsach(Request $request)
    {
    	$this->updateOption('chinhsach-title', $request->txtTieude);
    	$this->updateOption('chinhsach-content', $request->txtNoiDung);
    	$this->updateOption('chinhsach-description', $request->txtMota);
    	$this->updateOption('chinhsach-keyword', $request->txtTukhoa);
    	return redirect()->route('admin.getChinhsach')->with(['flash_message'=>'Sửa thành công', 'flash_level'=>'alert-info alert-dismissable']);
	}


}