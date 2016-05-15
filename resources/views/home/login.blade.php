@extends('home.master')
@section('title')Đăng nhập | đăng ký - {!!getOption('sitename')!!} @stop
@section('description'){!!getOption('description')!!}@stop
@section('image'){!!getOption('image')!!}@stop
@section('content')

<link rel="stylesheet" type="text/css" href="{{url('public/home/css/form.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('public/home/css/order.css')}}" />

<div id="wrap-order" class="full arial" style="height: 500px;">
    <h2 class="title">
	@if (Session::has('flash_message'))
		{!! Session::get('flash_message') !!} tại {!!getOption('sitename')!!}
	@else 	
		Đăng nhập hoặc đăng ký
	@endif
	
	</h2>
	<div style="padding: 20px;"></div>
	<div class="login floatl" style="margin-left: 40px;    margin-top: 15px;">
		<p class="updatecart center">Vui lòng đăng nhập hoặc đăng ký</p>
		<form method="POST" action="{!! route('getMemberLogin') !!}" class="login-container">
		<input type="hidden" value="{!! csrf_token() !!}" name="_token"/>
		@if (Session::has('action'))
			<input type="hidden" value="{!! Session::get('action') !!} " name="txtAction"/>
		@endif 		
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
						$("#txtPass").val('');
						$("#button").val('Đăng ký');
						
					}
				}
				//disabled style="background: "
			</script>
			<?php //echo $authMember = Auth::guard('member')->check(); ?>
			<p><input type="email" name="txtEmail" placeholder="Email"></p>
			<p><input onchange="checkRadio()" type="radio" checked name="check" value="1" id="radio1"><label for="radio1" class="pointer"> Vâng, Mật khẩu của tôi là:</label></p>
			<p><input onchange="checkRadio()"  type="radio" name="check" id="radio2" value="0"><label for="radio2" class="pointer"> Không, Tôi chưa có tài khoản!</label></p>
			<p><input type="password" id="txtPass" name="txtPass" placeholder="Mật khẩu"></p>
			<p><input id="button" type="submit" value="Đăng nhập"></p>
			
		</form>
	</div>
	
	<div class="floatr" style="margin: 20px 20px;">
		<p class="updatecart center" style="top: -23px; position: relative;">Hoặc đăng nhập bằng: </p>
		<a href="{{url('facebook')}}"><img style="margin: 20px 20px;" width="400" src="{{url('public/home/images/login_fb.png')}}" /></a>
		<br />
		<img class="pointer"  style="margin: 20px 20px;" width="400" src="{{url('public/home/images/login_g+.png')}}" />
	</div>
</div>
    
</div>


@endsection