<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use App\Http\Requests;
use Request;
use App\Orders;
use App\OrderDetails;
use App\Members;
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

	public function editOrder()
	{
		if(Request::ajax()) {
			$id = Request::get('id');
			$status = Request::get('status');
			$order  = Orders::find($id);
			$order ->status = $status;
			$order->save();
			//get member
			$member = Members::find($order->member_id);
			$msg = '';
			if($order->status == 1) {
				$msg = 'Xác nhận thanh toán đơn hàng số #'.$id;
			} else if($order->status == 2) {
				$msg = 'Đơn hàng số #'.$id. ' của bạn đang được vẩn chuyển';
			} else {
				$msg = 'Xác nhận giao dịch thành công đơn hàng số '.$id;
			} 
			//fb notification
			if(isset($member->facebook_id))
				sentFBNotification($member->facebook_id, '', $msg);
			
		}
	}

	public function deleteOrder()
	{
		if(Request::ajax()) {
			$id = Request::get('id');
			$order  = Orders::find($id);
			$order->delete($id);

			$member = Members::find($order->member_id);
			$msg = 'Xác nhận hủy đơn hàng số #'.$id;
			
			//fb notification
			if(isset($member->facebook_id))
				sentFBNotification($member->facebook_id, '', $msg);
			
			
		}
	}
}

