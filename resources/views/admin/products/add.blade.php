@extends('admin.master')
@section('title', 'Quản lý sản phẩm')
@section('content')

<div class="row" >
	<div class="col-lg-12">
		<h3>
			<ol class="breadcrumb">
				<li>
					<i class="fa fa-home"></i>  <a href="">Home</a>
				</li>
				<li class="active">
					<i class="fa fa-plus"></i> Thêm mới sản phẩm
				</li>
			</ol>
		</h3>
	</div>
</div>

@include('admin.checkErr')
<div class="panel panel-default">
	<div class="panel-heading">Thông tin sản phẩm</div>
	<div class="panel-body">

		<!-- /.row -->
		<form method="POST" action="{!! url('admin/products/add') !!}" enctype="multipart/form-data">
			<input type="hidden" value="{!! csrf_token() !!}" name="_token"/>
			<div class="form-group col-sm-12">
				<label style="line-height: 30px;" for="txtTen">Tên sản phẩm: <span class="required">*</span></label>
				<input required value="{!! old('txtTen') !!}" type="text" onkeyup="ChangeToSlug('txtTen','txtAlias')" class="form-control" name="txtTen" id="txtTen" placeholder="Nhập tên sản phẩm" >

			</div>

			<div class="form-group col-sm-12">
				<label for="txtNoiDung">Mô tả sản phẩm<span class="required">*</span></label><br />
				<textarea required  class="form-control" name="txtNoiDung" id="txtNoiDung" style="width: 400px;" placeholder="">
					{!! old('txtNoiDung') !!}
				</textarea>
				<script>
					CKEDITOR.replace('txtNoiDung'); 
					CKEDITOR.config.height =  300;
				</script>
			</div>

			<div class="form-group col-sm-2">
				<label for="selectImage">Ảnh đại diện: <span class="required">*</span></label>
				<div class="text-center active text-muted form-control" style="height: 134px;">
					<img onclick="selectImg('imgImage', 'txtImage')" class="cursor img-circle" height="120" width="120" src="@if(old('txtImage') == ''){{url('public/admin/images/no_image.png')}}@else{!! old('txtImage') !!}@endif" name="imgImage" id="imgImage" />
					<input type="hidden" value="{!! old('txtImage') !!}" name="txtImage" id="txtImage" />
				</div>

			</div>


			<div class="form-group col-sm-10">
				<label for="selectImage">Ảnh sản phẩm: <span class="required">*</span></label>
				<div class="text-center active text-muted form-control" style="height: 134px;">
					<div class="col-sm-2">
						<img id="img1" onclick="selectImg('img1', 'txtImg1')" class="cursor img-circle" height="120" width="120" src="@if(old('txtAnhSP')[0] == ''){{url('public/admin/images/no_image.png')}}@else{!! old('txtAnhSP')[0] !!}@endif " />
						<input id="txtImg1"  type="hidden" value="{!! old('txtAnhSP')[0] !!}" name="txtAnhSP[]" />
						<a id="trash1" onclick="traskClick(1)" style="display: none;" href="javascript:void(0)"> <i class="test fa fa-trash-o fa-2x text-center"></i></a>
						<input type="hidden" id="anhspReq" name="anhspReq"  />
					</div>
					<div class="col-sm-2">
						<img id="img2" onclick="selectImg('img2', 'txtImg2')" class="cursor img-circle" height="120" width="120" src="@if(old('txtAnhSP')[1] == ''){{url('public/admin/images/no_image.png')}}@else{!! old('txtAnhSP')[1] !!}@endif"  />
						<input id="txtImg2"  type="hidden" value="{!! old('txtAnhSP')[1] !!}" name="txtAnhSP[]" />
						<a id="trash2" onclick="traskClick(2)" style="display: none;" href="javascript:void(0)"> <i class="test fa fa-trash-o fa-2x text-center"></i></a>
					</div>
					<div class="col-sm-2">
						<img id="img3" onclick="selectImg('img3', 'txtImg3')" class="cursor img-circle" height="120" width="120" src="@if(old('txtAnhSP')[2] == ''){{url('public/admin/images/no_image.png')}}@else{!! old('txtAnhSP')[2] !!}@endif" />
						<input id="txtImg3"  type="hidden" value="{!! old('txtAnhSP')[2] !!}" name="txtAnhSP[]" />
						<a id="trash3" onclick="traskClick(3)" style="display: none;" href="javascript:void(0)"> <i class="test fa fa-trash-o fa-2x text-center"></i></a>
					</div>
					<div class="col-sm-2">
						<img id="img4" onclick="selectImg('img4', 'txtImg4')" class="cursor img-circle" height="120" width="120"  src="@if(old('txtAnhSP')[3] == ''){{url('public/admin/images/no_image.png')}}@else{!! old('txtAnhSP')[3] !!}@endif"  />
						<input   id="txtImg4"  type="hidden" value="{!! old('txtAnhSP')[3] !!}" name="txtAnhSP[]" />
						<a id="trash4" onclick="traskClick(4)" style="display: none;" href="javascript:void(0)"> <i class="test fa fa-trash-o fa-2x text-center"></i></a>
					</div>
					<div class="col-sm-2">
						<img id="img5" onclick="selectImg('img5', 'txtImg5')" class="cursor img-circle" height="120" width="120"  src="@if(old('txtAnhSP')[4] == ''){{url('public/admin/images/no_image.png')}}@else{!! old('txtAnhSP')[4] !!}@endif"  />
						<input   id="txtImg5"  type="hidden" value="{!! old('txtAnhSP')[4] !!}" name="txtAnhSP[]" />
						<a id="trash5" onclick="traskClick(5)" style="display: none;" href="javascript:void(0)"> <i class="test fa fa-trash-o fa-2x text-center"></i></a>
					</div>
					<div class="col-sm-2">
						<img id="img6" onclick="selectImg('img6', 'txtImg6')" class="cursor img-circle" height="120" width="120" src="@if(old('txtAnhSP')[5] == ''){{url('public/admin/images/no_image.png')}}@else{!! old('txtAnhSP')[5] !!}@endif"  />
						<input   id="txtImg6"  type="hidden" value="{!! old('txtAnhSP')[5] !!}" name="txtAnhSP[]" />
						<a id="trash6" onclick="traskClick(6)" style="display: none;" href="javascript:void(0)"> <i class="test fa fa-trash-o fa-2x text-center"></i></a>
					</div>
				</div>
			</div>

			<div class="form-group col-sm-6" >
				<label for="sltDanhmuc">Danh mục sản phẩm: <span class="required">*</span></label>
				<select name="sltDanhmuc" id="sltDanhmuc" class="form-control">
					<option value=""> --- Chọn danh mục --- </option>
					@foreach (GetCat(0) as $item)
					<option @if (old('sltDanhmuc') == $item['id']) selected @endif value="{{$item['id']}}">{{$item['name']}}</option>
					@endforeach

				</select>
			</div>

			<div class="form-group col-sm-3" >
				<label for="txtDongia">Giá niên yết: <span class="required">*</span></label>
				<input type="number"  value="{!! old('txtDongia') !!}" class="form-control" name="txtDongia" id="txtDongia" placeholder="" required>
			</div>

			<div class="form-group col-sm-3" >
				<label for="txtGiakm">Giá khuyến mại: <span class="required">*</span></label>
				<input type="number"  value="{!! old('txtGiakm') !!}" class="form-control" name="txtGiakm" id="txtGiakm" placeholder="" required>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">Tối ưu SEO</div>
		<div class="panel-body">



			<div class="form-group col-sm-6">
				<label for="txtMota">Thẻ mô tả:   <span class="required">*</span></label>
				<textarea required class="form-control" name="txtMota" id="txtMota" rows="4" placeholder="Mô tả ngắn về sản phẩm (Khoảng 200 ký tự)">{!! old('txtMota') !!}</textarea>
			</div>

			<div class="form-group col-sm-6">
				<label for="txtTukhoa">Thẻ từ khóa:  <span class="required">*</span></label>
				<textarea required class="form-control" name="txtTukhoa" id="txtTukhoa" rows="4" placeholder="Nhập từ khóa">{!! old('txtTukhoa') !!}</textarea>
			</div>

			<div class="form-group"  style="padding-bottom: 45px">
				<label style="line-height: 30px;" for="txtAlias" class="col-sm-2">Đường dẫn / Alias: <span class="required">*</span></label>
				<div class="col-sm-10">
					<div class="input-group">
						<div class="input-group-addon">{{url('')}}/</div>
						<input value="{!! old('txtAlias') !!}" type="text" style="text-align: left; " class="form-control input-group-addon" id="txtAlias" name="txtAlias" placeholder="" required>
						<div class="input-group-addon">.html</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"> Tùy chọn khác</h3>
		</div>
		<div class="panel-body">

			<div class="form-group col-sm-12" >
				<div style="" class="row">
					<label style=" margin-bottom: 0;padding-top: 13px; font-weight: normal;" class="control-label col-sm-9">Sản phẩm này có nhiều tùy chọn như size, kích thước, màu sắc?</label>
					<div class="col-sm-3 text-right">
						<button  class="btn btn-primary text-right show-option" type="button">Thêm tùy chọn</button>
						<button class="btn btn-default text-right cancel-option hide" type="button">Hủy</button>	
					</div>
				</div>



				<table class="table" id="tbl" style="display: none"> 
					<thead>
						<tr>
							<th class="col-sm-2">Tên thuộc tính</th>
							<th class="col-sm-4">Giá trị</th>
							<th class="col-sm-offset-3 col-sm-1"></th>
						</tr>
					</thead>
					<tbody>
						<tr></tr>
					</tbody>
				</table>

				<table style="display: none" class="table">
					<tr>
						<td class="col-sm-2" colspan="3" style="padding-top: 10px;">
							<a id="addBtn"  class="btn btn-default" href="javascript:void(0)">Thêm option</a>
						</td>
					</tr>
				</table>

				<script>
					function trashOp(jQtable){
						if(dem > 1){
							jQtable.each(function(){
								$('tr:last', this).remove();
							});
							dem--;
						}
						if(dem == 1) $(".trashOp").hide(); 
						else $(".trashOp").show(); 
					}

					var dem = 0;
					$("#addBtn").click(function(){
						if(dem < 10){
							dem ++;
							$('#tbl tr:last').after('<tr class="tr"><td class="col-sm-2"> <input style="max-width: 200px;" name="name[]" class="form-control" required></td><td class="col-sm-4">	<input style="max-width: 400px;" name="value[]"  placeholder="Nhập giá trị" class="form-control" required>	</td><td  class="col-sm-offset-3 col-sm-4"><a onclick="trashOp($(\'#tbl\'))"  class="btn btn-default trashOp" href="javascript:void(0)"><i class="fa fa-trash"></i></a></td>  </tr> ');

						}
						if(dem == 1) $(".trashOp").hide(); 
						else $(".trashOp").show(); 
					});


					$(".show-option").click(function(){
						$("table").show();
						$(".cancel-option").removeClass("hide");
						$(".show-option").hide();
						$("#addBtn").click();
						$(".trashOp").hide(); 
					});

					$(".cancel-option").click(function(){
						$("table").hide();
						$(".cancel-option").addClass("hide");
						$(".show-option").show();
						$("#tbl input").val("");
						$('#tbl tbody tr[class=tr]').remove();
						dem = 0;

					});
				</script>

			</div>
		</div>
	</div>
	<div class="panel panel-default">
	<div class="panel-body">
			<div class="form-group col-sm-6">
				<label for="txtTrangthai">Trạng thái: </label>
				<div class="radio">
					<label>
						<input type="radio" name="txtTrangthai" value="1" checked/> Hiển thị
					</label>
					<label>
						<input type="radio" name="txtTrangthai" value="0" /> Ẩn
					</label>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-0 col-sm-10">
					<button name="btnThem" type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Thêm mới</button>
					<button type="reset" class="btn btn-warning"><i class="glyphicon glyphicon-repeat"></i> Hủy bỏ</button>
				</div>
			</div>
		</div>
	</div>
</form>
@endsection()