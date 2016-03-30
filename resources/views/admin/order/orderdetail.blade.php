@extends('admin.master')
@section('title', 'Quản lý đơn hàng')
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
						<i class="fa fa-table"></i> Chi tiết đơn hàng
					</li>
				</ol>
			</h3>
		</div>    
	</div>
</div>

@include('admin.checkErr')
<div style="margin-top: 15px;"></div>
<div class="row">
	<form method="POST" action="{!! route('admin.categorys.postDeleteN') !!}" class="form-horizontal">
		<input type="hidden" value="{!! csrf_token() !!}" name="_token"/>
		<div class="col-lg-7">
			<div class="panel panel-default" style="min-height: 350px">
				<div class="panel-heading">Chi tiết sản phẩm</div>
				<div class="panel-body">
					<div class="table-responsive" style="">
						<div class="col-lg-7"  style="padding-bottom: 10px; top: 7px; position: relative;left: -13px;">Tổng tiền: <label style="font-size:15px;font-weight: bold; color:red;">{!! number_format(getTotal($order->id))!!} VNĐ</label></div>
						<table id="tbl" class="table table-bordered table-hover table-striped" cellspacing="0">
							<thead>
								<tr>
									<th  width="50">Mã SP</th>
									<th width="150">Tên sản phẩm</th>
									<th width="15">Số lượng</th>
									<th width="70">Đơn giá</th>
									<th width="80">Thao tác</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($orderdetail as $item)
								<tr>
									<td width="50">
										{!! $item['product_id']!!}
									</td>
									<td>{!! getProName($item['product_id']) !!}</td>
									<td width="15"> {!! $item['qty']!!} </td>
									<td>
										{!! number_format($item['price'])!!} VNĐ
									</td>
									<th width="80">
										<a href="javascript:void(0)" class="btn btn-primary">
											<i class="glyphicon glyphicon-pencil"></i>  
										</a>
										<a href="javascript:void(0)" onclick="return confirm('Bạn có muốn xóa');" type="button" class="btn btn-danger">
											<i class="glyphicon glyphicon-remove"></i> 
										</a>
	
									</th>
								</tr>
								@endforeach
								

							</tbody>
						</table>
						 <script type="text/javascript">
					        $(document).ready(function() {
					            $('#tbl').DataTable({
					                "language": {
					                    "url": "{{ url('dataTable.json')}}"
					                },
					                "bPaginate": true,
					                "bLengthChange": false,
					                "bFilter": false,
					                "bInfo": false,
					                "bAutoWidth": false,
					                "pageLength": 2,

					            });
					        });
							
					    </script>
					</div>
				</div>
			</div>
		</div>
	</form>

	<form method="POST" action="{!! route('admin.categorys.getList') !!}" class="form-horizontal">
		<input type="hidden" value="{!! csrf_token() !!}" name="_token"/>

		<div class="col-lg-5">
			<div class="panel panel-default" style="min-height: 350px"> 
				<div class="panel-heading">Thông tin khách hàng</div>
				<div class="panel-body">
					<div class="form-group col-sm-12">
						<label class="col-sm-4 control-label">Họ tên: </label>
						<label class="col-sm-8 control-label"> {!!$order->name!!}</label>
					</div>
						
					<div class="form-group col-sm-12">
						<label class="col-sm-4 control-label">Điện thoại: </label>
						<label class="col-sm-8 control-label"> 0{!!$order->phone!!}</label>
					</div>

					<div class="form-group col-sm-12">
						<label class="col-sm-4 control-label">Địa chỉ: </label>
						<label class="col-sm-8 control-label"> {!!$order->address!!}</label>
					</div>

					<div class="form-group col-sm-12">
						<label class="col-sm-4 control-label">Email: </label>
						<label class="col-sm-8 control-label"> {!!$order->email!!}</label>
					</div>

					<div class="form-group col-sm-12">
						<label class="col-sm-4 control-label">Ngày đặt: </label>
						<label class="col-sm-8 control-label"> {!!date( 'd/m/Y h:i:s A', strtotime($order['date']));!!}</label>
					</div>
					<div class="form-group col-sm-12">
						<label class="col-sm-4 control-label">Ghi chú: </label>
						<label class="col-sm-8 control-label"> @if($order->note !='') {!!$order->note!!} @else Không @endif</label>
					</div>
					
				</div>

			</div>
		</div>
	</form>
</div>
<!-- /.row -->

@endsection()