@extends('admin.master')
@section('title', 'Quản lý người dùng')
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
                        <i class="fa fa-table"></i>Quản lý người dùng
                    </li>
                </ol>
            </h3>
        </div>    
    </div>
</div>

@include('admin.checkErr')


<div class="row">
	<form method="POST" action="{!! route('admin.user.getList') !!}" class="form-horizontal">
		<input type="hidden" value="{!! csrf_token() !!}" name="_token"/>
		<div class="col-lg-4">
			<h2>Thêm người dùng</h2>
				<div class="form-group col-sm-12">
					<label for="txtUser" class="control-label">Tên người dùng: </label>
					<input type="text"  class="form-control" name="txtUser" id="txtUser" placeholder="" required> 
				</div>
				
				<div class="form-group col-sm-12">
					<label for="txtEmail" class="control-label">Email: </label>
					<input type="email"  class="form-control" name="txtEmail" id="txtEmail" placeholder="" required> 
				</div>
				
				<div class="form-group col-sm-12">
					<label for="txtPass" class="control-label">Mật khẩu:</label>
					<input type="password"  class="form-control" name="txtPass" id="txtPass" placeholder="" required> 
				</div>

				 <div class="form-group col-sm-12">
					<label for="txtRePass" class="control-label">Nhập lại mật khẩu:</label>
					<input type="password" class="form-control" name="txtRePass" id="txtRePass" placeholder="" > 
				</div>

				<div class="form-group col-sm-12">
					<label for="txtLevel" class="control-label">Quyền:</label>
					<select class="form-control"  name="txtLevel" id="txtLevel">
						<option value="0">Admin </option>
						<option value="1">Nhân viên </option>
					</select>
				</div>
				<div style="margin-top: 25px;"></div>
				<div class="form-group col-sm-12">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Thêm mới</button>
						<button type="reset" class="btn btn-warning"><i class="glyphicon glyphicon-repeat"></i> Hủy bỏ</button>
					</div>
				</div>
		</div>
	</form>


	<form method="POST" action="{!! route('admin.user.postAction') !!}" class="form-horizontal">
		<div class="table-responsive" style="margin-top: 45px;">
			<input type="hidden" value="{!! csrf_token() !!}" name="_token"/>
			<table class="table table-bordered table-hover table-striped" cellspacing="0" id="table">
				<div class="col-lg-3">
                    <select name="action" style="margin-left: -15px; width: 115px;" class="form-control input-sm">
                    <option> Chọn tác vụ</option>
                    <option value="delete">Xóa</option>
                    </select>
                </div>

                <div class="col-lg-3">
                    <button type="submit" name="" style="margin-left: -75px; height: 30px;line-height: 17px;" class="btn btn-primary"> Áp dụng</button>
                </div>
            
                <thead>
                    <tr>
                        <th  width="18"><input class="no-sort" type="checkbox" id="selectall" name="selectall" /></th>
                        <th width="120">Tên người dùng</th>
                        <th width="100">Email</th>
                        <th width="70">Quyền</th>
                        <th width="70">Trạng thái</th>
                        <th width="130">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
					@foreach ($data as $user)
                    <tr>
                        <td width="18">
                            <input type="checkbox" name="cbitem[]" value="{!!$user['id']!!}" class="checkbox" />
                        </td>
                        <td width="100">{!!$user['username']!!}</td>
                        <td width="100">{!!$user['email']!!}</td>
                        <td width="70">{!!$user['level']!!}</td>
                        <td width="70">{!!$user['status']!!}</td>
                        
                        <td width="130">
                            <a href="{!! URL::route('admin.user.getEdit', $user['id']) !!}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Sửa </a>
							<a href="{!! URL::route('admin.user.getDelete', $user['id']) !!}" onclick="return confirm('Bạn có muốn xóa');" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Xóa</a>
                        </td>
                    </tr>
					@endforeach
                </tbody>
            </table>
			</div>
		</div>
	</form>
</div>
<!-- /.row -->
@endsection()