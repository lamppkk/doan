@extends('home.master')
@section('title')Liên hệ với {!!getOption('sitename')!!} @stop
@section('description'){!!getOption('description')!!}@stop
@section('image'){!!getOption('image')!!}@stop
@section('content')

<link rel="stylesheet" type="text/css" href="{{url('public/home/css/form.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('public/home/css/order.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('public/home/css/table.css')}}" />
<style>
	td {
		padding: 5px;
		width: 200px;
	}
</style>

<div id="wrap-order" class="full arial" style="height: 600px;">
    <h2 class="title">Liên hệ với {!!getOption('sitename')!!}</h2>
    
	<br />
	<form method="POST" action="" class="login-container" style="margin-top: -16px">
	{{ csrf_field() }}
		<div style="height: 560px; margin-top: 30px;">
			<div class="login" style="width: 650px; margin: 5px auto;">
				<p class="updatecart center">
					@if (Session::has('flash_message'))
	                	{!! Session::get('flash_message') !!}
	                @else
	                	Vui lòng nhập thông tin liên hệ!
	            	@endif
				</p>

					@if (count($errors) > 0)
						<div style="padding: 5px;color: red;text-align: center;">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<?php if(Auth::guard('member')->check()) $id = Auth::guard('member')->user()->id ?>
					<table>
					<tr>
						<td>Họ tên: </td>
						<td>
							<input name="txtHoten" required  style="width: 450px;" type="text" value="@if (Auth::guard('member')->check()) {!! getMember($id)->name !!} @endif" placeholder="Họ tên">
						</td>
					</tr>
					
					<tr>
						<td>Số điện thoại </td>
						<td>
							<input  name="txtSdt"  required  onkeyup="valid(this,'numbers')" onblur="valid(this,'numbers')" type="text" value="@if(Auth::guard('member')->check())@if(getMember($id)->phone == 0){!!getMember($id)->phone!!}@else 0{!!getMember($id)->phone!!}@endif @endif" placeholder="Số điện thoại">
						</td>
					</tr>
					<tr>
						<td>Email: </td>
						<td><input  name="txtEmail"  required type="email" value="@if (Auth::guard('member')->check()) {!!getMember($id)->email!!}  @endif" placeholder="Email"></td>
					</tr>
					
					<tr>
						<td>Nội dung: </td>
						<td><textarea  name="txtNoiDung"   required type="text" rows="10" placeholder="Nội dung liên hệ"></textarea></td>
					</tr>
					<tr>
						<td>Xác nhận</td>
						<td>
							<?php echo captcha_img();?>
							<input type="text" name="captcha" required style="width: 65%; float: right">
						</td>
					</tr>
					
					<tr>
						<td></td>
						<td>
							<input id="button" type="submit" value="Gửi">
						</td>
					</tr>
					
					</table>
			</div>
		</div>
	</form>
</div>
    
</div>


@endsection