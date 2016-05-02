<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use File;
use App\Products;
use App\ProductImages;
use App\ProductOptions;
use Auth;
class ProductController extends Controller
{
    public function getAdd() {
		return view('admin.products.add');
    }

    public function postAdd(ProductRequest $request) {
		$product = new Products();
		$product->cat_id = $request->sltDanhmuc;
		$product->user_id = Auth::user()->id;
		$product->name = $request->txtTen;
		$product->alias = $request->txtAlias;
		$product->images = $request->txtImage;
		$product->content = $request->txtNoiDung;
		$product->price = $request->txtDongia;
		//$product->qty = $request->txtSoluong;
		if ($request->txtGiakm) {
			$product->price_sale = $request->txtGiakm;
		} 
		$product->keywords = $request->txtTukhoa;
		$product->description = $request->txtMota;
		$product->status = $request->txtTrangthai;
		$product->save();
		$pid = $product->id;
		foreach($request->txtAnhSP as $txtAnh) {
			if(isset($txtAnh) && $txtAnh !='' ) {
				$productimage = new ProductImages();
				$productimage->product_id = $pid;
				$productimage->image = $txtAnh;
				$productimage->save();
			}
		}
		if(isset($request->name) && isset($request->value)) {
			$name = array();
			$value = array();
			$key = 0;
			foreach($request->name as $key => $n) {
					$name[$key]  = $n;
			}
			foreach($request->value as $key => $v) {
					$value[$key]  = $v;
					$key = $key;
			}
			for($i = 0; $i <= $key; $i++) {
				$productoption = new ProductOptions();
				$productoption->product_id = $pid;
				$productoption->name = $name[$i];
				$productoption->value = $value[$i];
				$productoption->save();
			}
		}
		return redirect()->route('admin.products.getList')->with(['flash_message'=>'Thêm thành công', 'flash_level'=>'alert-info alert-dismissable']);
    

    }
	
	public function getList() {
		$data  = Products::Select()->orderBy('id','DESC')->get()->toArray();
		return view('admin.products.list', compact('data'));
    }
	
	public function getDelete($id)
   	{
		$pimages = Products::find($id)->pimages->toArray();
		foreach($pimages as $pimage) {
			$img =  ltrim($pimage['image'], url('').'/');
			File::delete($img);
		}
		$product = Products::find($id);
		$pimg =  ltrim($product['images'], url('').'/');
		File::delete($pimg);
		$product->delete($id);
		return redirect()->route('admin.products.getList')->with(['flash_message'=>'Xóa thành công', 'flash_level'=>'alert-success alert-dismissable']);
		
   	}
	
	public function postAction(Request $request)
   	{
		$action = $request->action;
		if(!is_array($request->cbitem))
			return redirect()->route('admin.products.getList')->with(['flash_message'=>'Chưa chọn sản phẩm cần thao tác', 'flash_level'=>'alert-info alert-dismissable']);
		else if($action == '')
			return redirect()->route('admin.products.getList')->with(['flash_message'=>'Chưa chọn thao tác', 'flash_level'=>'alert-info alert-dismissable']);
		else {
			if($action == 'delete') {
				foreach($request->cbitem as $id) 
					$this->getDelete($id);
				return redirect()->route('admin.products.getList')->with(['flash_message'=>'Xóa thành công', 'flash_level'=>'alert-success alert-dismissable']);
			}
		} 
		return redirect()->route('admin.products.getList')->with(['flash_message'=>'Có lỗi xảy ra', 'flash_level'=>'alert-info alert-dismissable']);
		
	}
	
	public function getEdit($id)
   	{
   		$product  = Products::findOrFail($id)->toArray();
		$images = Products::find($id)->pimages->toArray();
    	return view('admin.products.edit',compact('product', 'images'));
   	}
	
   	public function postEdit($id, Request $request)
   	{
		$product = Products::find($id);
		$product->cat_id = $request->input('sltDanhmuc'); 
		$product->user_id = 1;
		$product->name = $request->input('txtTen');
		$product->alias = $request->input('txtAlias'); 
		$product->images = $request->input('txtImage'); 
		$product->content = $request->input('txtNoiDung'); 
		$product->price = $request->input('txtDongia'); 
		//$product->qty = $request->input('txtSoluong'); 
		$product->keywords = $request->input('txtTukhoa'); 
		$product->description = $request->input('txtMota'); 
		$product->status = $request->input('txtTrangthai'); 
		$product->save();
		//update ảnh chưa xử lý
		foreach($request->txtAnhSP as $txtAnh) {
			if(isset($txtAnh) && $txtAnh !='' ) {
				$productimage = new ProductImages();
				$productimage->product_id = $id;
				$productimage->image = $txtAnh;
				$productimage->save();
			}
		}
        return redirect()->route('admin.products.getList')->with(['flash_message'=>'Sửa thành công', 'flash_level'=>'alert-info alert-dismissable']);
   	}
	
	// public function deleteImage($id)
   	// {
		// if(Request::ajax()) {
			// $idImg = (int)Request::get("id");
			// $image = ProductImages::find(idImg);
			// if(!empty($image)) {
				// $img = $image->images;
				// if(File::exits($img)) {
					// File::delete($img);
				// }
				// $image->delete();
			// }
			// return 'ok';
		// }

   	// }
}
