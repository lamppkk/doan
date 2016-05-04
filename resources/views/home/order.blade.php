@extends('home.master')
@section('title')Đặt hàng tại {!!getOption('sitename')!!} @stop
@section('description'){!!getOption('description')!!}@stop
@section('image'){!!getOption('image')!!}@stop
@section('content')

<link rel="stylesheet" type="text/css" href="{{url('public/home/css/form.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('public/home/css/order.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('public/home/css/table.css')}}" />
<style>
	td {
		padding: 5px;
	}
</style>

<div id="wrap-order" class="full arial" style="height: 600px;">
    <h2 class="title">Đặt hàng tại {!!getOption('sitename')!!}</h2>
    
	<br />
	<form method="POST" action="" class="login-container" style="margin-top: -16px">
	{{ csrf_field() }}
		<div style="height: 560px; margin-top: 30px;">
			<div class="login floatl" style="width: 580px;">
				<p class="updatecart center">Vui lòng nhập thông tin giao hàng của quý khách</p>
					
					@if (count($errors) > 0)
						<div style="padding: 5px;color: red;text-align: center;">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<?php $id = Auth::guard('member')->user()->id ?>
					<table>
					<tr>
						<td>Họ tên: </td>
						<td>
							<input name="txtHoten" required  style="width: 450px;" type="text" value="{!! getMember($id)->name !!}" placeholder="Họ tên">
						</td>
					</tr>
					
					<tr>
						<td>Số điện thoại </td>
						<td>
							<input  name="txtSdt"  required  onkeyup="valid(this,'numbers')" onblur="valid(this,'numbers')" type="text" value="@if(getMember($id)->phone == 0){!!getMember($id)->phone!!}@else 0{!!getMember($id)->phone!!} @endif" placeholder="Số điện thoại">
						</td>
					</tr>
					<tr>
						<td>Email: </td>
						<td><input  name="txtEmail"  required type="email" value="{!!getMember($id)->email!!}" placeholder="Email"></td>
					</tr>
					
					<tr>
						<td>Địa chỉ: </td>
						<td><textarea  name="txtDiachi"   required type="text" rows="6" placeholder="Địa chỉ giao hàng">{!!getMember($id)->address !!}</textarea></td>
					</tr>
					<tr>
						<td>Ghi chú: </td>
						<td><textarea  name="txtGhichu"   type="text" rows="3" placeholder="Ghi chú"></textarea></td>
					</tr>
					<tr>
						<td>Hình thức thanh toán: </td>
						<td class="center">
							<input type="radio" checked name="thanhtoan" id="tructiep"> <label for="tructiep" class="pointer">Trực tiếp khi nhận hàng</label>
							<input type="radio"  name="thanhtoan" id="online"> <label for="online" class="pointer">Thanh toán online</label>
						
						</td>
					</tr>
					
					<tr>
						<td></td>
						<td>
							<input id="button" type="submit" value="Tiếp tục">
						</td>
					</tr>
					
					</table>
			</div>
	
			<div class="login floatr" style="width: 370px;">
				<p class="updatecart center">Thông tin sản phẩm </p>
				
						<table style="margin-top: 5px;" class="CSSTableGenerator">
								<tr>
									<td>Sản phẩm
									<td>Số lượng</td>
									<td>Giá</td>
								</tr>
								@foreach ($cartContent as $item)
								<tr>
									<td>{!!$item->name!!}</td>
									<td>{!!$item->qty!!}</td>
									<td>{!!number_format($item->price)!!} VNĐ</td>
								</tr>
								@endforeach
								
								<tr>
									<td colspan="3">
										<p style="font-weight: bold; text-align: center; margin: 0;padding: 10px 0;">
											Tổng tiền : 
											<span style="font-size:15px;font-weight: bold; color:red;">
												{!!number_format(Cart::total())!!} VNĐ
											</span>
										</p>
				
										
									</td>
								</tr>
								
								<tr>
									<td colspan="3">
										
										<p style="text-align: center;  font-size:15px; font-weight: bold; margin-top: -20px; padding: 10px 0;" class="updatecart pointer button-view-cart">Xem và cập nhật giỏ hàng của bạn: 
											<img alt="Xem và cập nhật giỏ hàng của bạn" src="{{url('public/home/images/cart.jpg')}}" />
										</p>
									</td>
								</tr>
						</table>
				
			</div>
		</div>
	</form>
</div>
    
</div>


@endsection