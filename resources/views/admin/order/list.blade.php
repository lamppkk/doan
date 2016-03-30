@extends('admin.master')
@section('title', 'Quản lý đơn hàng')
@section('content')
@section('numpage', 10)
<div class="row">
    <div class="col-lg-10">
        <div class="page-header">
            <h3>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>  <a href="">Home</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-list"></i> Danh sách đơn hàng
                    </li>
                </ol>
            </h3>
        </div>
    </div>
	<div class="col-lg-2">	
		<div class="page-header">
			<h3>
				<a href="{{--!! URL::route('admin.products.getAdd') !!--}}" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Thêm mới </a> 
			</h3>
		</div>
	</div>

</div>
<!-- /.row -->
<div style="padding: 10px;"></div>
@include('admin.checkErr')

<!-- <form action="{{--!! route('admin.products.postAction') !!--}}" method="post">
<input type="hidden" value="{!! csrf_token() !!}" name="_token"/> -->
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table id="table" class="table table-bordered table-hover table-striped" cellspacing="0">
				<div class="col-lg-3">
                    <select name="action" style="margin-left: -15px; width: 135px;" class="form-control input-sm">
                        <option value=''>Chọn tác vụ</option>
                        <option value="1">Đã thanh toán</option>
                        <option value="2">Đang vận chuyển</option>
                        <option value="3">Hoàn thành</option>
                        <option value="4">Hủy đơn hàng</option>
                    </select>
                </div>

                <div class="col-lg-3">
                    <button type="submit" name="btnXoaN" style="margin-left: -140px; height: 30px;line-height: 17px;" class="btn btn-primary"> Áp dụng</button>
                </div>
				
                <thead>
                    <tr>
                        <th width="10"><input class="no-sort" type="checkbox" id="selectall" name="selectall" /></th>
                        <th width="80">Đơn hàng</th>
                        <th width="80">Ngày đặt</th>
                        <th width="80">Khách hàng</th>
                         <th width="80">Tổng tiền</th>
                         <th width="60">Trạng thái</th>
                        <th width="5">Chức năng</th>
                    </tr>
                </thead>

                <tbody>
					@foreach ($data as $item)
						<tr>
							<td width="10">
								<input type="checkbox" name="cbitem[]" value="{!! $item['id'] !!}" class="checkbox" />
							</td>
							<td>
                                <a title="Xem chi tiết đơn hàng" href="{!! URL::route('admin.order.getOrderDetail', $item['id']) !!}"> <i class="fa fa-eye"></i> DH{!!str_pad($item['id'], 4, '0', STR_PAD_LEFT)!!}</a>
                            </td>
							<td>{!!date( 'd/m/Y h:i:s A', strtotime($item['date']));!!}</td>
							<td>{!! $item['name'] !!}</td>
							<td>{!!number_format(getTotal($item['id']))!!} VND</td>
                            <td width="60">
                                @if ($item['status'] == 0)
                                    <i class="glyphicon glyphicon-plus"></i> Mới đặt hàng
                                @elseif ($item['status'] == 1)
                                    <i class="glyphicon glyphicon-usd"></i> Đã thanh toán
                                @elseif($item['status'] == 2)
                                    <i class="glyphicon glyphicon-plane"></i> Đang chuyển hàng
                                @else
                                    <i class="glyphicon glyphicon-ok"></i> Hoàn thành
                                @endif

                            </td>
                            <td width="5">

                                <span data-toggle="tooltip" data-placement="top" title="Cập nhật trạng thái đơn hàng"><button data-toggle="modal" data-target="#modalEdit{!!$item['id']!!}" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i>  </button></span>

                                <span data-toggle="tooltip" data-placement="top" title="Hủy đơn hàng"><button type="button" data-toggle="modal" data-target="#modalDel{!!$item['id']!!}" class="btn btn-warning"><i class="glyphicon glyphicon-remove"></i>  </button></span>
                            </td>
						</tr>
                        <!-- Modal edit -->
                        <div class="modal fade" id="modalEdit{!!$item['id']!!}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Cập nhật trạng thái đơn hàng DH{!!str_pad($item['id'], 4, '0', STR_PAD_LEFT)!!}</h4>
                                        </div>
                                   
                                        <div class="modal-body" style="height: 100px;">

                                            <select id="select{!!$item['id']!!}" class="form-control" style="margin-top: 20px;"> 
                                                <option value="0" @if ($item['status'] == 0) selected @endif>Mới đặt hàng</option>
                                                <option value="1" @if ($item['status'] == 1) selected @endif>Đã thanh toán</option>
                                                <option value="2"@if ($item['status'] == 2) selected @endif >Đang vận chuyển</option>
                                                <option value="3" @if ($item['status'] == 3) selected @endif>Hoàn thành</option>
                                            </select>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal" id="btnClose{!!$item['id']!!}">Đóng</button>
                                            <button type="button" oid="{!!$item['id']!!}" id="btnEdit{!!$item['id']!!}" class="btn btn-primary">Lưu lại </button>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>

                        <!--js-->
                        <script type="text/javascript">
                            $(document).on('click','#btnEdit{!!$item['id']!!}',function(){
                                var id   = $(this).attr('oid');
                                var status = $("#select{!!$item['id']!!} option:selected").val();
                                
                                $.ajax({
                                    url: APP_URL + "/admin/order/editOrder/" + id + "/" + status,
                                    type: "GET",
                                    cache: false,
                                    data: {"id": id, 'status': status}, 
                                    success: function(data){ 
                                        //alert('Cập nhật đơn hàng thành công!');
                                        location.reload();
                                    }
                                });
                            });
    
                        </script>
                        <!-- Modal edel -->
                        <div class="modal fade" id="modalDel{!!$item['id']!!}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Hủy đơn hàng DH{!!str_pad($item['id'], 4, '0', STR_PAD_LEFT)!!}</h4>
                                        </div>
                                        <div class="modal-body">
                                        Bạn có chắc chắn muốn hủy đơn hàng không?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                                            <button type="button" oid="{!!$item['id']!!}" id="btnDel{!!$item['id']!!}"  class="btn btn-primary">OK </button>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!--js-->
                        <script type="text/javascript">
                            $(document).on('click','#btnDel{!!$item['id']!!}',function(){
                                var id   = $(this).attr('oid');
                                $.ajax({
                                    url: APP_URL + "/admin/order/deleteOrder/" + id,
                                    type: "GET",
                                    cache: false,
                                    data: {"id": id}, 
                                    success: function(data){ 
                                        //alert('Hủy đơn hàng thành công!');
                                        location.reload();

                                    }
                                });
                            });
    
                        </script>

					@endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>    
@endsection()