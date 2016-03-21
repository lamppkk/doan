@extends('home.master')
@section('title'){!!getOption('title')!!}@stop
@section('description'){!!getOption('description')!!}@stop
@section('image'){!!getOption('image')!!}@stop
@section('home')
<link rel="stylesheet" href="{{ url('public/home/css/flexslider.css')}}" type="text/css" media="screen" />
<script defer src="{{ url('public/home/js/jquery.flexslider.js')}}"></script>
  <script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

<div class="flexslider" style="width: 480px;
    height: 387px;
    float: left;
    margin: 15px 0px 0px 247px;
    overflow: hidden;">
  <ul class="slides">
		<li>
			<img src="/images/1.jpg" />
		</li>
		<li>
			<img src="/images/2.jpg" />
		</li>
		<li>
			<img src="/images/3.jpg" />
		</li>
  </ul>
</div>
           
<div id="banner-home" class="floatr">
	<div class="wrap-ad-with-link">
		<div class="ad-with-link">
			<a href="">
				<img src="/images/2.jpg" />
			</a>
		</div>
	</div>
	<div class="wrap-ad-with-link">
		<div class="ad-with-link">
			<a href="">
				<img src="/images/1.jpg" />
			</a>
		</div>
	</div>
</div>
@endsection

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('public/home/css/home-category.css')}}" />
<style>
    .wrap-category-galery .content {
        display:block;
    }
</style>

<div class="clear"></div>
<div class="full" id="home-category">
    <article class="wrap-home-category">
		<header class="title">
            <h3 class="title bold-font">Sản phẩm mới</h3>                    
			<a href="" class="regular-font view-all">Xem thêm »</a>
        </header>
        <section class="home-category">
		@if (count($data) > 0)
			@foreach ($data as $dt)
				
				<div class="box floatl">
					<p class="center">
						<a href="{{url('/')}}/{!!$dt['alias']!!}_{!!$dt['id']!!}.html">
						<img src="{!!$dt['images']!!}" alt="" width="190" height="150" />
						</a>
					</p>
					<div class="info">
						<p class="first-info">
							<a href="{{url('/')}}/{!!$dt['alias']!!}_{!!$dt['id']!!}.html" title="{!!$dt['name']!!}" class="regular-font product-title">{!!$dt['name']!!}</a>
							<a href="{{url('/')}}/{!!$dt['alias']!!}_{!!$dt['id']!!}.html" class="click-link"></a>
							<div class="center">
								<span class="price bold-font">{!!number_format($dt['price'])!!} VNĐ</span>
							</div>
						</p>
						<div class="regular-font more-info">
						<div>
							<p  class="description" >
								{!!  getOP($dt['id']) !!}
							</p>
						</div>	
							<span pid="{!!$dt['id']!!}" class="vmz-add-to-cart pointer"></span>                                
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
</div>
@endsection
