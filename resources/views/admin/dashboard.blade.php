@extends('admin.master')
@section('title', 'Tổng quan')
@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>  <a href="">Home</a>
                </li>
                <li class="active">
                    <i class="fa fa-dashboard"></i> Tổng quan
                </li>
            </ol>
        </h3>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="fa fa-info-circle"></i>   
            Chào mừng bạn đến với trang quản trị. Trước tiên hãy <strong><u><a href="">thiết lập cấu hình</u></a></strong> cho website.
            
        </div>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{!!$gopy!!}</div>
                        <div>Góp ý mới!</div>
                    </div>
                </div>
            </div>
            <a href="{{url('gopy/list')}}" title="Góp ý">
                <div class="panel-footer">
                    <span class="pull-left">Xem chi tiết</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{!!count($order)!!}</div>
                        <div>Đơn hàng mới!</div>
                    </div>
                </div>
            </div>
            <a href="{{url('order')}}" title="Đơn hàng">
                <div class="panel-footer">
                    <span class="pull-left"><a href="">Xem chi tiết</a></span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{!!count($product)!!}</div>
                        <div>Sản phẩm</div>
                    </div>
                </div>
            </div>
            <a href="{{url('product/list')}}" title='Sản phẩm'>
                <div class="panel-footer">
                    <span class="pull-left">Xem chi tiết</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-file fa-fw"></i>Sản phẩm mới</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped" >
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Đơn giá</th>
                                <th>Trang thái</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($product) <= 0) 
                            <tr>
                                <td colspan="5" align="center">Không có sản phẩm mới nào!</td>
                            </tr>
                        @endif
                        @foreach($product as $item) 
                            <tr>
                                <td>{!!$item['id']!!}</td>
                                <td>{!!$item['name']!!}</td>
                                <td><img src="{!!$item['images']!!}" width="46" alt="{!!$item['name']!!}" class="img-circle" /></td>
                                <td>{!!number_format($item['price'])!!} VNĐ</td>
                                <td>
                                    @if($item['status'] ==1 ) Hiển thị
                                    @else Ẩn
                                    @endif
                                </td>
                            </tr>
                           
                        @endforeach
                        </tbody>
                    </table>
                </div>
                 <div class="text-right">
                    <a href="{{url('admin/products/list')}}">Xem tất cả sản phẩm <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-shopping-cart fa-fw"></i> Đơn đặt hàng gần nhất</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên KH</th>
                                <th>Ngày đặt</th>
                                <th>Tổng tiền</th>
                                <th>Tình trạng</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($order as $item) 
                        <tr style="height:60px;">
                            <td>{!!$item['id']!!}</td>
                            <td>{!!$item['name']!!}</td>
                            <td>{!!date( 'd/m/Y', strtotime($item['date']))!!}</td>
                            <td>{!!number_format(getTotal($item['id']))!!} VNĐ</td>
                            <td>{!!$item['status']!!}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    <a href="">Xem tất cả đơn đặt hàng <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection()