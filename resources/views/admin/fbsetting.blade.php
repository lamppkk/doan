@extends('admin.master')
@section('title', 'Cài đặt facebook')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h3>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>  <a href="">Home</a>
                    </li>
                    <li class="active">
                        <span class="fa fa-facebook"></span> Cài đặt facebook
                    </li>
                </ol>
            </h3>
        </div>    
    </div>
</div>
<div style="padding: 5px;"></div>

<form method="POST" action="{{ route('admin.facebook.postSetting')}}" class="form-horizontal">
    {!!csrf_field()!!}
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Thông báo facebook</div>
        <div class="panel-body">
            <div class="checkbox" style="float: lèt;">
                <label>
                    <input id="ckAll" name="ckAll" type="checkbox"> Vô hiệu hóa tất cả?
                </label>
            </div>
            <div style="float: right;">
                <button type="submit" id="btnSubmit" class="btn btn-primary"> Cập nhật</button>
                <button type="reset" class="btn btn-default">Hủy bỏ</button>
            </div>

        </div>

        <!-- list group -->
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


</script>
@endsection()