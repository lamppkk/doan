@extends('admin.master')
@section('title', 'Quản lý sản phẩm')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h3>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>  <a href="">Home</a>
                </li>
                <li class="active">
                    <i class="fa fa-pencil"></i> Sửa sản phẩm
                </li>
            </ol>
        </h3>
    </div>
</div>

@include('admin.checkErr')

<!-- /.row -->
<form method="POST" action="" enctype="multipart/form-data" name="frmEditProduct">
	<input type="hidden" value="{!! csrf_token() !!}" name="_token"/>
	<div class="form-group " style="padding-bottom: 45px">
		<label style="line-height: 30px;" for="txtTen" class="col-sm-2 control-label">Tên sản phẩm: <span class="required">*</span></label>
		<div class="col-sm-10">
		  <input value="{!! old ('txtTen', isset($product) ? $product['name'] : null)!!}" type="text" onkeyup="ChangeToSlug('txtTen','txtAlias')" class="form-control" name="txtTen" id="txtTen" placeholder="Nhập tên sản phẩm" >
		</div>
	</div>

	<div class="form-group">
	<label style="line-height: 30px;"  for="txtAlias" class="col-sm-2 control-label">Đường dẫn / Alias: <span class="required">*</span></label>
		<div class="form-group col-sm-10">
			<div class="input-group">
				<div class="input-group-addon">http://pinstore.vn/</div>
					<input value="{!! old ('txtAlias', isset($product) ? $product['alias'] : null)!!}" type="text" style="text-align: left; " class="form-control input-group-addon" id="txtAlias" name="txtAlias" placeholder="" required>
				<div class="input-group-addon">.html</div>
			</div>
		</div>
	</div>
	
	<div class="form-group col-sm-12">
	<label for="txtNoiDung">Nội dung <span class="required">*</span></label>
	  <textarea required  class="form-control" name="txtNoiDung" id="txtNoiDung" style="width: 400px;" placeholder="">
		{!! old ('txtNoiDung', isset($product) ? $product['content'] : null)!!}
	  </textarea>
	  <script>
		  CKEDITOR.replace('txtNoiDung'); 
		  CKEDITOR.config.height =  300;
	  </script>
	</div>
	
	<div class="form-group col-sm-2">
		<label for="selectImage">Ảnh đại diện: <span class="required">*</span></label>
		<div class="text-center active text-muted form-control" style="height: auto;">
			<img onclick="selectImg('imgImage', 'txtImage')" class="cursor img-thumbnail" height="120" width="120" src="{!! old ('txtImage', isset($product) ? $product['images'] : null)!!}" name="imgImage" id="imgImage" />
			<input type="hidden" value="{!! old ('txtImage', isset($product) ? $product['images'] : null)!!}" name="txtImage" id="txtImage" />
		</div>
		
	</div>

	
	<div class="form-group col-sm-10">
		<label for="selectImage">Ảnh sản phẩm: <span class="required">*</span></label>
		<div class="text-center active text-muted form-control" style="height: 134px;">
			@foreach ($images as $key => $image)
			<div class="col-sm-2">
				<img 	id="img{!! $key+1 !!}" onclick="selectImg('img{!! $key+1 !!}', 'txtImg{!! $key+1 !!}')" class="cursor img-circle"" height="120" width="120" 
						src="{!! old ('txtAnhSP'[$key+1], isset($image) ? $image['image'] : null)!!}"  />
				<input  id="txtImg{!! $key+1 !!}"  type="hidden" value="{!! old ('txtAnhSP'[$key], isset($image) ? $image['image'] : null)!!}" name="txtAnhSP[]" />
				<a id="trash{!! $key+1 !!}" onclick="traskClick({!! $key+1 !!})" onclick="traskClick({!! $key+1 !!})" style="display: none;" href="javascript:void(0)"> <i class="test fa fa-trash-o fa-2x text-center"></i></a>
				<script>
					$("#trash{!! $key+1 !!}").show();
				</script>
			</div>
			@endforeach
			
			@if($key < 5 )
				<?php 
					for($key = $key+2; $key <= 6; $key++) {
					?>
					<div class="col-sm-2">
						<img id="img{!! $key !!}" onclick="selectImg('img{!! $key !!}', 'txtImg{!! $key !!}')" class="cursor img-circle"" height="120" width="120" src="@if(old('txtAnhSP')[$key] == ''){{url('public/admin/images/no_image.png')}}@else{!! old('txtAnhSP')[$key] !!}@endif"  />
						<input  id="txtImg{!! $key !!}"  type="hidden" value="{!! old('txtAnhSP')[$key] !!}" name="txtAnhSP[]" />
						<a id="trash{!! $key !!}" onclick="traskClick({!! $key !!})" style="display: none;" href="javascript:void(0)"> <i class="test fa fa-trash-o fa-2x text-center"></i></a>
				
					</div>
				<?php } ?>
			@endif
			
		</div>
	</div>
	
	
	<div class="form-group col-sm-6" >
		<label for="sltDanhmuc">Chọn danh mục: <span class="required">*</span></label>
		<select name="sltDanhmuc" id="sltDanhmuc" class="form-control">
			<option value=""> --- Chọn danh mục --- </option>
			@foreach (GetCat(0) as $item)
				<option @if (old('sltDanhmuc') == $item['id'] || $product['cat_id'] == $item['id'] ) selected @endif value="{{$item['id']}}">{{$item['name']}}</option>
			@endforeach
		</select>
	</div>
	
	<div class="form-group col-sm-6" >
		<label for="txtDongia">Đơn giá: <span class="required">*</span></label>
		<input type="number"  value="{!! old ('txtDongia', isset($product) ? $product['price'] : null)!!}" class="form-control" name="txtDongia" id="txtDongia" placeholder="" required>
	</div>



	<div class="form-group col-sm-6">
		<label for="txtMota">Mô tả ngắn  <span class="required">*</span></label>
		<textarea required class="form-control" name="txtMota" id="txtMota" rows="4" placeholder="Mô tả ngắn về sản phẩm (Khoảng 200 ký tự)">{!! old ('txtMota', isset($product) ? $product['description'] : null)!!}</textarea>
	</div>
	
	<div class="form-group col-sm-6">
		<label for="txtTukhoa">Từ khóa <span class="required">*</span></label>
		<textarea required class="form-control" name="txtTukhoa" id="txtTukhoa" rows="4" placeholder="Nhập từ khóa">{!! old ('txtTukhoa', isset($product) ? $product['keywords'] : null)!!}</textarea>
	</div>
	
	<div class="form-group col-sm-6">
		<label for="txtTrangthai">Trạng thái: </label>
		<div class="radio">
			<label>
				<input type="radio"  name="txtTrangthai" value="1" @if ($product['status'] == 1 ) checked @endif /> Hiển thị
			</label>
			<label>
				<input type="radio" name="txtTrangthai" value="0" @if ($product['status'] == 0 ) checked @endif /> Ẩn
			</label>
		</div>
	</div>
	
  <div class="form-group">
    <div class="col-sm-offset-0 col-sm-10">
      <button name="btnThem" type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Cập nhật</button>
      <button type="reset" class="btn btn-warning"><i class="glyphicon glyphicon-repeat"></i> Hủy bỏ</button>
    </div>
  </div>
</form>
@endsection()