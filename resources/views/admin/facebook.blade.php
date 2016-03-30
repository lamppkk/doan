@extends('admin.master')
@section('title', 'Gửi thông báo facebook')
@section('content')

<style type="text/css">
	.glyphicon-refresh-animate {
    -animation: spin .7s infinite linear;
    -webkit-animation: spin2 .7s infinite linear;
}

@-webkit-keyframes spin2 {
    from { -webkit-transform: rotate(0deg);}
    to { -webkit-transform: rotate(360deg);}
}

@keyframes spin {
    from { transform: scale(1) rotate(0deg);}
    to { transform: scale(1) rotate(360deg);}
}
</style>
<div class="row">
	<div class="col-lg-12">
		<div class="page-header">
			<h3>
				<ol class="breadcrumb">
					<li>
						<i class="fa fa-home"></i>  <a href="">Home</a>
					</li>
					<li class="active">
						<span class="fa fa-facebook"></span> Gửi thông báo
					</li>
				</ol>
			</h3>
		</div>    
	</div>
</div>
<div style="padding: 5px;"></div>

<div>
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#add" aria-controls="add" role="tab" data-toggle="tab">Gửi thông báo</a></li>
		<li role="presentation"><a href="#list" aria-controls="profile" role="tab" data-toggle="tab">Lịch sử</a></li>
		<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Cài đặt</a></li>
	</ul>
	<div style="padding: 10px;"></div>
	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="add">
			<form method="POST" name="sentnotify" action="{{route('admin.facebook.postNotify')}}" class="form-horizontal">
				{!!csrf_field()!!}
				<div class="form-group">
					<label for="txtTo" class="col-sm-2 control-label">Gửi đến</label>
					<div class="col-sm-2">
						<select name="txtTo" id="txtTo" class="form-control"> 
							<option value="1">Tất cả Fb Id</option>
						</select>
					</div>
					<div style="left: -92px; position: relative;">
						<label for="txtLoaitru" class="col-sm-2 control-label">Loại trừ</label>
						<div class="col-sm-6">
							<input type="text" required class="form-control" id="txtLoaitru" name="txtLoaitru" placeholder="Facebook ID">
						</div>

					</div>
				</div>
				<div class="form-group">
					<label for="txtLink" class="col-sm-2 control-label">Liên kết</label>
					<div class="col-sm-9">
						<input required type="text" class="form-control" name="txtLink"  id="txtLink" placeholder="">
					</div>
				</div>

				<div class="form-group">
					<label for="txtContent" class="col-sm-2 control-label">Thông báo</label>
					<div class="col-sm-9">
						<textarea required name="txtContent" id="txtContent" class="form-control" rows="5" placeholder="Không quá 180  ký tự "></textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" id="btnSubmit" class="btn btn-primary"> Gửi đi</button>
						<button type="reset" class="btn btn-default">Hủy bỏ</button>

					</div>
				</div>
			</form>
		</div>
	<div role="tabpanel" class="tab-pane" id="list">
	<form action="" method="post">
			<input type="hidden" value="{!! csrf_token() !!}" name="_token"/>
			<div class="row">
				<div class="col-lg-12">
					<div class="table-responsive">
						<table id="table" class="table table-bordered table-hover table-striped" cellspacing="0">
							<div class="col-lg-3">
								<select name="action" style="margin-left: -15px; width: 115px;" class="form-control input-sm">
									<option value=''> Chọn tác vụ</option>
									<option value="delete">Xóa</option>
									<option value="hienthi">Hiển thị</option>
									<option value="an">Ẩn</option>
								</select>
							</div>

							<div class="col-lg-3">
								<button type="submit" name="btnXoaN" style="margin-left: -155px; height: 30px;line-height: 17px;" class="btn btn-primary"> Áp dụng</button>
							</div>

							<thead>
								<tr>
									<th width="20"><input class="no-sort" type="checkbox" id="selectall" name="selectall" /></th>
									<th width="80">Gửi từ</th>
									<th width="80">Đến</th>
									<th width="80">Lúc</th>
									<th width="80">Liên kết</th>
									<th width="150">Nội dung thông báo</th>
									<th width="60">Thao tác</th>
								</tr>
							</thead>

							<tbody>
								@foreach ($log as $item)
								<tr>
									<td width="20">
										<input type="checkbox" name="cbitem[]" value="{!! $item['id'] !!}" class="checkbox" />
									</td>
									<td>{!! $item['from'] !!}</td>
									<td>{!! $item['to'] !!}</td>
									<td>{!! $item['created_at'] !!} </td>
									<td>{!! $item['link'] !!}</td>
									<td>{!!$item['content']!!}</td>
									<td width="60">
										<a href="#" class="btn btn-primary">
											<i class="glyphicon glyphicon-refresh"></i>  
										</a>
										<a href="#" onclick="return confirm('Bạn có muốn xóa');" type="button" class="btn btn-danger">
											<i class="glyphicon glyphicon-remove"></i>
										</a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>    
		</form>

	</div>
	<div role="tabpanel" class="tab-pane" id="settings">
	<form method="POST" action="{{route('admin.facebook.postSetting')}}" class="form-horizontal">
		{!!csrf_field()!!}
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading">Thông báo facebook</div>
			<div class="panel-body">
				<div class="checkbox" style="float: left;">
					<label>
						<input id="ckAll" name="ckAll" type="checkbox"> Vô hiệu hóa tất cả?
					</label>
				</div>
			<div style="float: right;">
				<button type="submit" id="btnSubmit" class="btn btn-primary"> Cập nhật</button>
				<button type="reset" class="btn btn-default">Hủy bỏ</button>
			</div>

			</div>

			<!-- List group -->
			<ul class="list-group">
				<li class="list-group-item">
						<div class="row">
							<div class="col-sm-5">
								<div class="checkbox">
									<label>
										<input checked name="fb_register" id="fb_register" type="checkbox"> Thông báo khi người dùng đăng ký ?
									</label>
								</div>
							</div>
							<div class="col-sm-7">
								<input value="{!!getOption('fb_register')!!}" type="text" name="fb_register_val" id="fb_register_val" class="form-control" placeholder="Nhập nội dung thông báo, không quá 180 ký tự " />
							</div>
						</div>
				</li>

				<li class="list-group-item">
						<div class="row">
							<div class="col-sm-5">
								<div class="checkbox">
									<label>
										<input checked name="fb_order" id="fb_order" type="checkbox"> Thông báo khi người dùng đặt hàng ?
									</label>
								</div>
							</div>
							<div class="col-sm-7">
								<input value="{!!getOption('fb_order')!!}" type="text" name="fb_order_val" id="fb_order_val" class="form-control" placeholder="Nhập nội dung thông báo, không quá 180 ký tự " />
							</div>
						</div>
				</li>

				<li class="list-group-item">
						<div class="row">
							<div class="col-sm-5">
								<div class="checkbox">
									<label>
										<input checked name="fb_checkout" id="fb_checkout" type="checkbox"> Thông báo khi người dùng thanh toán đơn hàng ?
									</label>
								</div>
							</div>
							<div class="col-sm-7">
								<input value="{!!getOption('fb_checkout')!!}" type="text" name="fb_checkout_val" id="fb_checkout_val" class="form-control" placeholder="Nhập nội dung thông báo, không quá 180 ký tự " />
							</div>
						</div>
				</li>

				<li class="list-group-item">
						<div class="row">
							<div class="col-sm-5">
								<div class="checkbox">
									<label>
										<input checked name="fb_ship" id="fb_ship" type="checkbox"> Thông báo khi  đơn hàng được vận chuyển?
									</label>
								</div>
							</div>
							<div class="col-sm-7">
								<input value="{!!getOption('fb_ship')!!}" type="text" name="fb_ship_val" id="fb_ship_val" class="form-control" placeholder="Nhập nội dung thông báo, không quá 180 ký tự " />
							</div>
						</div>
				</li>
				
				<li class="list-group-item">
						<div class="row">
							<div class="col-sm-5">
								<div class="checkbox">
									<label>
										<input checked name="fb_done" id="fb_done" type="checkbox"> Thông báo khi  đơn hàng hoàn thành?
									</label>
								</div>
							</div>
							<div class="col-sm-7">
								<input value="{!!getOption('fb_done')!!}" type="text" name="fb_done_val" id="fb_done_val" class="form-control" placeholder="Nhập nội dung thông báo, không quá 180 ký tự " />
							</div>
						</div>
				</li>

				<li class="list-group-item">
						<div class="row">
							<div class="col-sm-5">
								<div class="checkbox">
									<label>
										<input checked name="fb_cancel" id="fb_cancel" type="checkbox"> Thông báo khi  đơn hàng bị hủy ?
									</label>
								</div>
							</div>
							<div class="col-sm-7">
								<input value="{!!getOption('fb_cancel')!!}"  type="text" name="fb_cancel_val" id="fb_cancel_val" class="form-control" placeholder="Nhập nội dung thông báo, không quá 180 ký tự " />
							</div>
						</div>
				</li>





			</ul>
		</div>
	</form>
	</div>
	</div>

</div>
<script type="text/javascript">

	//CHECK DT
	if($('input[name="fb_cancel_val"]').val() == ''){
		$('input[type="checkbox"][name=fb_cancel]').click();
		$("#fb_cancel_val").attr("disabled", "disabled");
		$("#fb_cancel_val").val("");
		$("#fb_cancel_val").attr("placeholder", 'Không sử dụng !');
	}

	if($('input[name="fb_register_val"]').val() == ''){
		$('input[type="checkbox"][name=fb_register]').click();
		$("#fb_register_val").attr("disabled", "disabled");
		$("#fb_register_val").val("");
		$("#fb_register_val").attr("placeholder", 'Không sử dụng !');
	}

	if($('input[name="fb_order_val"]').val() == ''){
		$('input[type="checkbox"][name=fb_order]').click();
		$("#fb_order_val").attr("disabled", "disabled");
		$("#fb_order_val").val("");
		$("#fb_order_val").attr("placeholder", 'Không sử dụng !');
	}

	if($('input[name="fb_checkout_val"]').val() == ''){
		$('input[type="checkbox"][name=fb_checkout]').click();
		$("#fb_checkout_val").attr("disabled", "disabled");
		$("#fb_checkout_val").val("");
		$("#fb_checkout_val").attr("placeholder", 'Không sử dụng !');
	}

	if($('input[name="fb_ship_val"]').val() == ''){
		$('input[type="checkbox"][name=fb_ship]').click();
		$("#fb_ship_val").attr("disabled", "disabled");
		$("#fb_ship_val").val("");
		$("#fb_ship_val").attr("placeholder", 'Không sử dụng !');
	}

	if($('input[name="fb_done_val"]').val() == ''){
		$('input[type="checkbox"][name=fb_done]').click();
		$("#fb_done_val").attr("disabled", "disabled");
		$("#fb_done_val").val("");
		$("#fb_done_val").attr("placeholder", 'Không sử dụng !');
	}

	//ckAll
	if(!$('input[type="checkbox"][name!="ckAll"]').is(":checked")){
		$('input[type="checkbox"][name="ckAll"]').click();
	}

	$('#ckAll').click(function(){
		if($('input[name="ckAll"]').is(":checked")) {
			$('input[type="checkbox"][name!="ckAll"]').removeAttr("checked");
		}
		else $('input[type="checkbox"][name!="ckAll"]').click();

	});
	//setting
    $('input[type="checkbox"]').click(function(){

        if(!$('input[name="fb_cancel"]').is(":checked")){
           $("#fb_cancel_val").attr("disabled", "disabled");
           $("#fb_cancel_val").val("");
           $("#fb_cancel_val").attr("placeholder", 'Không sử dụng !');

        } else {
        	$("#fb_cancel_val").removeAttr("disabled");
           	$("#fb_cancel_val").attr("placeholder", 'Nhập nội dung thông báo, không quá 180 ký tự ');
           	$("#fb_cancel_val").val('{!!getOption('fb_cancel')!!}');


        }
        //
        if(!$('input[name="fb_register"]').is(":checked")){
           $("#fb_register_val").attr("disabled", "disabled");
           $("#fb_register_val").val("");
           $("#fb_register_val").attr("placeholder", 'Không sử dụng !');

        } else {
        	$("#fb_register_val").removeAttr("disabled");
           	$("#fb_register_val").attr("placeholder", 'Nhập nội dung thông báo, không quá 180 ký tự ');
           	$("#fb_register_val").val('{!!getOption('fb_register')!!}');
        }
        //
        if(!$('input[name="fb_order"]').is(":checked")){
           $("#fb_order_val").attr("disabled", "disabled");
           $("#fb_order_val").val("");
           $("#fb_order_val").attr("placeholder", 'Không sử dụng !');

        } else {
        	$("#fb_order_val").removeAttr("disabled");
           	$("#fb_order_val").attr("placeholder", 'Nhập nội dung thông báo, không quá 180 ký tự ');
           	$("#fb_order_val").val('{!!getOption('fb_order')!!}');
        }
        //
        if(!$('input[name="fb_checkout"]').is(":checked")){
           $("#fb_checkout_val").attr("disabled", "disabled");
           $("#fb_checkout_val").val("");
           $("#fb_checkout_val").attr("placeholder", 'Không sử dụng !');

        } else {
        	$("#fb_checkout_val").removeAttr("disabled");
           	$("#fb_checkout_val").attr("placeholder", 'Nhập nội dung thông báo, không quá 180 ký tự ');
           	$("#fb_checkout_val").val('{!!getOption('fb_checkout')!!}');
        }
        //
        if(!$('input[name="fb_ship"]').is(":checked")){
           $("#fb_ship_val").attr("disabled", "disabled");
           $("#fb_ship_val").val("");
           $("#fb_ship_val").attr("placeholder", 'Không sử dụng !');

        } else {
        	$("#fb_ship_val").removeAttr("disabled");
           	$("#fb_ship_val").attr("placeholder", 'Nhập nội dung thông báo, không quá 180 ký tự ');
           	$("#fb_ship_val").val('{!!getOption('fb_ship')!!}');
        }
        //
        if(!$('input[name="fb_done"]').is(":checked")){
           $("#fb_done_val").attr("disabled", "disabled");
           $("#fb_done_val").val("");
           $("#fb_done_val").attr("placeholder", 'Không sử dụng !');

        } else {
        	$("#fb_done_val").removeAttr("disabled");
           	$("#fb_done_val").attr("placeholder", 'Nhập nội dung thông báo, không quá 180 ký tự ');
           	$("#fb_done_val").val('{!!getOption('fb_done')!!}');
        }
       
    });




	//tab
	$('#myTabs a').click(function (e) {
		e.preventDefault()
		$(this).tab('show')
	})
	//loading
	$('#btnSubmit').click(function (e) {
		@for ($i = 0; $i < count($member); $i++)
		    setTimeout(function() {
			$('#btnSubmit').html('<span id="loading" class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Đang xử lý '+{!!$i+1!!} + '/' +{!!count($member)!!});
			}, {!!$i*1000!!});
		@endfor
		
		setTimeout(function() {
			$("form[name=sentnotify]").submit();
		}, {!!(count($member))*1000!!});

		$('#btnSubmit').attr('disabled', 'disabled');
	});

	$(function() {
		var availableTags = [
		@foreach ($member as $mb)
		{
			value: "{!!$mb['facebook_id']!!}",
			label: "{!!$mb['name']!!}",
		},

		@endforeach
		];
		function split( val ) {
			return val.split( /,\s*/ );
		}
		function extractLast( term ) {
			return split( term ).pop();
		}

		$( "#txtLoaitru" )
		      // don't navigate away from the field on tab when selecting an item
		      .bind( "keydown", function( event ) {
		      	if ( event.keyCode === $.ui.keyCode.TAB &&
		      		$( this ).autocomplete( "instance" ).menu.active ) {
		      		event.preventDefault();
		      }
	 	})
	      .autocomplete({
	      	minLength: 0,
	      	source: function( request, response ) {
	          // delegate back to autocomplete, but extract the last term
	          response( $.ui.autocomplete.filter(
	          	availableTags, extractLast( request.term ) ) );
	      },
	      focus: function() {
	          // prevent value inserted on focus
	          return false;
	      },
	      select: function( event, ui ) {
	      	var terms = split( this.value );
	          // remove the current input
	          terms.pop();
	          // add the selected item
	          terms.push( ui.item.value );
	          // add placeholder to get the comma-and-space at the end
	          terms.push( "" );
	          this.value = terms.join( ", " );
	          return false;
	      }
	  });
	});
</script>
@endsection()