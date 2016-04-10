<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\ContactRequest;
use Request;
use Storage;
use App\Products;
use App\Categorys;
use App\Options;
use App\ProductOptions;
use App\Members;
use App\Orders;
use App\OrderDetails;
use App\Contacts;
use App\News;
use DB;
use Cart;
use Auth;
use Socialite;
use Session;
use Validator;
use DateTime;
use App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	protected $topMenu, $mainMenu;
	protected $dmMenu;
	protected $footer1, $footer2, $footer3;
	protected $option;
	protected $countCart;
    public function __construct()
    {
        //$this->middleware('auth');
		$this->topMenu =  Storage::get('menu1.json');
		$this->topMenu = json_decode($this->topMenu, true);
		
		//
		$this->mainMenu =  Storage::get('menu2.json');
		$this->mainMenu = json_decode($this->mainMenu, true);
		//
		$this->option = DB::table('options')->get();
		//
		$this->dmMenu  = Categorys::where('parent_id', 0)->orderBy('id','DESC')->get()->toArray();
		
		$this->countCart = Cart::count(false); 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
	 
    public function index()
    {
		$topMenu = $this->topMenu;
		$mainMenu = $this->mainMenu;
		$dmMenu = $this->dmMenu;
		$option = $this->option;
		$countCart = $this->countCart;
		//
		$data = Products::Select()->orderBy('id','DESC')->get()->toArray();
		return view('home.home', compact('countCart', 'option', 'topMenu', 'mainMenu', 'dmMenu', 'data'));
    }
	
	public function detail($alias, $id='')
    {
		$topMenu = $this->topMenu;
		$mainMenu = $this->mainMenu;
		$dmMenu = $this->dmMenu;
		$option = $this->option;
		$countCart = $this->countCart;
		//
		$product  = DB::table('products')->where('id', $id)->where('alias', $alias)->first();
		//get images
		$pimage = Products::find($id)->pimages->toArray(); 
		$pimages = array();
		foreach($pimage  as $key => $img) {
			$pimages[$key] = $img['image'];
		}
		$poptions = Products::find($id)->poptions->toArray(); 
		return view('home.detail', compact('countCart', 'option', 'product', 'pimages','poptions', 'topMenu', 'mainMenu', 'dmMenu'));
		
    }
	
	public function category($alias, $id)
	{
		$topMenu = $this->topMenu;
		$mainMenu = $this->mainMenu;
		$dmMenu = $this->dmMenu;
		$option = $this->option;
		$countCart = $this->countCart;
		$cate = DB::table('categorys')->select('id')->where('alias', $alias)->first();
		if(isset($cate)) $idcat = $cate->id;
		else $idcat = $id;
		//
		$data = Products::Select()->where('cat_id', $idcat)->orderBy('id','DESC')->paginate(4);
		$sidebar = Products::Select()->get();

		return view('home.category', compact('countCart', 'option', 'topMenu', 'mainMenu', 'dmMenu', 'data', 'idcat', 'sidebar'));
    }
	
	public function addToCart()
	{
		if(Request::ajax()) {
			$pid = Request::get('pid');
			$product = DB::table('products')->where('id', $pid)->first();
			Cart::add(array('id' => $pid, 'name' =>$product->name, 'qty' => 1, 'price' => $product->price, 'options' => array('image' => $product->images)));
			return Cart::count(false);
		}
	}

	public function viewCart()
	{
		$content = Cart::content();
		$total = Cart::total();
		return view('home.cart', compact('content', 'total'));
	}
	
	
	public function deleteCart()
	{
		if(Request::ajax()) {
			$rowid = Request::get('rowid');
			Cart::remove($rowid);
			return Cart::count(false);
		}
	}
	
	public function updateCart()
	{
		if(Request::ajax()) {
			$rowid = Request::get('rowid');
			$qty = Request::get('qty');
			Cart::update($rowid, $qty);
			return Cart::count(false);
		}
	}
	
	public function destroyCart()
	{
		if(Request::ajax()) {
			Cart::destroy();
			return Cart::count(false);
		}
	}
	
	//protected $redirectLogin = 'home';
	//Session::put('redirectLogin', 'home');
	
	public function getOrder()
	{
		if (Auth::guard('member')->check())
		{
			$topMenu = $this->topMenu;
			$mainMenu = $this->mainMenu;
			$dmMenu = $this->dmMenu;
			$option = $this->option;
			$countCart = $this->countCart;
			Session::forget('redirectLogin');
			$cartContent = Cart::content();
			return view('home.order', compact('cartContent', 'countCart', 'option', 'topMenu', 'mainMenu', 'dmMenu'));
		
		} else {
			//$this->redirectLogin = 'getOrder';
			Session::put('redirectLogin', 'getOrder');
			return redirect()->route('getMemberLogin')
			->with(['flash_message'=>'Đặt hàng ', 'action' => 'order']);
		}
		
	}
	function refreshAuthMember($id) { 
		$id = Auth::guard('member')->user()->id; 
		Auth::guard('member')->logout(); 
		Auth::guard('member')->loginUsingId($id); 
	}
		
	public function postOrder(OrderRequest $request)
	{
		$order = new Orders();
		$order->member_id = Auth::guard('member')->user()->id;
		$order->user_id = null;
		$order->name = Request::input('txtHoten');
		$order->address = Request::input('txtDiachi');
		$order->phone = Request::input('txtSdt');
		$order->email = Request::input('txtEmail');
		$datetime = new DateTime();
		$order->date = $datetime->format('Y-m-d H:i:s');
		$order->note = Request::input('txtGhichu');
		$order->status = 0;
		$order->save();
		
		//update Members and auth
		$members = Auth::guard('member')->user();
		if($members->name == '') {
			$members->name = $order->name;
			Auth::guard('member')->user()->name = $order->name;
		}
		if($members->address == '') {
			$members->address = $order->address;
			Auth::guard('member')->user()->address = $order->address;
		}
		if($members->phone == 0) {
			$members->phone = $order->phone;
			Auth::guard('member')->user()->phone = $order->phone;
		}
		if($members->email == '') {
			$members->email = $order->email;
			Auth::guard('member')->user()->email = $order->email;
		}
		$members->save();
		
		//$this->refreshAuthMember($members->id);
		
		//Auth::guard('member')->setUser($members);
		//end update Members auth
		$oid = $order->id;
		$cart = Cart::content();
		foreach($cart as $item) {
			$orderdetail = new OrderDetails();
			$orderdetail->order_id = $oid;
			$orderdetail->product_id = $item->id;
			$orderdetail->qty = $item->qty;
			$orderdetail->price = $item->price;
			$orderdetail->save();
		}
		Cart::destroy();
		$thanhtoan = Request::input('thanhtoan');
		//fb notification
		if(isset($members->facebook_id))
			sentFBNotification($members->facebook_id, '', 'Đặt hàng thành công tại SHOP !');

		return redirect()->route('getCheckout', $oid)->with(['flash_message' => 'order', 'checkout' =>$thanhtoan]);
	}
	
	public function getMemberLogin()
	{
		$topMenu = $this->topMenu;
		$mainMenu = $this->mainMenu;
		$dmMenu = $this->dmMenu;
		$option = $this->option;
		$countCart = $this->countCart;
		return view('home.login', compact( 'countCart', 'option', 'topMenu', 'mainMenu', 'dmMenu'));
	
	}
	
	public function postMemberLogin(Request $request)
	{	
		if(Request::input('check') == 0)  {
			//register
			return redirect()->route('getMemberRegister');
			
		} else {
		
			//login
			$email = Request::input('txtEmail'); 
			$password = Request::input('txtPass'); 
			$mb = array(
				'email' => $email, 
				'password' => $password
			);
			$authMember = Auth::guard('member')->attempt($mb);
			//check login
			if($authMember) {
				if(Session::has('redirectLogin')) {
					return redirect()->route(Session::get('redirectLogin'));
				}
				return redirect()->route('home');
				
			} 
			else return redirect()->back();
		}
	}
	
	public function getMemberRegister() {
		$topMenu = $this->topMenu;
		$mainMenu = $this->mainMenu;
		$dmMenu = $this->dmMenu;
		$option = $this->option;
		$countCart = $this->countCart;
		return view('home.register', compact('countCart', 'option', 'topMenu', 'mainMenu', 'dmMenu'));
	}
	
	public function postMemberRegister(Request $request) {
		$id = DB::table('members')->insertGetId([
				// 'name' => $member->name,
				// 'facebook_id' => $member->id,
				// 'email' => $member->email,
				// 'birthday' =>  date( 'Y-m-d', strtotime($member->birthday)), 
				// 'gender' => $member->gender,
				// 'status' => 1,
			]
		);
        // Members::find($id)->toArray();
		return redirect()->back();
	}
	
	public function getMember()
	{ 
		if (Auth::guard('member')->check()) {
			echo 'ok';
		} else {
			echo 'else';
		}
	}


	public function getMemberLogout()
	{
		Auth::guard('member')->logout(); 
		return redirect()->route('home');
	}
	
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }
	
    public function handleProviderCallback()
    {
        try {
            $member  = Socialite::driver('facebook')->user();
        } catch (Exception $e) {
            return redirect('/');
        }
		$authMember = $this->findOrCreateMember($member);
		//login
		Auth::guard('member')->loginUsingId($authMember->id);
		//redirect
		if(Session::has('redirectLogin')) {
			return redirect()->route(Session::get('redirectLogin'));
		}
		return redirect()->route('home');
    }

    private function findOrCreateMember($member)
    {
        $authMember = Members::where('facebook_id', $member->id)->first();
		
        if ($authMember){
            return $authMember;
        }
		else {
			if(isset($member->email)){ 
				$email = $member->email;
			} else $email = '';
			
			if(isset($member->birthday)){ 
				$birthday = date( 'Y-m-d', strtotime($member->birthday));
			} else $birthday = '';
			
			$id = DB::table('members')->insertGetId([
					'name' => $member->name,
					'facebook_id' => $member->id,
					'email' => $email,
					'birthday' =>  $birthday, 
					'gender' => $member->gender,
					'status' => 1,
				]
			);
			//fb
			sentFBNotification($member->id, '', 'Đăng ký tài khoản thành công');
			return Members::where('id', $id)->first();
		}
    }
	//sent Facebook Notification
	

	public function getCheckout($id) {
		$topMenu = $this->topMenu;
		$mainMenu = $this->mainMenu;
		$dmMenu = $this->dmMenu;
		$option = $this->option;
		$countCart = $this->countCart;
		$order = Orders::where('id', $id)->first();
		$orderdetail = OrderDetails::where('order_id', $id)->get()->toArray();
		return view('home.checkout', compact('order', 'orderdetail', 'countCart', 'option', 'topMenu', 'mainMenu', 'dmMenu'));
		
	}
	
	

	public function getGioiThieu() {
		$topMenu = $this->topMenu;
		$mainMenu = $this->mainMenu;
		$dmMenu = $this->dmMenu;
		$option = $this->option;
		$countCart = $this->countCart;
		return view('home.gioithieu', compact('countCart', 'option', 'topMenu', 'mainMenu', 'dmMenu'));
		
	}
	
	public function getLienHe() {
		$topMenu = $this->topMenu;
		$mainMenu = $this->mainMenu;
		$dmMenu = $this->dmMenu;
		$option = $this->option;
		$countCart = $this->countCart;
		return view('home.lienhe', compact('countCart', 'option', 'topMenu', 'mainMenu', 'dmMenu'));
		
	}	

	
	public function postLienHe(Request $request) {
	
		$validator = Validator::make(Request::all(), [
            'captcha' => 'required|captcha'
        ]);

        if ($validator->fails()) {
        	return redirect()->back()->with(['flash_message' => 'Sai captcha! Vui lòng nhập lại!'])->withInput();
        }

        else {
			$contact = new Contacts();
			$contact->name = Request::input('txtHoten'); 
			$contact->email = Request::input('txtEmail'); 
			$contact->phone = Request::input('txtSdt'); 
			$contact->content = Request::input('txtNoiDung'); 
			$contact->save();
			return redirect()->back()->with(['flash_message' => 'Gửi thành công ! Cảm ơn bạn đã liên hệ với chúng tôi!']);
		}
	}

	public function getTinTuc()
	{
		$topMenu = $this->topMenu;
		$mainMenu = $this->mainMenu;
		$dmMenu = $this->dmMenu;
		$option = $this->option;
		$countCart = $this->countCart;
		$sidebar = Products::Select()->get();
		$data = News::Select()->orderBy('id','DESC')->paginate(8);
		return view('home.tintuc', compact('data', 'sidebar', 'countCart', 'option', 'topMenu', 'mainMenu', 'dmMenu'));
	}

	public function getTinTucDetail($alias, $id='')
    {
		$topMenu = $this->topMenu;
		$mainMenu = $this->mainMenu;
		$dmMenu = $this->dmMenu;
		$option = $this->option;
		$countCart = $this->countCart;
		//
		$n = DB::table('news')->select('id')->where('alias', $alias)->first();
		if(isset($n)) $ids = $n->id;
		else $ids = $id;
		//
		$sidebar = Products::Select()->get();
		$new  = DB::table('news')->where('id', $ids)->first();
		//get images
		return view('home.newdetail', compact('countCart', 'option', 'new', 'sidebar', 'topMenu', 'mainMenu', 'dmMenu'));
    }


	public function getKhuyenMai()
	{
		$topMenu = $this->topMenu;
		$mainMenu = $this->mainMenu;
		$dmMenu = $this->dmMenu;
		$option = $this->option;
		$countCart = $this->countCart;
		//khuyen mai if exit price khuyen mai
		$data = Products::Select()->whereNotNull('price_sale')->orderBy('id','DESC')->paginate(8);
		$sidebar = Products::Select()->get();

		return view('home.khuyenmai', compact('countCart', 'option', 'topMenu', 'mainMenu', 'dmMenu', 'data', 'sidebar'));
    }
}
