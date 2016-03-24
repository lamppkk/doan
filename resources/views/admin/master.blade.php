<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
	<!-- jQuery -->
    <script src="{{ url('public/admin/js/jquery.js')}}"></script>
	<script type="text/javascript">
		//get url website in js
		var APP_URL = {!! json_encode(url('/')) !!};
	</script>
    <link href="{{ url('public/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ url('public/admin/css/sb-admin.css')}}" rel="stylesheet">
    <link href="{{ url('public/admin/css/myCss.css')}}" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="{{ url('public/admin/css/plugins/morris.css')}}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{ url('public/admin/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{ url('public/admin/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
	<script src="{{ url('public/admin/ckeditor/ckeditor.js')}}"></script>
	<script src="{{ url('public/admin/ckfinder/ckfinder.js')}}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style type="text/css">
        .required{
            color: red;
            font-weight: bold;
        }
        .navbar-inverse {
             background-color: #3c8dbc;
            border-color: #3c8dbc;
        }
        nav.navbar.navbar-inverse.navbar-fixed-top
        {
             background-color: #3c8dbc;
        }
        nav.navbar.navbar-inverse.navbar-fixed-top a
        {
              color: #fff;
        }
        .top-nav>li>a:hover, .top-nav>li>a:focus, .top-nav>.open>a, .top-nav>.open>a:hover, .top-nav>.open>a:focus {
            color: #fff;
         background-color: #367fa9;
        }
        nav.navbar.navbar-inverse.navbar-fixed-top .top-nav>.open>.dropdown-menu>li>a {
            color: #000;
        }
        .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
            border-color: #3c8dbc;
        }
        .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
            border-color: #3c8dbc;
        }
        ul.nav.navbar-nav.side-nav a {
            color: #E2E1E1;
        }
        .page-header{
            margin-top: 0px;
            margin-bottom: 0px;    
            padding-bottom:0px;    

        }
		
		.test {
			position: absolute;
			bottom: 0px;
			text-align: center;
			color: #ffffff;
			left: 64px;
		}
    </style>
</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('admin/dashboard')}}">Admin Panel</a>
				
				<a  style="position: absolute; font-size: 16px;top: 14px; left: 180px;" href="{{ url('') }}" target="_blank" title="Xem website của bạn">
					<i class="fa fa-lg fa-external-link"></i>
				</a>
		
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-user"></i> {!! Auth::user()->username !!}
						<b class="caret"></b>
					</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Cá nhân</a>
                        </li>
                      
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Đổi mật khẩu</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{!! url('logout') !!}"><i class="fa fa-fw fa-power-off"></i> Thoát</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li @if(Request::segment(2) =='dashboard') class="active" @endif>
                        <a href="{{ url('admin/dashboard') }}"><i class="fa fa-fw fa-dashboard"></i> Tổng quan</a>
                    </li>
					
					<li @if(Request::segment(2) == 'products' || Request::segment(2) == 'categorys') class="active" @endif>
                        <a href="javascript:;"  data-toggle="collapse" data-target="#sanpham"><i class="fa fa-fw fa-product-hunt"></i> Sản phẩm <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="sanpham" class="collapse">
							<li>
                                <a href="{{ url('admin/products/add') }}"><i class="fa fa-fw fa-plus"></i> Thêm sản phẩm mới</a>
                            </li>
							
							<li>
                                <a href="{{ url('admin/products/list') }}"><i class="fa fa-fw fa-list"></i> Tất cả sản phẩm</a>
                            </li>
						
							
                            <li>
								<a href="{{ url('admin/categorys/list') }}"><i class="fa fa-fw fa-tasks "></i> Danh mục sản phẩm </a>
							</li>
                        </ul>
                    </li>
					
					<li @if(Request::segment(2) == 'order') class="active" @endif>
                        <a href="{{ url('admin/order/list') }}"><i class="fa fa-fw fa-shopping-cart"></i> Đơn hàng</a>
                    </li>
					
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#noidung"><i class="fa fa-fw fa-file-text"></i> Trang nội dung <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="noidung" class="collapse">
							<li>
								<a href="{{ url('admin/news/list') }}">Tin tức</a>
							</li>
							
							<li>
								<a href="">Khuyến mãi</a>
							</li>
							
							<li>
                                <a href="{{ url('') }}">Giới thiệu công ty</a>
                            </li>
							
							<li>
                                <a href="{{ url('') }}">Điều khoản dịch vụ</a>
                            </li>
                            <li>
								<a href="{{ url('') }}">Hướng dẫn mua hàng</a>
							</li>
                        </ul>
                    </li>
					
					
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#fb"><i class="fa fa-fw fa-facebook"></i>Facebook Maketing <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="fb" class="collapse">
							<li>
                                <a href="{{ url('') }}"><i class="fa fa-fw fa-plus"></i> Gửi tin nhắn</a>
                            </li>
							
							<li>
                                <a href="{{ url('') }}"><i class="fa fa-fw fa-plus"></i> Gửi thông báo</a>
                            </li>
                           
                        </ul>
                    </li>
					

					
					<li @if(Request::segment(2) == 'setting' || Request::segment(2) == 'menu') class="active" @endif>
                        <a href="javascript:;" data-toggle="collapse" data-target="#caidat"><i class="fa fa-fw fa-cog"></i> Cài đặt <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="caidat" class="collapse">
							
					
							<li>
                                <a href="{{ url('admin/setting') }}">Cấu hình chung</a>
                            </li>
							
							<li>
								<a href="{{ url('admin/menu/1') }}"> Menu </a>
							</li>
							<li>
                                <a href="{{ url('admin/ads') }}"> Quảng cáo & Slide </a>
                            </li>

							<li>
                                <a href="{{ url('') }}">Thanh toán</a>
                            </li>
                           
                        </ul>
                    </li>
					
					<li>
                        <a href=""><i class="fa fa-fw fa-users"></i> Khách hàng</a>
                    </li>
				
					<li @if(Request::segment(2) =='user') class="active" @endif>
                        <a href="{{ url('admin/user/list') }}"><i class="fa fa-fw fa-user"></i> Người dùng</a>
                    </li>
					
					
					<li>
                        <a href=""><i class="fa fa-fw fa-reply"></i> Góp ý - Liên hệ </a>
                    </li>
					
					<li>
                        <a href=""><i class="fa fa-fw fa-bar-chart"></i> Báo cáo - thống kê</a>
                    </li>
                    {{--<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    --}}
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
           
            @if (Session::has('flash_message'))
                <div class="col-lg-12">
                    <div class="alert {!! Session::get('flash_level') !!} " style="    margin-bottom: 0px;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="fa fa-info-circle"> </i>  {!! Session::get('flash_message') !!}
                    </div>
                </div>
            @endif

            <div class="container-fluid">
                     @yield('content')
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


    <script src="{{ url('public/admin/js/myFunction.js')}}"></script>
	<script src="{{ url('public/admin/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ url('public/admin/js/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable({
                "language": {
                    "url": "{{ url('dataTable.json')}}"
                },
                "bPaginate": true,
                "bLengthChange": false,
                "bFilter": true,
                //"bInfo": false,
                "bAutoWidth": false,
                "pageLength": @yield('numpage', 5),


            });
			$("div.alert").delay(3000).slideUp();
			
        });
		
		
    </script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('public/admin/js/bootstrap.min.js')}}"></script>
    {{--
	<!-- Morris Charts JavaScript -->
    <script src="{{ url('public/admin/js/plugins/morris/raphael.min.js')}}"></script>
    <script src="{{ url('public/admin/js/plugins/morris/morris.min.js')}}"></script>
    <script src="{{ url('public/admin/js/plugins/morris/morris-data.js')}}"></script>
	--}}


</body>

</html>
