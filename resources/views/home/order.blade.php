@extends('home.master')
@section('title')Đặt hàng tại {!!getOption('sitename')!!} @stop
@section('description'){!!getOption('description')!!}@stop
@section('image'){!!getOption('image')!!}@stop
@section('content')
<link rel="stylesheet" type="text/css" href="{{url('public/home/css/order.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('public/home/css/form.css')}}" />

<div id="wrap-order" class="full arial" style="height: 500px;">
    <h2 class="title">Đặt hàng tại {!!getOption('sitename')!!}</h2>
    {{--<p class="updatecart pointer button-view-cart">Xem giỏ hàng của bạn: 
		<img alt="Xem giỏ hàng của bạn" src="{{url('public/home/images/cart.jpg')}}" />
	</p>--}}
	<br />
	
	
	<div class="login floatl">
		<p class="updatecart center">Vui lòng đăng nhập hoặc đăng ký</p>
		<form class="login-container">
			<script>
				function checkRadio() {
					if($("input:radio[name='check'][value=1]").is(":checked")) { 
						$("#txtPass").removeAttr('disabled');
						$("#txtPass").css('background', '#fff');
					} 
					else {
						$("#txtPass").attr('disabled', 'disabled');
						$("#txtPass").css('background', '#DEDEDE');
					}
				}
				//disabled style="background: "
			</script>
			
			<p><input type="email" placeholder="Email"></p>
			<p><input onchange="checkRadio()" type="radio" checked name="check" value="1" id="radio1"><label for="radio1" class="pointer"> Vâng, Mật khẩu của tôi là:</label></p>
			<p><input onchange="checkRadio()"  type="radio" name="check" id="radio2" value="0"><label for="radio2" class="pointer"> Không, Tôi chưa có tài khoản!</label></p>
			<p><input type="password" id="txtPass" placeholder="Mật khẩu"></p>
			<p><input type="submit" value="Đăng nhập"></p>
			
		</form>
	</div>
	
	<div class="floatr" style="margin: 20px 20px;">
		<p class="updatecart center" style="top: -23px; position: relative;">Hoặc đăng nhập, đăng ký bằng: </p>
		<a href="{{url('facebook/callback')}}"><img style="margin: 20px 20px;" width="450" src="{{url('public/home/images/login_fb.png')}}" /></a>
		<br />
		<img style="margin: 20px 20px;" width="450" src="{{url('public/home/images/login_g+.png')}}" />
	</div>
</div>
    
</div>


@endsection