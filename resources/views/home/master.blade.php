<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title') -  {!!getOption('sitename')!!} </title>
	<meta name="description" content="@yield('description')" />
	<!-- seo mxh -->
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="@yield('title')" />
	<meta property="og:site_name" content="{!!getOption('sitename')!!}"/>
	<meta property="og:url" content="{!! Request::url() !!}"/>
	<meta property="og:image" content="@yield('image')"/>
	<meta property="og:description"  content="@yield('description')" />
	<link rel="canonical" href="{!! Request::url() !!}" />
	<!-- icon -->
	<link rel="icon" href="{!!getOption('favicon')!!}" type="image/png" />
	<!-- jQuery -->
    <script src="{{ url('public/home/js/jquery-1.9.1.min.js')}}"></script>
	<script type="text/javascript">
		//get url website in js
		var APP_URL = {!! json_encode(url('/')) !!};
	</script>
    <script src="{{ url('public/home/js/js.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('public/home/style.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ url('public/home/css/css.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ url('public/home/css/search.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/home/css/sidebar-home.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/home/css/hide-galery.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/home/css/cart.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/admin/font-awesome/css/font-awesome.css')}}" />
</head>
<body>
<div id="wrap-top-header" class="wrap-full regular-font">
	<div id="view-cart-content" style="display: none;"></div>
	<div class='opacity pointer'></div>
	<img id="ajax-load-cart" style="" src="{{ url('public/home/images/ajaxLoader.gif')}}" />
    
	<div id="top-header" class="full">
		<div class="floatl box">
			<div class="menu-top-menu-container">
				{!!getMenu($topMenu, 'menu', 'menu-top-menu')!!}
			</div>
		</div>
		<div class="floatl box">
			<div class="textwidget">
				<ul class="phone">
					<li>0917951318</li>
					<li>0912466444</li>
				</ul>
			</div>
		</div>
		<div class="floatl box">			
			<div class="menu-top-menu-container">
				<ul class="menu">	
					<li><a href="/" title="Đăng nhập">Đăng nhập</a></li>
					<li><a href="/" title="Đăng ký">Đăng ký</a></li>
				</ul>
			</div>
		</div>  
        {{--<div id="ad-aside">
            <div id="right-ad" class="ad">
            <img width="140" height="400" alt="" class="attachment-full" style="max-width: 100%;" src="http://banhang.dev/wp-content/uploads/2014/10/floating-supper-8.jpg" />            </div>
            <div id="left-ad" class="ad">
            <img width="140" height="400" alt="" class="attachment-full" style="max-width: 100%;" src="http://banhang.dev/wp-content/uploads/2014/10/exclusive-floating-banner-2.jpg" />            </div>
        </div> --}}
    </div>
    <div class="clear"></div>
</div>

<header id="header" class="wrap-full">
    <div class="full">
    
        <a href="{{url('/')}}" class="floatl">
			<img width="230" height="35" alt="" style="max-width: 100%;" 
			src="{{ url('upload/images/logo.png')}}" />
		</a>
		
        <div class="filter search-box">
            <form method="get" action="/" id="frmsearch">
                {{--<input type="hidden" value=""/>
                <div id="list-galery" class="arial">
                    <input type="text" value="" name="s" class="floatl" placeholder="Nhập tên sản phẩm" />
                    <input type="submit"  class="pointer floatl" value="" />
                    
                </div>--}}
				<select name="category"  class="cate-dropdown hidden-xs">
					<option value="0">Tất cả danh mục </option>
					@foreach (GetCat(0) as $item)
						<option @if (old('sltDanhmuc') == $item['id']) selected @endif value="{{$item['id']}}">{{$item['name']}}</option>
					@endforeach
				</select>
				<input type="text" placeholder="Nhập từ khóa cần tìm..."  maxlength="70" class="" name="key" id="search">
				<input type="submit" class="floatl" value="">	
            </form>
            
        </div>
        <div id="top-cart" class="pointer button-view-cart">
			<i class="fa fa-shopping-cart " style="font-size: 22px;top: 1px; position: relative;right: 2px;"></i>
			<span class="cart color-444444 MyriadPro-Bold uppercase">Giỏ hàng</span>
			<span id="cart-total" style=""> {!! $countCart !!} </span>
		</div>
    
	</div>
    
    
    <div class="clear"></div>
	<div class="wrap-full" id="wrap-home-top"> 
        <div class="full" id="home-top">
            <div id="sidebar" class="floatl">
    			<div class="wrap-category-galery">
					<h2 class="best-title bold-font uppercase color-ffffff">
					<span>Danh mục sản phẩm</span>
					</h2>				
					<div class="content">
						@foreach ($dmMenu as $dm)
							<div class="wrap-box">
								<a title="{!! $dm['name'] !!}" href="{{url('')}}/category/{!! $dm['alias'] !!}_{!! $dm['id'] !!}/" class="color-444444" style="display: block;" >
									<div class="box MyriadPro-Regular">
										<div class="inner-box">
											<h3 class="title">{!! $dm['name'] !!}</h3>
											<p style="white-space: nowrap;">
											<?php
												$des = mb_substr($dm['description'],0,32, "utf-8");
												echo $des.',..';
												
											?>
											</p>
										</div>
									</div>
								</a>
								<div class="destroy-boer" style="top: 6px;"></div>
							</div>
						@endforeach
						
						
					</div>
				</div>
			</div>         
		{!!getMenu($mainMenu)!!}
		<div class="clear"></div>
		@yield('home')
        </div>
    </div>
</header><!-- END #header -->
<div class="clear"></div>

@yield('content')

<div  class="footer-ad full">
	<div class="wrap-ad-with-link">
		<div class="ad-with-link center">
            <img src="http://comparegithosting.com/_media/ads728.png" />
        </div>
	</div>
</div>

<div class="wrap-full regular-font" id="wrap-receive-mail">
    <div id="receive-mail" class="full">
        <div id="slogan" class="floatl">			
			<div class="textwidget">CHÚNG TÔI CAM KẾT LUÔN BÁN HÀNG CHÍNH HÃNG, GIÁ CẢ RẺ NHẤT THỊ TRƯỜNG!</div>
		</div>    
        <div id="social" class="floatr">			
			<div class="textwidget">
				<div class="social-title floatl">Kết nối với chúng tôi : </div>
				<a class="fb" href="#"></a>
				<a class="gp" href="#"></a>
				<a class="tw" href="#"></a>
			</div>
		</div>    
	</div>
    <div class="clear"></div>
</div>

<div id="footer" class="full regular-font">
    <div class="col floatl">
		<div class="wrap-title">
			<h3 class="title regular-font">Footer 1</h3>
		</div>
		<div>
			<ul id="menu-boot-nam" class="menu">
				<li><a href="">Menu</a></li>
				<li><a href="">Menu</a></li>
				<li><a href="">Menu</a></li>
				<li><a href="">Menu</a></li>
			</ul>
		</div>
	</div>
	
	<div class="col floatl">
		<div class="wrap-title">
			<h3 class="title regular-font">Footer 1</h3>
		</div>
		<div>
			<ul id="menu-boot-nam" class="menu">
				<li><a href="">Menu</a></li>
				<li><a href="">Menu</a></li>
				<li><a href="">Menu</a></li>
				<li><a href="">Menu</a></li>
			</ul>
		</div>
	</div>
	
	<div class="col floatl">
		<div class="wrap-title">
			<h3 class="title regular-font">Footer 1</h3>
		</div>
		<div>
			<ul id="menu-boot-nam" class="menu">
				<li><a href="">Menu</a></li>
				<li><a href="">Menu</a></li>
				<li><a href="">Menu</a></li>
				<li><a href="">Menu</a></li>
			</ul>
		</div>
	</div>
	
	<div class="col floatl">
		<div class="wrap-title">
			<h3 class="title regular-font">Footer 1</h3>
		</div>
		<div>
			<ul id="menu-boot-nam" class="menu">
				<li><a href="">Menu</a></li>
				<li><a href="">Menu</a></li>
				<li><a href="">Menu</a></li>
				<li><a href="">Menu</a></li>
			</ul>
		</div>
	</div>
	<div class="clear"></div>
</div>
</body>
</html>