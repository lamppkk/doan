@extends('admin.master')
@section('title', 'Quản lý tin tức')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h3>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>  <a href="">Home</a>
                </li>
                <li class="active">
                    <i class="fa fa-plus"></i> Sửa tin tức
                </li>
            </ol>
        </h3>
    </div>
</div>

@include('admin.checkErr')

<!-- /.row -->
<form method="POST" action=""  enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
	
	<div class="form-group" style="padding-bottom: 45px">
		<label  style="line-height: 30px;" for="title" class="col-sm-2 control-label">Tiêu đề <span class="required">*</span></label>
		<div class="col-sm-10">
		  <input value="{!! old ('title', isset($news) ? $news['title'] : null)!!}" type="text" onkeyup="ChangeToSlug('title','alias')" class="form-control" name="title" id="title" placeholder="Nhập tiêu đề tin" required/ >
		</div>
	</div>


  <div class="form-group">
    <label  style="line-height: 30px;" for="alias" class="col-sm-2 control-label">Đường dẫn (alias) <span class="required">*</span></label>
	<div class="form-group col-sm-10">
			<div class="input-group">
				<div class="input-group-addon">{{ url('') }}/</div>
					<input value="{!! old ('alias', isset($news) ? $news['alias'] : null)!!}" type="text" style="text-align: left; " class="form-control input-group-addon" id="alias" name="alias" placeholder="" required>
				<div class="input-group-addon">.html</div>
			</div>
		</div>
  </div>
  
  <div class="form-group col-sm-12" >
    <label for="content" class="control-label">Nội dung <span class="required">*</span></label>
      <textarea  class="form-control" name="content" id="content" rows="3" placeholder="">
		{!! old ('content', isset($news) ? $news['content'] : null)!!}
	  </textarea>
		<script>
			CKEDITOR.replace('content');
			CKEDITOR.config.height =  300;
		</script>
  </div>
  
  
	<div class="form-group col-sm-2">
		<label for="images">Ảnh đại diện: <span class="required">*</span></label>
		<div class="text-center active text-muted form-control" style="height: auto;">
			<img onclick="selectImg('imgImage', 'images')" class="cursor img-thumbnail" height="120" width="120" src="{!! old ('images', isset($news) ? $news['images'] : null)!!}" name="imgImage" id="imgImage" />
			<input type="hidden" value="{!! old ('images', isset($news) ? $news['images'] : null)!!}" name="images" id="images" />
		</div>
		
	</div>
  
  
	<div class="form-group col-sm-10">
		<label for="description">Mô tả: <span class="required">*</span></label>
		<div class="text-center active text-muted form-control" style="height: 134px;">
			<textarea required class="form-control" name="description" id="description" rows="5" placeholder="Mô tả ngắn về tin (Khoảng 200 ký tự)">{!! old ('description', isset($news) ? $news['description'] : null)!!}</textarea>
		</div>
	</div>
  
	<div class="form-group col-sm-6">
		<label for="status">Trạng thái: </label>
		<div class="radio">
			<label>
				<input type="radio" name="status" value="1" @if ($news['status'] == 1 ) checked @endif /> Hiển thị
			</label>
			<label>
				<input type="radio" name="status" value="0" @if ($news['status'] == 0 ) checked @endif /> Ẩn
			</label>
		</div>
	</div>
  
	<div class="form-group">
		<div class="col-sm-offset-0 col-sm-10">
		  <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Cập nhật</button>
		  <a href="{{ url('admin/news/list')}}" class="btn btn-warning"><i class="glyphicon glyphicon-repeat"></i> Hủy bỏ</a>
		</div>
	</div>
</form>

@endsection()