<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Members;
use App\FBLogs;
use App\Options;
use DB;
use Auth;
class FacebookController extends Controller
{
    public function getNotify()
    {
        $member = Members::where('facebook_id', '>', 0)->get()->toArray();
        $log = FBLogs::get()->toArray();
        return view('admin.facebook', compact('member', 'log'));
    }

    public function postNotify(Request $request)
    {
        $members = Members::where('facebook_id', '>', 0)->get()->toArray();
        foreach ($members as $key => $member) {
            sentFBNotification($member['facebook_id'], $request->txtLink, $request->txtContent);
        }
        $log = new FBLogs();
        $log->from = Auth::user()->username;
        $log->to = 'Tất cả facebook id';
        $log->link = $request->txtLink;
        $log->image = ' ';
        $log->content = $request->txtContent;
        $log->save();
        return redirect()->back()
            ->with(['flash_message'=>'Gửi thành công', 'flash_level'=>'alert-info alert-dismissable']);
        
    }

    public function updateOption($name, $value)
    {
        $option = Options::where('name', $name)->update(['value' => $value]);
    }

    public function postSetting(Request $request)
    {
        $this->updateOption('fb_register', $request->fb_register_val);
        $this->updateOption('fb_checkout', $request->fb_checkout_val);
        $this->updateOption('fb_order', $request->fb_order_val);
        $this->updateOption('fb_ship', $request->fb_ship_val);
        $this->updateOption('fb_done', $request->fb_done_val);
        $this->updateOption('fb_cancel', $request->fb_cancel_val);
        return redirect()->back()
            ->with(['flash_message'=>'Sửa thành công', 'flash_level'=>'alert-info alert-dismissable']);
    }

    public function getLiveChat()
    {
        return view('admin.livechat');
    }

    public function postLiveChat(Request $request)
    {
        $this->updateOption('livechat-page', $request->txtPage);
        $this->updateOption('livechat-bg', $request->txtBg);
        $this->updateOption('livechat-title', $request->txtTieuDe);
        $this->updateOption('livechat-lang', $request->txtLang);
        if(($request->txtTrangthai) == '0') {
            $status = 0;
        } else $status = 1;
        $this->updateOption('livechat-status', $status);
        return redirect()->back()
            ->with(['flash_message'=>'Sửa thành công', 'flash_level'=>'alert-info alert-dismissable']);
    }

    

}
