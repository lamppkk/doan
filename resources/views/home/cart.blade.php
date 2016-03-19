<div class="reset-this">
	@if(Request::url() == 'http://laravel.dev/order')
	<script>
		$("#img-close-cart").click( function() {
			location.reload();
		});
	</script>
	@endif
	<img title="Close" id="img-close-cart" class="pointer" src="{{ url('public/home/images/close_cart.png')}}" />
	<div id="cart-wrap" class="main-width main arial">
		<header>Giỏ hàng của bạn</header>
			@if (count($content) > 0)
			<div id="cart-content">
				<div id="cart-title">
					<div class="floatleft image">Hình ảnh</div>
					<div class="floatleft item">Sản phẩm</div>
					<div class="floatleft price">Ðơn giá</div>
					<div class="floatleft num">Số lượng</div>
					<div class="floatleft total-price">Tổng</div>
					<div class="floatleft action">Thao tác</div>
				 
				</div>
				<div id="cart-body">
					@foreach($content as $item)
					<form name="cart-{!!$item['rowid']!!}">
						<input type="hidden" value="{!! csrf_token() !!}" name="_token"/>
						<div class="box" style="float: none; border-bottom: 1px solid silver;">
							<div class="floatleft image">
								<img alt="{!!$item['name']!!}" src="{!!$item['options']['image']!!}" />

							</div>
							
							<div class="floatleft item">
								<span style="top: 50px; position: relative;">
									{!!$item['name']!!}
								</span>
							</div>
							
							<div class="floatleft price">
								<span style="top: 50px; position: relative;">
									{!!number_format($item['price'])!!} VNĐ
								</span>
							</div>
							
							<div class="floatleft num">
								<span style="top: 50px; position: relative;">
									<input maxlength="5" onkeyup="valid(this,'numbers')" onblur="valid(this,'numbers')" name="qty" type="text" value="{!!$item['qty']!!}" style="font-weight: bold; width: 30px; text-align: center"/>
								</span>
							</div>
							
							<div class="floatleft total-price">
								<span style="top: 50px; position: relative;">
									{!!number_format($item['price']*$item['qty'])!!} VNĐ    	
								</span>
							</div>
							
							<div class="floatleft action" style="top: 10px; position: relative;">
								<div style="padding: 10px; border-bottom: 1px solid #C0C0C0;">
									<div rowid="{!!$item['rowid']!!}" class="pointer vmz-update-item" >
									<img alt="cap nhat" src="{{url('public/home/images/save.png')}}" />
									<br />
									Cập nhật
									</div>
								</div>
								<div style="padding: 10px;">
									<div rowid="{!!$item['rowid']!!}" class="pointer vmz-delete-item">
										<img alt="xoa" src="{{url('public/home/images/remove.png')}}" />
										<br />
										Xóa
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>	
					</form>
					@endforeach
					
				</div>
				<p style="font-weight: bold;float: right;margin: 0;padding: 10px 0;">
					Tổng : 
					<span style="font-size:15px;font-weight: bold; color:red;margin-right:200px">
						{!! number_format($total) !!} VNĐ
					</span>
					<span id="remove-all-product" class="pointer"  style="padding-right: 20px">
						<img   src="{{url('public/home/images/remove.png')}}" />
						&nbsp;&nbsp;Xóa tất cả
					</span>
				</p>
				<p id="cart-handles">
					<span class="continue cart-button floatl pointer" id="vmz-home">Tiếp tục mua sắm</span>
					<a class="cursor register floatr" href="{{url('order')}}">Đặt hàng</a>
				</p>
			</div>	
			@else 
			<div id="cart-content">
				 <p style="line-height:40px;font-size: 18px;">Bạn không có sản phẩm nào trong giỏ hàng</p>
				 <p style="text-align:center"><img src="{{url('public/home/images/empty_cat.jpg')}}" /></p>
			</div>
			<div style="padding: 30px;"></div>
			<div id="cart-handles">	
				<span class="continue cart-button floatl pointer" id="vmz-home">Tiếp tục mua sắm</span>
			</div>		
			@endif
			
	   <div class="clear"></div>
	</div>
</div>
