<?php

namespace App\Http\Controllers;

use App\Http\Requests;
//use Illuminate\Http\Request;
//use Illuminate\Http\Request;
use Request;
use Storage;
use App\Products;
use App\Categorys;
use App\Options;
use App\ProductOptions;
use App\Members;
use DB;
use Cart;
use Auth;
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
		return view('home.category', compact('countCart', 'option', 'topMenu', 'mainMenu', 'dmMenu', 'data', 'idcat'));
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
	
	public function getOrder()
	{
		$topMenu = $this->topMenu;
		$mainMenu = $this->mainMenu;
		$dmMenu = $this->dmMenu;
		$option = $this->option;
		$countCart = $this->countCart;
		return view('home.order', compact('countCart', 'option', 'topMenu', 'mainMenu', 'dmMenu'));
	}
	
	
	
	
}
