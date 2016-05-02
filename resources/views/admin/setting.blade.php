@extends('admin.master')
@section('title', 'Cài đặt cấu hình')
@section('content')

<div class="row" >
    <div class="col-lg-12">
        <h3>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>  <a href="{{url('admin')}}">Home</a>
                </li>
                <li class="active">
                    <i class="fa fa-plus"></i> Cài đặt cấu hình
                </li>
            </ol>
        </h3>
    </div>
</div>

@include('admin.checkErr')

<!-- /.row -->
<form method="POST" action="{!! url('admin/setting') !!}" enctype="multipart/form-data">
    <input type="hidden" value="{!! csrf_token() !!}" name="_token"/>
    <div class="form-group " style="padding-bottom: 45px">
        <label style="line-height: 30px;" for="txtTen" class="col-sm-2 control-label">Tên trang web: <span class="required">*</span></label>
        <div class="col-sm-10">
          <input required value="{!!old('txtTen', isset($data) ? getOption('sitename') : null)!!}" type="text" class="form-control" name="txtTen" id="txtTen" placeholder="Nhập tên trang web" >
        </div>
    </div>


    <div class="form-group ">
        <label style="line-height: 30px;" for="txtTitle" class="col-sm-2 control-label">Tiêu đề trang chủ: <span class="required">*</span></label>
        <div class="col-sm-10">
          <input required  value="{!!old('txtTitle', isset($data) ? getOption('title') : null)!!}" type="text" class="form-control" name="txtTitle" id="txtTitle" placeholder="Nhập tiêu đề" >
        </div>
    </div>
    <div style="padding: 30px;"></div>

    <div class="form-group ">
        <label style="line-height: 30px;" class="col-sm-2 control-label" for="txtMota">Mô tả trang chủ  <span class="required">*</span></label>
        <div class="col-sm-10">
            <textarea required class="form-control" name="txtMota" id="txtMota" rows="4" placeholder="Mô tả ngắn về trang web (Khoảng 200 ký tự)">{!!old('txtMota', isset($data) ? getOption('description') : null)!!}</textarea>
        </div>
    </div>
    <div style="padding: 50px;"></div>

    <div class="form-group " style="padding-bottom: 55px">
        <label style="line-height: 30px;" class="col-sm-2 control-label" for="txtTukhoa">Từ khóa trang chủ<span class="required">*</span></label>
        <div class="col-sm-10">
            <textarea required class="form-control" name="txtTukhoa" id="txtTukhoa" rows="4" placeholder="Nhập từ khóa">{!!old('txtTukhoa', isset($data) ? getOption('keyword') : null)!!}</textarea>
        </div>
    </div>

    <div style="padding: 20px;"></div>

    <div class="form-group col-sm-4">
        <label for="logo">Logo: <span class="required">*</span></label>
        <div class="text-center active text-muted form-control" style="height: 134px;">
            <img onclick="selectImg('imgLogo', 'txtLogo')" class="cursor" style="margin-top: 42px;" height="35" width="230" src="{!!old('txtLogo', isset($data) ? getOption('logo') : url('http://laravel.dev/upload/images/logo.png'))!!} " name="imgLogo" id="imgLogo" />
            <input required type="hidden" value="{!!old('txtLogo', isset($data) ? getOption('logo') : url('http://laravel.dev/upload/images/logo.png'))!!} " name="txtLogo" id="txtLogo" />
        </div>
        
    </div>

    <div class="form-group col-sm-3">
        <label for="Favicon">Favicon icon (16x16): <span class="required">*</span></label>
        <div class="text-center active text-muted form-control" style="height: 134px;">
            <img onclick="selectImg('imgFavicon', 'txtFavicon')" class="cursor" style="margin-top: 50px;" height="16" width="16" src="{!!old('txtFavicon', isset($data) ? getOption('favicon') : url('http://laravel.dev/upload/images/favicon.ico'))!!}" name="imgFavicon" id="imgFavicon" />
            <input required type="hidden" value="{!!old('txtFavicon', isset($data) ? getOption('favicon') : url('http://laravel.dev/upload/images/favicon.ico'))!!}" name="txtFavicon" id="txtFavicon" />
        </div>
        
    </div>

    
    <div class="form-group col-sm-5">
        <label for="anh">Ảnh đại diện : <span class="required">*</span></label>
        <div class="text-center active text-muted form-control" style="height: 134px;">
            <img onclick="selectImg('imgAnh', 'txtAnh')" class="cursor" height="120" width="120" src="{!!old('txtFavicon', isset($data) ? getOption('image') : null)!!}" name="imgAnh" id="imgAnh" />
            <input required type="hidden" value="{!!old('txtFavicon', isset($data) ? getOption('image') : null)!!}" name="txtAnh" id="txtAnh" />
        </div>
        
    </div>

    
    <div class="form-group col-sm-6">
        <label for="txtTrangthai">Trạng thái trang web: </label>
        <div class="checkbox">
            <label>
                <input type="checkbox" @if (getOption('status') ==1 ) checked @endif name="txtTrangthai" value="0" /> Bật chế độ bảo trì website
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