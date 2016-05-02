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

<div class="col-sm-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Cài đặt</h3>
        </div>
        <div class="panel-body">
            <!-- /.row -->
            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" value="{!! csrf_token() !!}" name="_token"/>
                <div class="form-group">
                    <label for="txtPage">Link Facebook Page: </label>
                    <input required value="{!! old('txtPage', getOption('livechat-page') ) !!}" type="text" class="form-control" name="txtPage" id="txtPage" placeholder="Nhập link page" >
                </div>
                <div class="form-group ">
                    <label for="txtBg">Màu nền: </label>
                    <input required  value="{!! old('txtBg', getOption('livechat-bg') ) !!}" type="color" class="form-control" name="txtBg" id="txtBg" placeholder="Nhập màu nền">
                </div>
                <div class="form-group ">
                    <label for="txtTieuDe">Tiêu đề chat: </label>
                    <input required  value="{!! old('txtTieuDe', getOption('livechat-title')) !!}" type="text" class="form-control" name="txtTieuDe" id="txtTieuDe" placeholder="Nhập tiêu đề" >
                </div>

                <div class="form-group ">
                    <label for="txtLang">Ngôn ngữ: </label>
                    <select required name="txtLang" class="form-control">
                        <option value="vi_VN" @if (returnOption('livechat-lang') === "vi_VN") selected @endif >Việt Nam</option>
                        <option value="en_US" @if (returnOption('livechat-lang') === "en_US") selected @endif >English</option>

                    </select>
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox"@if (returnOption('livechat-status') == 0 ) checked @endif name="txtTrangthai" value="0" /> Tắt facebook live chat
                    </label>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button name="btnThem" type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Cập nhật</button>
                        <button type="reset" class="btn btn-warning"><i class="glyphicon glyphicon-repeat"></i> Hủy bỏ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <div class="panel panel-default">
        <div class="panel-heading">
        <h3 class="panel-title">Cửa sổ chat hiển thị</h3>
        </div>
        <div class="panel-body" style="min-height: 405px;">
            @if (returnOption('livechat-status') == 1 )
            {{ live_chat_facebook() }}
            <script>
                $("#b-c-facebook").css("position", 'relative');
                $(".chat_f_vt").css("right", '-24px');
                fb_eshow('f-chat-conent'), f_create_cki('f_chat_open', '1', 1);
            </script>
            @else 
                <div class="text-center">Chức năng đã bị vô hiệu hóa</div>
            @endif
        </div>
    </div>
</div>
@endsection()