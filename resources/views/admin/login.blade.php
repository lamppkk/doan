<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Đăng nhập</title>
	<link href="{{ url('public/admin/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ url('public/admin/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{ url('public/admin/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{ url('public/admin/js/jquery.js')}}"></script>
</head>
<body>
   <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Đăng nhập</div>
                        
                    </div>     
                    <form action="" method="post">
                        <div style="padding-top:30px" class="panel-body" >
							@if (count($errors) > 0)
								<div class="alert alert-danger col-sm-12">
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif

                            <form id="loginform" class="form-horizontal" role="form">
                                <input type="hidden" value="{!! csrf_token() !!}" name="_token"/>        
                                <div style="margin-bottom: 25px" class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input id="login-username" type="text" class="form-control" name="txtUser" value="" placeholder="Tên đăng nhập">                                        
                                        </div>
                                    
                                <div style="" class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input id="login-password" type="password" class="form-control" name="txtPass" placeholder="Mật khẩu">
                                </div>
                                        
                                    
                                <div class="input-group">
								  <div class="checkbox">
									<label>
									  <input id="login-remember" type="checkbox" name="remember" value="1"> Ghi nhớ
									</label>
								  </div>
                                </div>


                                <div style="margin-top:10px" class="input-group">
									  <button id="btn-login" type="sbumit" class="btn btn-success">Đăng nhập  </button>
                                </div>


                                    <div class="form-group">
                                            <div style=" padding-top:15px; font-size:85%" >
                                            <a style="padding-right:40px;" href="#">Quên mật khẩu?</a>
                                            <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">Đăng ký</a>
                                            
                                            </div>
                                    </div>    
                                </form>   
                            </div>                     
                        </div>  
                    </form>
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Đăng ký</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Đăng nhập</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Lỗi:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd" placeholder="Password">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Invitation Code</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="icode" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                        <span style="margin-left:8px;">or</span>  
                                    </div>
                                </div>
                                
                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                                    </div>                                           
                                        
                                </div>
                                
                                
                                
                            </form>
                         </div>
                    </div>

                
         </div> 
    </div>
    
    </body>
    </html>