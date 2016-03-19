@extends('home.master')
@section('title')Đặt hàng tại {!!getOption('sitename')!!} @stop
@section('description'){!!getOption('description')!!}@stop
@section('image'){!!getOption('image')!!}@stop
@section('content')
<link rel="stylesheet" type="text/css" href="{{url('public/home/css/order.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('public/home/css/form.css')}}" />

<div id="wrap-order" class="full arial" style="height: 500px;">
    <h2 class="title">Đăng ký tài khoản </h2>
	<br />
	<div class="center">Đang cập nhật </div>
	{{--
	<div class="login center">
		<p class="updatecart center">Vui lòng đăng nhập hoặc đăng ký</p>
		<form class="login-container">
			<script>
				function checkRadio() {
					if($("input:radio[name='check'][value=1]").is(":checked")) { 
						$("#txtPass").removeAttr('disabled');
						$("#txtPass").css('background', '#fff');
						$("#button").val('Đăng nhập');
					} 
					else {
						$("#txtPass").attr('disabled', 'disabled');
						$("#txtPass").css('background', '#DEDEDE');
						$("#button").val('Đăng ký');
						
					}
				}
				//disabled style="background: "
			</script>
			
			<p><input type="email" placeholder="Email"></p>
			<p><input onchange="checkRadio()" type="radio" checked name="check" value="1" id="radio1"><label for="radio1" class="pointer"> Vâng, Mật khẩu của tôi là:</label></p>
			<p><input onchange="checkRadio()"  type="radio" name="check" id="radio2" value="0"><label for="radio2" class="pointer"> Không, Tôi chưa có tài khoản!</label></p>
			<p><input type="password" id="txtPass" placeholder="Mật khẩu"></p>
			<p><input id="button" type="submit" value="Đăng nhập"></p>
			
		</form>
	</div>
	--}}
	
</div>
    
</div>


@endsection