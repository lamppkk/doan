@extends('admin.master')
@section('title', 'Quản lý liên hệ')
@section('content')
@section('numpage', 7)
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h3>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>  <a href="">Home</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-list"></i> Danh sách liên hệ
                    </li>
                </ol>
            </h3>
        </div>
    </div>
	
</div>
<!-- /.row -->
<div style="padding: 10px;"></div>
@include('admin.checkErr')
<form action="" method="post">
<input type="hidden" value="{!! csrf_token() !!}" name="_token"/>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table id="table" class="table table-bordered table-hover table-striped" cellspacing="0">
				<div class="col-lg-3">
                    <select name="action" style="margin-left: -15px; width: 115px;" class="form-control input-sm">
                        <option value=''> Chọn tác vụ</option>
                        <option value="delete">Xóa</option>
                    </select>
                </div>

                <div class="col-lg-3">
                    <button type="submit" name="btnXoaN" style="margin-left: -155px; height: 30px;line-height: 17px;" class="btn btn-primary"> Áp dụng</button>
                </div>
				
                <thead>
                    <tr>
                        <th width="20"><input class="no-sort" type="checkbox" id="selectall" name="selectall" /></th>
                        <th width="150">Họ tên </th>
                        <th width="60">Email</th>
                        <th width="90">Điện thoại</th>
                        <th width="250">Nội dung</th>
                        <th width="60">Thao tác</th>
                    </tr>
                </thead>

                <tbody>
				
					@foreach ($data as $item)
						<tr>
							<td width="20">
								<input type="checkbox" name="cbitem[]" value="{!! $item['id'] !!}" class="checkbox" />
							</td>
							<td width="150">{{ $item->name }} </td>
                            <td width="60">{{ $item->email }}</td>
                            <td width="90">0{{ $item->phone }}</td>
                            <td width="250">
                             {{ $item->content }}
                            </td>
							<td width="60">
								<a onclick="return confirm('Bạn có muốn xóa');" type="button" class="btn btn-danger">
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