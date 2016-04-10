@extends('home.master')
@section('title'){!! $product->name !!}@stop
@section('description'){!! $product->description !!}@stop
@section('image'){!! $product->images !!}@stop
@section('content')

<link rel="stylesheet" type="text/css" href="{{ url('public/home/css/hide-galery.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ url('public/home/css/single.css')}}" />
<div class="clear"></div>
<div id="wrap-main-galery" class="wrap-full">
<div id="wrap-breadcrumb" class="full regular-font uppercase">
	<div id="breadcrumb">
		<a title="Trang chủ" href="{{ url('') }}">Trang chủ</a> / 
		<a title="{{getCatName($product->cat_id )}}" href="{{url('')}}/category/{{getCatAlias($product->cat_id )}}_{!! $product->cat_id !!}/">{{getCatName($product->cat_id )}}</a> / 
		<div class="wrap-title"><h4 class="title">{!! $product->name !!}</h4>
		</div>
	</div>	
</div>

<div class="clear"></div>
<div id="single-content-1" class="full arial">
    <link rel="stylesheet" href="{{ url('public/home/css/StartSlider.css')}}" />
    <div id="product-images" class="floatl">
        <div id="startslider-small" style="background:url({!! $pimages[0] !!})">
			<div id="startslider-selected"></div>
		</div>
        <div id="startslider-big" style="background-size: 1350px;background-image:url({!! $pimages[0] !!})"></div>
        <span class="pointer" id="left-arrow"></span>
        <span class="pointer" id="right-arrow"></span>
        <div id="wrap-other-images">
		
            <div id="other-images" left="0">
				@foreach ($pimages as $img)
					<img src="{!! $img !!}" class="pointer" />
				@endforeach
			</div>
        </div>
    </div>
    
    <div class="info floatr">
        <header>
            <h1 class="title">{!! $product->name !!}</h1>
            <div class="analytics"><span class="update">Cập nhật : {!! date('d/m/Y',strtotime($product->updated_at)) !!}</span>
            <div class="floatr" id="single-share">
					<!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style ">
					<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
					<a class="addthis_button_tweet"></a>
					<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
						
                </div>
                <script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
                <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50b24e727b4a1993"></script>
                <!-- AddThis Button END -->
            </div>
            </div>
            
        </header>
        <div class="content">
            
            <div class="col1 floatl">
                <ul class="description">
					@foreach ($poptions as $pop)
					<li>{!! $pop['name']!!}: {!! $pop['value'] !!}</li>
					@endforeach
				</ul>
                <div class="col11 floatl" style="margin-top: 10px;">
                    <p class="price">
						Giá bán : <span>{!! number_format($product->price) !!} VNĐ</span> 
						@if(isset($product->price_sale))
						<s style="font-size: 13px;color: rgba(43, 43, 43, 0.72);  font-weight: bold;">{!! number_format($product->price_sale) !!} VNĐ</s>
						@endif
					</p>

					
                </div>
				
                <div class="col12 floatr" style="margin-top: 4px;">
					<div class="buy floatl">
						<img pid="{!! $product->id !!}" src="{{ url('public/home/images/single-buynow.png')}}"  class="vmz-add-to-cart pointer" />
                    </div>
                </div>
                <div class="info-to-buy">
                    <div class="title">Chính sách mua hàng:</div>			
					<div class="textwidget" style="font-size: 13px;">
						<li>Giá bán đã bao gồm VAT</li>
						<li>Bảo hành từ 12 tháng</li>
						<li>Giao hàng toàn quốc</li>
						<li>Nhận tiền sau khi giao hàng</li>
						<li>Hỗ trợ 24/24 kể cả ngày nghỉ</li>
						<li> Giảm giá 30% khi mua phụ kiện</li>
					</div>
		        </div>
            </div>
			
            <div class="col2 floatr">
				<div id="wrap-" class="support-online-1 box">
            	    <div class="content">
            		    <div class="box">  
								<div class="title"><h3>Tư vấn mua hàng</h3></div>	
									<table border="0">
										<tbody><tr>
											<td>Điện thoại:
											</td>
											<td class="row2"> <span class="phone-number"><span class="phone">0210.999.999</span></span>
											</td>
										</tr>
										
										<tr>
											<td>Skype: 
											</td>
											<td><a class="skype" href="skype:bmc?chat">
											<img src="http://binhminhcomputer.com/images/skype.png" alt="">
											</a> 
											</td>
										</tr>
									</tbody></table>
									
									<br><br><div class="clear"></div>
									
									<div class="title"><h3>Hỗ trợ thanh toán</h3></div>	
									<table border="0">
										<tbody><tr>
											<td>Điện thoại:
											</td>
											<td class="row2"> <span class="phone-number"><span class="phone">0210.999.999</span></span>
											</td>
										</tr>
										<tr>
											<td>Skype: 
											</td>
											<td><a class="skype" href="skype:bmc?chat">
											<img src="http://binhminhcomputer.com/images/skype.png" alt="">
											</a> 
											</td>
										</tr>
									</tbody></table>
						</div>     
								<div class="clear"></div>
								
						</div>
				</div>
			</div>
        </div>
    </div>
    <div class="clear"></div> 
</div>

<div id="single-content-2" class="full arial">
    <div class="col1 floatl">
        <ul class="nav">
            <li class="tab active"  id="detail-info">Thông tin sản phẩm</li>
            <li  class="tab" id="review">Nhận xét</li>
            <div class="clear"></div>
        </ul>
        
        <div id="content-detail-info" class="content">
		{!! $product->content !!}
        </div>
        
        <div id="content-review" class="content">
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5&appId=1131330883545257";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			<?php
				$url = Request::url();
			?>
			<div class="fb-comments" data-href="<?=$url?>" data-width="710" data-numposts="5"></div>
		</div>
    </div>
    <aside class="floatr" id="relative">
		<h3 class="title">Sản phẩm liên quan</h3> 
		<div style="padding: 10px;">
			@foreach (getProductRelax($product->cat_id) as $relax)
				<div class="box">
					<div class="floatl wrap-image">
						<a title="{!!$relax['name'] !!}" href="{{url('/')}}/{!!$relax['alias']!!}_{!!$relax['id']!!}.html">
							<img src="{!!$relax['images'] !!}" alt="{!!$relax['name'] !!}" width="80" />
						</a>
					</div>
					<div class="info">
						<h4 class="product-name"><a title="{!!$relax['name'] !!}" href="{{url('/')}}/{!!$relax['alias']!!}_{!!$relax['id']!!}.html">{!!$relax['name'] !!}</a></h4><br />
						<p class="price">Giá : {!! number_format($relax['price']) !!} VNĐ</p>
					</div>
					<div class="clear"></div>
				</div>
			@endforeach
        </div>
    </aside>
</div>
<div class="clear"></div>
@endsection