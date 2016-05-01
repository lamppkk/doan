@extends('admin.master')
@section('title', 'Facebook Live Chat')
@section('content')

<div class="row" >
	<div class="col-lg-12">
		<h3>
			<ol class="breadcrumb">
				<li>
					<i class="fa fa-home"></i>  <a href="{{url('admin')}}">Home</a>
				</li>
				<li class="active">
					<i class="fa fa-facebook"></i> Facebook Live Chat
				</li>
			</ol>
		</h3>
	</div>
</div>

@include('admin.checkErr')

<!-- /.row -->
<form method="POST" enctype="multipart/form-data">
	<input type="hidden" value="{!! csrf_token() !!}" name="_token"/>
	<div class="form-group " style="padding-bottom: 45px">
		<label style="line-height: 30px;" for="txtPage" class="col-sm-2 control-label">Link Facebook Page: </label>
		<div class="col-sm-9">
			<input required value="{!! old('txtPage', getOption('livechat-page') ) !!}" type="text" class="form-control" name="txtPage" id="txtPage" placeholder="Nhập link page" >
		</div>
	</div>


	<div class="form-group ">
		<label style="line-height: 30px;" for="txtBg" class="col-sm-2 control-label">Màu nền: </label>
		<div class="col-sm-9">
			<input required  value="{!! old('txtBg', getOption('livechat-bg') ) !!}" type="color" class="form-control" name="txtBg" id="txtBg" placeholder="Nhập màu nền">
		</div>
	</div>
	<div style="padding: 30px;"></div>

	<div class="form-group ">
		<label style="line-height: 30px;" for="txtTieuDe" class="col-sm-2 control-label">Tiêu đề chat: </label>
		<div class="col-sm-9">
			<input required  value="{!! old('txtTieuDe', getOption('livechat-title')) !!}" type="text" class="form-control" name="txtTieuDe" id="txtTieuDe" placeholder="Nhập tiêu đề" >
		</div>
	</div>
	<div style="padding: 30px;"></div>

	<div class="form-group ">
		<label style="line-height: 30px;" for="txtLang" class="col-sm-2 control-label">Ngôn ngữ: </label>
		<div class="col-sm-9">
			<select required name="txtLang" class="form-control">
				<option value="vi_VN" @if (returnOption('livechat-lang') === "vi_VN") selected @endif >Việt Nam</option>
				<option value="en_US" @if (returnOption('livechat-lang') === "en_US") selected @endif >English</option>

			</select>
			
		</div>
	</div>
	<div style="padding: 30px;"></div>
	
	
	<div class="form-group">
		<label style="line-height: 40px;"  for="txtTrangthai" class="col-sm-2 control-label">Trạng thái livechat: </label>
		<div class="checkbox col-sm-9">
			<label>
				<input type="checkbox" @if (getOption('livechat-status') ==1 ) checked @endif name="txtTrangthai" value="0" /> Tắt facebook live chat
			</label>
		</div>
	</div>
	
	<div style="padding: 20px;"></div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button name="btnThem" type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Cập nhật</button>
			<button type="reset" class="btn btn-warning"><i class="glyphicon glyphicon-repeat"></i> Hủy bỏ</button>
		</div>
	</div>
</form>
@endsection()