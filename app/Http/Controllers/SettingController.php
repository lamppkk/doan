<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Storage;
use App\Options;
use App\Categorys;
class SettingController extends Controller
{
    public function getMenu($id) {
        $menu1 = $menu2 = $menu3 = $menu4 = $data = '';
        if($id == 1) {
            $menu1  ='active'; 
            $data =  Storage::get('menu1.json');
        } else if($id == 2) {
            $menu2  ='active'; 
            $data =  Storage::get('menu2.json');
        }
        else  if($id == 3)  {
            $menu3  ='active'; 
            $data =  Storage::get('menu3.json');
        } else {
            $menu4  ='active'; 
            $data =  Storage::get('menu4.json');
        }
        $menu = Categorys::where('parent_id', 0)->orderBy('id','DESC')->get()->toArray();
        return view('admin.menu', compact('menu', 'menu1', 'menu2', 'menu3', 'menu4', 'data', 'id'));
    }
    
    public function postMenu($id, Request $request) {
        if($id == 1) {
            $path = 'menu1.json';
        } else if($id == 2) {
            $path = 'menu2.json';
        }
        else   if($id == 3){
            $path = 'menu3.json';
        } else  $path = 'menu4.json';
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

    public function getAds($id)
    {
        $ads1 = $ads2 = $ads3 = $ads4 = '';
        if($id == 1) {
            $ads1  ='active'; 
        } else if($id == 2) {
            $ads2  ='active'; 
        }
        else  if($id == 3) {
            $ads3  ='active'; 
        } else $ads4  ='active'; 

        return view('admin.ads', [
            'ads1' => $ads1, 
            'ads2' => $ads2, 
            'ads3' => $ads3, 
            'ads4' => $ads4, 
            'id' => $id
            ]);
    }
    
    public function postAds(Request $request, $id)
    {
        if($id == 1) {
             $this->updateOption('ads-image11', $request->input('ads-image11'));
             $this->updateOption('ads-image12', $request->input('ads-image12'));
             $this->updateOption('ads-image13', $request->input('ads-image13'));
        } else if($id == 2) {
             $this->updateOption('ads-image2', $request->input('ads-image2'));
             $this->updateOption('ads-link2', $request->input('ads-link2'));
        }
        else  if($id == 3) {
            $this->updateOption('ads-image3', $request->input('ads-image3'));
            $this->updateOption('ads-link3', $request->input('ads-link3'));
        }  else {
            $this->updateOption('ads-image4', $request->input('ads-image4'));
            $this->updateOption('ads-link4', $request->input('ads-link4'));
        }
        return redirect()->route('admin.getAds', $id)->with(['flash_message'=>'Sửa thành công', 'flash_level'=>'alert-success alert-dismissable']);

    }


}
