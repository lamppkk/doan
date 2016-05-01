@extends('admin.master')
@section('title', 'Quản lý menu')
@section('content')
<script src="{{ url('public/admin/js/jquery.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{ url('public/admin/css/jquery.domenu-0.95.77.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{ url('public/admin/css/presentation-style.css')}}"/>
<script src="{{ url('public/admin/js/jquery.domenu-0.95.77.min.js')}}"></script>
<script src="{{ url('public/admin/js/select2.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{ url('public/admin/css/select2.min.css') }}"/>
<style>
    .alert.alert-info.alert-dismissable {
        margin-top: 50px;
    }
</style>
<div style="padding: 25px;"></div>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h3>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>  <a href="">Home</a>
                    </li>
                    <li class="active">
                        <span class="fa fa-bars"></span> Quản lý menu
                    </li>
                </ol>
            </h3>
        </div>    
    </div>
</div>
<div style="padding: 10px;"></div>
<div class="row">
    <div class="col-lg-4">
        <div class="list-group">
            <a href="{{ url('admin/menu/1')}}" class="list-group-item {!! $menu1 !!}">
                <h4 class="list-group-item-heading">Menu top</h4>
                <p class="list-group-item-text">Menu hiện thị ở đầu website</p>
            </a>
        </div>
        <div class="list-group">
            <a href="{{ url('admin/menu/2')}}" class="list-group-item {!! $menu2 !!}">
                <h4 class="list-group-item-heading">Menu chính</h4>
                <p class="list-group-item-text">menu hiển thị ở chính giữa website</p>
            </a>
        </div>

        <div class="list-group">
            <a href="{{ url('admin/menu/3')}}" class="list-group-item {!! $menu3 !!}">
                <h4 class="list-group-item-heading">Menu danh mục</h4>
                <p class="list-group-item-text">Menu danh mục sản phẩm</p>
            </a>
        </div>


        <div class="list-group">
            <a href="{{ url('admin/menu/4')}}" class="list-group-item {!! $menu4 !!}">
                <h4 class="list-group-item-heading">Hiển thị trang chủ</h4>
                <p class="list-group-item-text">Chế độ hiển thị sản phẩm ở trang chủ</p>
            </a>
        </div>

    
    </div>

    <div class="col-lg-8">
        <div class="dd" id="domenu-1">
            <button id="domenu-add-item-btn" class="dd-new-item">+</button>
            <li class="dd-item-blueprint">
                <button class="collapse" data-action="collapse" type="button" style="display: none;">–</button>
                <button class="expand" data-action="expand" type="button" style="display: none;">+</button>
                <div class="dd-handle dd3-handle">Drag</div>
                <div class="dd3-content">
                    <span class="item-name">[item_name]</span>
                    <!-- @migrating-from 0.13.29 button container-->
                    <!-- .dd-button-container will hide once an item enters the edit mode -->
                    <div class="dd-button-container">
                        <!-- @migrating-from 0.13.29 add button-->
                        <button class="custom-button-example">&#x270E;</button>
                        <button class="item-add">+</button>
                        <button class="item-remove" data-confirm-class="item-remove-confirm">&times;</button>
                    </div>
                    <!-- Inside of .dd-edit-box you can add your custom input fields -->
                    <div class="dd-edit-box" style="display: none;">
                        <!-- data-placeholder has a higher priority than placeholder -->
                        <!-- data-placeholder can use token-values; when not present will be set to "" -->
                        <!-- data-default-value specifies a default value for the input; when not present will be set to "" -->
                        <input type="text" name="title" autocomplete="off" placeholder="Item"
                        data-placeholder=""
                        data-default-value="Item. {?numeric.increment}">
                        @if ($id != 4)
                        <select style="margin: 0;padding:0" name="custom-select">
                            <option>Nhập hoặc chọn đường dẫn...</option>
                            <optgroup label="Danh mục sản phẩm">
                                @foreach ($menu as $item)
                                <option value="{{url('')}}/category/{!! $item['alias'] !!}_{!! $item['id'] !!}/">{{$item['name']}}</option>
                                @endforeach
                            </optgroup>
                        </select>

                        @else 
                            <select style="margin: 0;padding:0" name="custom-select">
                            <option value="0">Sản phẩm mới nhất</option>
                            <optgroup label="Danh mục sản phẩm">
                                @foreach ($menu as $item)
                                <option value="">{{$item['name']}}</option>
                                @endforeach
                            </optgroup>

                        </select>
                        @endif
                        <!-- @migrating-from 0.13.29 an element ".end-edit" within ".dd-edit-box" exists the edit mode on click -->
                        <i class="end-edit">Lưu</i>
                    </div>
                </div>
            </li>
            <ol class="dd-list"></ol>
        </div>
{{--
<div id="domenu-1-output" class="output-preview-container" >
<h4>JSON</h4>
<textarea style="width: 100%; min-height: 300px;" name="jsonOutput" class="jsonOutput"></textarea>
<input type="button" name="clearLocalStorage" class="clearLocalStorage" value="Reset demo">
</div>
--}}

<script>
    $(document).ready(function() {
        var $domenu            = $('#domenu-1'),
        domenu             = $('#domenu-1').domenu(),
        $outputContainer   = $('#domenu-1-output'),
        $jsonOutput        = $outputContainer.find('.jsonOutput'),
        $clearLocalStorage = $outputContainer.find('.clearLocalStorage');
        $domenu.domenu({
            slideAnimationDuration: 0,
            select2:                {
                support: true,
                params:  {
                    tags: true
                }
            },
//data:   '[{"id":3,"title":"Trang Chủ","customSelect":"http://laravel.dev/","__domenu_params":{},"select2ScrollPosition":{"x":0,"y":0}},{"id":2,"title":"Login","customSelect":"http://laravel.dev/login","__domenu_params":{},"select2ScrollPosition":{"x":0,"y":0}},{"id":1,"title":"Register","customSelect":"http://laravel.dev/register","__domenu_params":{},"select2ScrollPosition":{"x":0,"y":0}}]'
data:   JSON.stringify({!! $data !!})
})
// Example: initializing functionality of a custom button #21
.onCreateItem(function(blueprint) {
// We look with jQuery for our custom button we denoted with class "custom-button-example"
// Note 1: blueprint holds a reference of the element which is about to be added the list
var customButton = $(blueprint).find('.custom-button-example');

// Here we define our custom functionality for the button,
// we will forward the click to .dd3-content span and let
// doMenu handle the rest
customButton.click(function() {
    blueprint.find('.dd3-content span').first().click();
});
})
// Now every element which will be parsed will go through our onCreateItem event listener, and therefore
// initialize the functionality our custom button
.parseJson()
.on(['onItemCollapsed', 'onItemExpanded', 'onItemAdded', 'onSaveEditBoxInput', 'onItemDrop', 'onItemDrag', 'onItemRemoved', 'onItemEndEdit'], function(a, b, c) {
    $jsonOutput.val(domenu.toJson());
});


$clearLocalStorage.click(function() {
    if(true) window.localStorage.clear();
    window.location.reload();
});

$jsonOutput.val(domenu.toJson());
});
</script>

<div class="form-group text-center" style="padding-top: 20px;">
    <div id="domenu-1-output" class="output-preview-container" >
        <form method="POST">
            <input type="hidden" value="{!! csrf_token() !!}" name="_token"/>
            <input type="hidden" name="jsonOutput" class="jsonOutput"/>
            <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Cập nhật</button>
            <button type="reset" name="clearLocalStorage" class="btn btn-warning clearLocalStorage"><i class="glyphicon glyphicon-repeat"></i> Hủy bỏ</button>
        </form>
    </div>
</div>

</div>
</div>
@endsection()