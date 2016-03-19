@extends('home.master')
@section('title')Thông tin đơn đặt hàng tại {!!getOption('sitename')!!} @stop
@section('description'){!!getOption('description')!!}@stop
@section('image'){!!getOption('image')!!}@stop
@section('content')

<link rel="stylesheet" type="text/css" href="{{url('public/home/css/form.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('public/home/css/order.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('public/home/css/table.css')}}" />
<style>
	.checkout td {
		padding: 10px;
		min-width: 155px;

	}
</style>

<div id="wrap-order" class="full arial" style="height: 600px;">
    <h2 class="title">Đặt hàng tại {!!getOption('sitename')!!}</h2>
	<br />
	<form method="POST" action="" class="login-container" style="margin-top: -16px">
	<p id="form_success" class="center">
	@if (Session::has('flash_message'))
		Cảm ơn bạn đã đặt hàng tại {!!getOption('sitename')!!}!
		</br />
		Nhân viên bán hàng của chúng tôi sẽ liên lạc lại với bạn trong thời gian sớm nhất.
	@else 	
		THÔNG TIN ĐƠN ĐẶT HÀNG 
	@endif
	
	</p>
		<div style="height: 525px; margin-top: 20px;">
			<div class="login floatl" style="width: 580px;">
				<p class="updatecart center">Thông tin đơn hàng số {!!$order->id!!} </p>
					<table class="checkout" style=" margin-left: 30px">
					
					<tr>
						<td>Người nhận: </td>
						<td>
							{!!$order->name!!}
						</td>
					</tr>
					
					<tr>
						<td>Số điện thoại: </td>
						<td>
							
							0{!!$order->phone!!}
						</td>
					</tr>
					<tr>
						<td>Email: </td>
						<td>
							{!!$order->email!!}
						</td>
					</tr>
					
					<tr>
						<td>Địa chỉ: </td>
						<td>
							{!!$order->address!!}
						</td>
					</tr>
					<tr>
						<td>Ngày đặt: </td>
						<td>
							{!!date( 'd/m/Y h:i:s A', strtotime($order->date));!!}
						</td>
					</tr>
					
					<tr>
						<td>Ghi chú: </td>
						<td>
							@if(isset($order->note)) {!!$order->note!!} @else Không @endif
						</td>
					</tr>
					<tr>
						<td>Tình trạng: </td>
						<td>
							@if($order->status == 0) Đang xử lý @else Hoàn thành @endif
						</td>
					</tr>
					
					</table>
			</div>
	
			<div class="login floatr" style="width: 370px;">
				<p class="updatecart center">Thông tin sản phẩm: </p>
				
						<table style="margin-top: 13px;" class="CSSTableGenerator">
								<tr>
									<td>Sản phẩm
									<td>Số lượng</td>
									<td>Giá</td>
								</tr>
								<?php 
									$tong = 0;
								?>
								@foreach ($orderdetail as $item)
								<?php $tong+=($item['qty']*$item['price']) ?>
								<tr>
									<td>
									{!!getProName($item['product_id'])!!}
									
									</td>
									<td>{!!$item['qty']!!}</td>
									<td>{!!number_format($item['price'])!!} VNĐ</td>
								</tr>
								@endforeach
								
								<tr>
									<td colspan="3">
										<p style="font-weight: bold; text-align: center; margin: 0;padding: 10px 0;">
											Tổng tiền : 
											<span style="font-size:15px;font-weight: bold; color:red;">
												{!!number_format($tong)!!} VNĐ
											</span>
										</p>
				
										
									</td>
								</tr>
								
						</table>
				
			</div>
			<br />
			<br />
			@if($order->status == 0 )
				<div class="login center" style="margin: 0 auto; width: 370px;  margin-top: 21px;top: 20px;  position: relative;font-size: 30px">
					<input id="button" type="submit" value="THANH TOÁN">
				</div>
			@endif
		</div>
	</form>
</div>
    
</div>


@endsection