@extends('admin.master')
@section('title', 'Quản lý quảng cáo')
@section('content')
<script src="{{ url('public/admin/js/jquery.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{ url('public/admin/css/jquery.domenu-0.95.77.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{ url('public/admin/css/presentation-style.css')}}"/>
<script src="{{ url('public/admin/js/jquery.domenu-0.95.77.min.js')}}"></script>
<script src="{{ url('public/admin/js/select2.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{ url('public/admin/css/select2.min.css') }}"/>
<style>
    .alert {
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
                        <span class="fa fa-bars"></span> Quản lý quảng cáo 
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
            <a href="{{ url('admin/ads/1')}}" class="list-group-item {!! $ads1 !!}">
                <h4 class="list-group-item-heading">Slider trang chủ</h4>
                <p class="list-group-item-text">Slider hiện thị trang chủ website</p>
            </a>
        </div>
        <div class="list-group">
            <a href="{{ url('admin/ads/2')}}" class="list-group-item {!! $ads2 !!}">
                <h4 class="list-group-item-heading">Quảng cáo trái 200x200 </h4>
                <p class="list-group-item-text">Quảng cáo bên trái trang chi tiết sản phẩm</p>
            </a>
        </div>

        <div class="list-group">
            <a href="{{ url('admin/ads/3')}}" class="list-group-item {!! $ads3 !!}">
                <h4 class="list-group-item-heading">Quảng cáo phải 220x220 </h4>
                <p class="list-group-item-text">Quảng cáo bên phải trang danh mục sản phẩm</p>
            </a>
        </div>

        <div class="list-group">
            <a href="{{ url('admin/ads/4')}}" class="list-group-item {!! $ads4 !!}">
                <h4 class="list-group-item-heading">Quảng cáo dưới trang 728x90</h4>
                <p class="list-group-item-text">Quảng cáo dưới cùng trang web</p>
            </a>
        </div>


    </div>
    <div class="col-lg-8">
        <div class="panel panel-default" style="min-height: 320px;">
            <div class="panel-body">
                <form method="POST" action="{{ route('admin.postAds', $id) }}">
                    {{ csrf_field() }}
                    @if ($id == 2 || $id == 3)
                        <div class="form-group">
                            <label for="link">Liên kết</label>
                            <input type="text" value="{{ getOption('ads-link' . $id) }}" class="form-control" name="ads-link{{ $id }}" id="ads-link{{ $id }}" placeholder="Liên kết">
                        </div>
                        <div class="form-group">
                            <label for="image">Hình ảnh</label>

                            <div class="text-center active text-muted form-control" style="height: 220px;">
                                <img onclick="selectImg('ads-img{{ $id }}', 'ads-image{{ $id }}')" class="cursor" width="200" height="200"  src="{{ getOption('ads-image' . $id) }}" name="ads-img{{ $id }}" id="ads-img{{ $id }}" />
                                <input required type="hidden" value="{{ getOption('ads-image' . $id) }}" name="ads-image{{ $id }}" id="ads-image{{ $id }}" />
                            </div>

                        </div>
                        
                    @elseif ($id == 4)
                        <div class="form-group">
                            <label for="link">Liên kết</label>
                            <input type="text" value="{{ getOption('ads-link' . $id) }}" class="form-control" name="ads-link{{ $id }}"  id="ads-link{{ $id }}"  placeholder="Liên kết">
                        </div>
                        <div class="form-group">
                            <label for="image">Hình ảnh</label>

                            <div class="text-center active text-muted form-control" style="height:95px;">
                                <img onclick="selectImg('ads-img{{ $id }}', 'ads-image{{ $id }}')" class="cursor" width="650" height="80"  src="{{ getOption('ads-image' . $id) }}" name="ads-img{{ $id }}" id="ads-img{{ $id }}" />
                                <input required type="hidden" value="{{ getOption('ads-image' . $id) }}" name="ads-image{{ $id }}" id="ads-image{{ $id }}" />
                            </div>

                        </div>

                    @else
                    <div class="row text-center">
                        <div class="form-group">
                            <div class="col-md-7">
                                <img onclick="selectImg('ads-img11', 'ads-image11')" class="cursor" width="400" height="300" src="{{ getOption('ads-image11')}}" name="ads-img11" id="ads-img11" />
                                <input required type="hidden" value="{{ getOption('ads-image11')}}" name="ads-image11" id="ads-image11" />

                            </div>

                            <div class="col-md-5">
                                <img onclick="selectImg('ads-img12', 'ads-image12')" class="cursor" width="220" height="130" src="{{ getOption('ads-image12')}}" name="ads-img12" id="ads-img12" />
                                <input required type="hidden" value="{{ getOption('ads-image12')}}" name="ads-image12" id="ads-image12" />
                                    
                                <div style="padding: 20px;"></div>

                                <img onclick="selectImg('ads-img13', 'ads-image13')" class="cursor" width="220" height="130" src="{{ getOption('ads-image13')}}" name="ads-img13" id="ads-img13" />
                                <input required type="hidden" value="{{ getOption('ads-image13')}}" name="ads-image13" id="ads-image13" />

                            </div>
                        </div>
                    </div>
                    <br />
                    @endif
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Lưu lại</button>
                        <button type="button" class="btn btn-default">Hủy bỏ</button>
                    </div>
                </form>


            </div>
        </div>

    </div>
</div>
@endsection()