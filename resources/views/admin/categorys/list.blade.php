@extends('admin.master')
@section('title', 'Quản lý loại sản phẩm')
@section('content')
@section('numpage', 5)
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h3>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>  <a href="">Home</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-table"></i> Quản lý loại sản phẩm
                    </li>
                </ol>
            </h3>
        </div>    
    </div>
</div>

@include('admin.checkErr')


<div class="row">
	<form method="POST" action="{!! route('admin.categorys.getList') !!}" class="form-horizontal">
		<input type="hidden" value="{!! csrf_token() !!}" name="_token"/>
		<div class="col-lg-4">
			<h2>Thêm loại sản phẩm</h2>
			<div style="margin-top: 25px;"></div>
				<input type="hidden" name="id" id="id" />
				<div class="form-group">
					<label for="txtTen" class="col-sm-3 control-label">Tên loại</label>
					<div class="col-sm-9">
						<input type="text" onkeyup="ChangeToSlug('txtTen','txtAlias')"  class="form-control" name="txtTen" id="txtTen" placeholder="" required> 
					</div>
				</div>


				<div class="form-group">
					<label for="txtAlias" class="col-sm-3 control-label">Link</label>
					<div class="col-sm-9">

						<div class="input-group"> 
							<span class="input-group-addon">{{ url('') }}/</span> 
							<input type="text" style="text-align: left; padding: 0" class="form-control input-group-addon" name="txtAlias" value="" id="txtAlias" placeholder="" required> 
							<span class="input-group-addon">.html</span> 
						</div>
						
					</div>
				</div>

				<div class="form-group">
					<label for="txtMota" class="col-sm-3 control-label">Mô tả</label>
					<div class="col-sm-9">
						<textarea class="form-control" name="txtMota" id="txtMota"  rows="4" required></textarea>
					</div>
				</div>
				
				<div class="form-group">
					<label for="txtTukhoa" class="col-sm-3 control-label">Từ khóa</label>
					<div class="col-sm-9">
						<textarea class="form-control" name="txtTukhoa" id="txtTukhoa" rows="4" required></textarea>
					</div>
				</div>

				<div class="form-group">
					<label for="txtLoaicha" class="col-sm-3 control-label">Loại cha</label>
					<div class="col-sm-9">
						<select class="form-control"  name="txtLoaicha" id="txtLoaicha">
							<option value="0"> --- Không --- </option>
							@foreach (GetCat(0) as $item)
								<option value="{{$item['id']}}">{{$item['name']}}</option>
								
							@endforeach
						   
						</select>
						
					</div>
				</div>
				<div style="margin-top: 25px;"></div>
				<div class="form-group" style="margin-left: 50px;">
					<div class="col-sm-offset-2 col-sm-10">
						<button name="btnCapnhat" id="btnCapnhat" type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> <span class="action">Thêm </span></button>
						<button type="reset" class="btn btn-warning"><i class="glyphicon glyphicon-repeat"></i> Hủy bỏ</button>
					</div>
				</div>
		</div>
	</form>


	<form method="POST" action="{!! route('admin.categorys.postDeleteN') !!}" class="form-horizontal">
		<input type="hidden" value="{!! csrf_token() !!}" name="_token"/>
		<div class="table-responsive" style="margin-top: 35px;">
			<table class="table table-bordered table-hover table-striped" cellspacing="0" id="table">
				<div class="col-lg-3">
                    <select name="action" style="margin-left: -15px; width: 115px;" class="form-control input-sm">
                    <option> Chọn tác vụ</option>
                    <option value="delete">Xóa</option>
                    </select>
                </div>

                <div class="col-lg-3">
                    <button type="submit" name="btnXoaN" style="margin-left: -75px; height: 30px;line-height: 17px;" class="btn btn-primary"> Áp dụng</button>
                </div>
            
                <thead>
                    <tr>
                        <th  width="20"><input class="no-sort" type="checkbox" id="selectall" name="selectall" /></th>
                        <th width="100">Tên loại</th>
                        <th>Mô tả</th>
                        <th width="70">Loại cha</th>
                         <th width="130">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td width="20">
                            <input type="checkbox" name="cbitem[]" value="{!! $item['id'] !!}" class="checkbox" />
                        </td>
                        <td>{!! $item['name'] !!}</td>
                        <td>
						{!! mb_substr($item['description'], 0,50, "utf-8") !!}, ...
						
						</td>
                        <td>
                            <?php
                                if($item['parent_id'] > 0) {
                                    $parent = DB::table('categorys')->where('id',$item['parent_id'])->first();
                                    echo $parent->name;
                                }
                                else 
                                    echo '=> Không <=';
                            ?>
                          
                        </td>
                       
                        
                        <td width="130">
                            <a href="{!! URL::route('admin.categorys.getEdit', $item['id']) !!}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Sửa </a>

                             <a href="{!! URL::route('admin.categorys.getDelete', $item['id']) !!}" onclick="return confirm('Bạn có muốn xóa');" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Xóa</a>
                            
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