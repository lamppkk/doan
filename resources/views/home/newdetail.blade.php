@extends('home.master')
@section('title') {!!$new->title!!} @stop
@section('description') {!!$new->description!!} @stop
@section('image'){!!$new->images!!}@stop
@section('content')

<link rel="stylesheet" type="text/css" href="{{ url('public/home/css/home-category.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ url('public/home/css/category.css')}}" />
<style type="text/css" media="screen">
	.newdetail{
		padding: 15px; 
		border: 1px solid rgba(0, 0, 0, 0.15);    
		font-size: 14px;
		color: rgb(64, 64, 64);
		line-height: 25px;
		-moz-box-shadow: 0px 0px 5px rgba(50, 50, 50, 0.5);
		-webkit-box-shadow: 0px 0px 5px rgba(50, 50, 50, 0.5);
		-moz-box-shadow: 0px 0px 5px rgba(50, 50, 50, 0.5);
		box-shadow: 0px 0px 5px rgba(50, 50, 50, 0.5);
	}
</style>
<div class="clear"></div>
<div id="wrap-main-galery" class="wrap-full">
	<div id="wrap-breadcrumb" class="full regular-font uppercase">
		<div id="breadcrumb">
			<a title="Trang chủ" href="{{ url('') }}">Trang chủ</a> / 
			<h1>Tin tức</h1>
		</div>	
	</div>
	<div class="clear"></div>
	<div id="middle" class="full">
		<aside class="arial floatl" id="cat-sidebar">
			
			<h2 class="title">Sản phẩm bán chạy </h2>
			@foreach ($sidebar as $sb)
			<div class="box">
				<div class="floatl wrap-image">
					<a title="{!!$sb->name!!}" href="{{url('/')}}/{!!$sb['alias']!!}_{!!$sb['id']!!}.html">
						<img src="{!!$sb->images!!}" alt="{!!$sb->name!!}" width="80">
					</a>
				</div>
				<div class="info">
					<h4 class="product-name"><a title="{!!$sb->name!!}" href="{{url('/')}}/{!!$sb['alias']!!}_{!!$sb['id']!!}.html">{!!$sb->name!!}</a></h4>
					<br />
					<p class="price">Giá: {!!number_format($sb->price)!!} VNĐ</p>
				</div>
				<div class="clear"></div>
			</div>
			@endforeach
			<img class="floatl" src="" width="230" height="230">
		</aside>  
		
		<div class="right floatr">
			<!-- <div class="main-thumbnail floatr">
				<img class="floatl" src="{{url('upload/images/category.jpg')}}">
            </div> -->
			<!-- <div class="clear"></div> -->
			<div id="products" class="home-category">
				<article class="wrap-home-category">
					<header class="title" style="max-width: 719px;">
						<h3 class="title bold-font" style="max-width: 719px;"> {!!$new->title!!} </h3>                    
					</header>
					<section class="home-category arial newdetail">
						{!!$new->content!!}
					</section>
					<div class="clear"></div>
				</article>
				
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>
@endsection