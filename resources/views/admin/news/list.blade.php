@extends('admin.master')
@section('title', 'Quản lý tin tức')
@section('content')

<div class="row">
    <div class="col-lg-10">
        <div class="page-header">
            <h3>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>  <a href="">Home</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-list"></i> Danh sách tin tức
                    </li>
                </ol>
            </h3>
        </div>
    </div>
	<div class="col-lg-2">	
		<div class="page-header">
			<h3>
				<a href="{!! URL::route('admin.news.getAdd') !!}" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Thêm mới </a> 
			</h3>
		</div>
	</div>

</div>

<div style="padding: 10px;"></div>
<form action="{!! route('admin.news.postAction') !!}" method="post">
<input type="hidden" value="{!! csrf_token() !!}" name="_token"/>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table id="table" class="table table-bordered table-hover">
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
                        <th width="250">Tiêu đề</th>
                        <th width="70">Ảnh đại diện</th>
                        <th width="40">Lượt xem</th>
                        <th width="100">Ngày tạo</th>
                        <th width="40">Trang thái</th>
                       <th width="120">Thao tác</th>
                    </tr>
                </thead>

                <tbody>
				@foreach ($data as $news)
                    <tr>
                        <td width="20">
								<input type="checkbox" name="cbitem[]" value="{!! $news['id'] !!}" class="checkbox" />
						</td>
                        <td width="250">{!! $news['title'] !!}</td>
                        <td  width="70"><img width="60" class="img-circle" src="{!! $news['images'] !!}" alt="{!! $news['title'] !!}" /></td>
                        <td width="40">{!! $news['views'] !!}</td>
                        <td  width="100">{!! $news['created_at'] !!}</td>
                        <td  width="40">@if ($news['status'] == 1) Hiện thị @else Ẩn @endif</td>
                        <td width="120">
								<a href="{!! URL::route('admin.news.getEdit', $news['id']) !!}" class="btn btn-warning">
									<i class="glyphicon glyphicon-pencil"></i> Sửa 
								</a>
								<a href="{!! URL::route('admin.news.getDelete', $news['id']) !!}" onclick="return confirm('Bạn có muốn xóa');" type="button" class="btn btn-danger">
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