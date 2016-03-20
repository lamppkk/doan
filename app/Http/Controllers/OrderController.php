<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Orders;
use App\OrderDetails;
class OrderController extends Controller
{
	public function getList()
	{
		$data  = Orders::Select()->orderBy('id','DESC')->get()->toArray();
		return view('admin.order.list', compact('data'));
	}

	public function getOrderDetail($order_id)
	{
		$orderdetail  = OrderDetails::where('order_id', $order_id)->get()->toArray();
		$order  = Orders::where('id', $order_id)->get()->first();
		return view('admin.order.orderdetail', compact('orderdetail', 'order'));
	}

	public function postAction(Requests $request)
	{
		
	}
	
}

