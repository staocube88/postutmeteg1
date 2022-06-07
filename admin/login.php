<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Admin | Login</title>
		<meta name="description" content="EazyPay is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, EazyPay Admin, EazyPayadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
		
		
		<!-- Custom CSS -->
		<link href="dist/css/style.css" rel="stylesheet" type="text/css">
		  <?php 
     require_once ("../include/init.php");

     if (isset($_POST['submit'])) {
        $name = trim($_POST['name']);
        $password = trim($_POST['password']);


     $user_found = Administrator::verify_user($name,$password);

    if($user_found){
         $session->login($user_found);
         redirect("dashboard.php");
    }  else {
      $msg = "You have entered incorrect details";
    }
  } 
     else{
    $msg = "";
    $name="";
    $password="";
  }


   ?>
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index-2.html">
						<img class="brand-img mr-10" src="../eazypay.png" alt="brand" style="width:50px; height:50px;"/>
						<span class="brand-text">EazyPay</span>
					</a>
				</div>
<!-- 				<div class="form-group mb-0 pull-right">
					<span class="inline-block pr-10">Don't have an account?</span>
					<a class="inline-block btn btn-info btn-rounded btn-outline" href="signup.html">Sign Up</a>
				</div> -->
				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
 							<?php if(!empty($msg)) { echo
						  "<center><div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<i class='zmdi zmdi-warning pr-15 pull-left'></i><p class='pull-left'>$msg</p> 
							<div class='clearfix'></div>
							</div></center>";
							}?>									
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Sign in to Admin</h3>
											<h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
										</div>	
										<div class="form-wrap">
											<form action="" method="post">
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Username</label>
													<input type="text" class="form-control" required="" id="exampleInputEmail_2" name="name"placeholder="Enter username">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
													<div class="clearfix"></div>
													<input type="password" class="form-control" required="" id="exampleInputpwd_2" name="password" placeholder="Enter pwd">
												</div>
												<div class="form-group text-center">
													<button type="submit" class="btn btn-success btn-rounded" name="submit">sign in</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	</body>

<!-- Mirrored from hencework.com/theme/EazyPay/full-width-light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Aug 2017 01:03:39 GMT -->
</html>
