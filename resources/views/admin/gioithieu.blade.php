@extends('admin.master')
@section('title', 'Quản lý nội dung')
@section('content')

<div class="row" >
    <div class="col-lg-12">
        <h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i>  <a href="">Home</a></li>
                <li class="active">Trang nội dung</li>
                <li class="active">Giới thiệu</li>
            </ol>
        </h3>
    </div>
</div>

@include('admin.checkErr')
<div class="col-sm-12">
<!-- /.row -->
    <form method="POST" action="{!! url('admin/gioithieu') !!}" enctype="multipart/form-data">
        <input type="hidden" value="{!! csrf_token() !!}" name="_token"/>
        <div class="form-group">
            <label for="txtTieude">Tiêu đề trang: <span class="required">*</span></label>
            <input value="{{ old('txtTieude', getOption('gioithieu-title')) }}" type="text" class="form-control" name="txtTieude" id="txtTieude" placeholder="" >
        </div>
        <div class="form-group">
            <label for="txtNoiDung">Nội dung: <span class="required">*</span></label><br />
            <textarea required  class="form-control" name="txtNoiDung" id="txtNoiDung" style="width: 400px;" placeholder="">
                {!! old('txtNoiDung', getOption('gioithieu-content')) !!}
            </textarea>
            <script>
                CKEDITOR.replace('txtNoiDung'); 
                CKEDITOR.config.height =  250;
            </script>
        </div>
        <div class="form-group">
            <label for="txtMota">Thẻ mô tả:  <span class="required">*</span></label>
            <textarea required class="form-control" name="txtMota" id="txtMota" rows="4" placeholder="Mô tả ngắn về sản phẩm (Khoảng 200 ký tự)">{!! old('txtMota', getOption('gioithieu-description')) !!}</textarea>
        </div>

        <div class="form-group">
            <label for="txtTukhoa">Thẻ từ khóa: <span class="required">*</span></label>
            <textarea required class="form-control" name="txtTukhoa" id="txtTukhoa" rows="4" placeholder="Nhập từ khóa">{!! old('txtTukhoa', getOption('gioithieu-keyword')) !!}</textarea>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Cập nhật</button>
            <button type="reset" class="btn btn-warning"><i class="glyphicon glyphicon-repeat"></i> Hủy bỏ</button>
        </div>
    </form>
</div>
@endsection()