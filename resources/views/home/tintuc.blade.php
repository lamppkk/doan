@extends('home.master')
@section('title', ' Tin tức')
@section('description',  'Tin tức')
@section('image'){!!getOption('image')!!}@stop
@section('content')

<link rel="stylesheet" type="text/css" href="{{ url('public/home/css/home-category.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ url('public/home/css/category.css')}}" />

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
					<a title="{!!$sb->name!!}" href="http://laravel.dev/giay-vai-luoi-nam-simier_10.html">
						<img src="{!!$sb->images!!}" alt="{!!$sb->name!!}" width="80">
					</a>
				</div>
				<div class="info">
					<h4 class="product-name"><a title="{!!$sb->name!!}" href="">{!!$sb->name!!}</a></h4>
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
						<h3 class="title bold-font" style="max-width: 719px;">Tin mới nhất </h3>                    
					</header>
					<section class="home-category">
					@if (count($data) > 0)
						@foreach ($data as $dt)
							
							<div class="box floatl">
								<p class="center">
									<a href="{{url('/')}}/news/{!!$dt['alias']!!}_{!!$dt['id']!!}.html">
									<img src="{!!$dt['images']!!}" alt="" width="190" height="150" />
									</a>
								</p>
								<div class="info">
									<p class="first-info">
										<a href="{{url('/')}}/{!!$dt['alias']!!}_{!!$dt['id']!!}.html" title="{!!$dt['title']!!}" class="regular-font product-title" style="padding: 0px 8px;">{!!$dt['title']!!}</a>
										<a href="{{url('/')}}/{!!$dt['alias']!!}_{!!$dt['id']!!}.html" class="click-link"></a>
										<br />
									</p>
									<div class="regular-font more-info">
									<div>
										<p  class="description" >
											{!! mb_substr($dt['description'], 0,100, "utf-8") !!}, ...
										</p>
									</div>	
										
									</div>
								</div>
					
							</div>  
						@endforeach
					@else 
						<div style="margin: 10px; text-align: center;">Không có sản phẩm nào </div>
					@endif
					</section>
					<div class="clear"></div>
				</article>
				<span class="wp-pagenavi center">
				@if (count($data) > 0)
					@if($data->currentPage() != 1)
						<a class="prev page-numbers" title="Trang {!!$data->currentPage()-1!!}" href="{!!$data->url($data->currentPage()-1)!!}">« Trước </a>  
					@endif
					
					@for($i = 1; $i <= $data->lastPage(); $i = $i+1)
						@if($data->currentPage() == $i) 
							<span class="page-numbers current">{!!$i!!}</span>
						@else 
							<a title="Trang {!!$i!!}" class="page-numbers" href="{!!$data->url($i)!!}">{!!$i!!}</a>
						@endif
					@endfor
					
					@if($data->currentPage() != $data->lastPage())
						<a class="next page-numbers" title="Trang {!!$data->currentPage()+1!!}" href="{!!$data->url($data->currentPage()+1)!!}">Sau »</a>   
					@endif
				@endif
				</span>
	
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>
@endsection