@extends('admin.master')
@section('title', 'Quản lý sản phẩm')
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
                        <i class="fa fa-list"></i> Danh sách sản phẩm
                    </li>
                </ol>
            </h3>
        </div>
    </div>
	<div class="col-lg-2">	
		<div class="page-header">
			<h3>
				<a href="{!! URL::route('admin.products.getAdd') !!}" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Thêm mới </a> 
			</h3>
		</div>
	</div>

</div>
<!-- /.row -->
<div style="padding: 10px;"></div>
@include('admin.checkErr')
<form action="{!! route('admin.products.postAction') !!}" method="post">
<input type="hidden" value="{!! csrf_token() !!}" name="_token"/>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table id="table" class="table table-bordered table-hover table-striped" cellspacing="0">
				<div class="col-lg-3">
                    <select name="action" style="margin-left: -15px; width: 115px;" class="form-control input-sm">
                    <option value=''> Chọn tác vụ</option>
                    <option value="delete">Xóa</option>
                    <option value="hienthi">Hiển thị</option>
                    <option value="an">Ẩn</option>
                    </select>
                </div>

                <div class="col-lg-3">
                    <button type="submit" name="btnXoaN" style="margin-left: -155px; height: 30px;line-height: 17px;" class="btn btn-primary"> Áp dụng</button>
                </div>
				
                <thead>
                    <tr>
                        <th width="20"><input class="no-sort" type="checkbox" id="selectall" name="selectall" /></th>
                        <th width="80">Tên sản phẩm</th>
                        <th width="40">Hình ảnh</th>
                        <th width="90">Đơn giá</th>
                        <th width="150">Mô tả</th>
                        <th width="50">Trạng thái</th>
                        <th width="100">Thao tác</th>
                    </tr>
                </thead>

                <tbody>
				
					@foreach ($data as $item)
						<tr>
							<td width="20">
								<input type="checkbox" name="cbitem[]" value="{!! $item['id'] !!}" class="checkbox" />
							</td>
							<td>{!! $item['name'] !!}</td>
							<td><img src="{!! $item['images'] !!}" width="46" alt="{!! $item['name'] !!}" class="img-circle" /></td>
							<td>{!! number_format($item['price']) !!} VND</td>
							<td>{!! mb_substr($item['description'], 0,70, "utf-8") !!}, ...</td>
							
							
							<td>@if($item['status'] == 1) Hiển thị @else Ẩn @endif</td>
							<td width="150">
								<a href="{!! URL::route('admin.products.getEdit', $item['id']) !!}" class="btn btn-warning">
									<i class="glyphicon glyphicon-pencil"></i> Sửa 
								</a>
								<a href="{!! URL::route('admin.products.getDelete', $item['id']) !!}" onclick="return confirm('Bạn có muốn xóa');" type="button" class="btn btn-danger">
									<i class="glyphicon glyphicon-remove"></i> Xóa
								</a>
							</td>
						</tr>
					@endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>    
</form>
@endsection()