<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>EazyPay</title>
		<meta name="description" content="Hound is a responsive HTML5 admin template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Hound Admin, Houndadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<!-- vector map CSS -->
		<link href="vendors/bower_components/jquery-wizard.js/css/wizard.css" rel="stylesheet" type="text/css"/>
		
		<!-- jquery-steps css -->
		<link rel="stylesheet" href="vendors/bower_components/jquery.steps/demo/css/jquery.steps.css">
		
		
		
		<!-- Data table CSS -->
		<link href="vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
		
		<!-- bootstrap-touchspin CSS -->
		<link href="vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css"/>
		
		<!-- Custom CSS -->
		<link href="dist/css/style.css" rel="stylesheet" type="text/css">

		<?php 
		include('include/init.php');
     if (isset($_POST['cf_submit'])) {
        $cf_email = trim($_POST['cf_email']);
        $password = trim($_POST['password']);


     $user_found = College::verify_user($cf_email,$password);

    if($user_found){
         $session->login($user_found);
         redirect("profile/c_profile.php");
    }  
    else {
     $session->message("You have entered incorrect details");
    	redirect("login.php");
    }
  } 


elseif(isset($_POST['dept_submit'])) {
        $contact_email = trim($_POST['contact_email']);
        $password = trim($_POST['password']);


     $user_found = Department::verify_user($contact_email,$password);

    if($user_found){
         $session->login($user_found);
         redirect("profile/d_profile.php");
    }  else {
    	$session->message("You have entered incorrect details");
    	redirect("login.php");
    }

             }

     else{
    $msg = "";
    // $name="";
    $password="";
  }

		?>
	</head>
	<body >
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		<div class="wrapper theme-1-active pimary-color-red">
		
			<!-- Top Menu Items -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="mobile-only-brand pull-left">
					<div class="nav-header pull-left">
						<div class="logo-wrap">
							<a href="index.php">
							<img class="brand-img" src="eazypay.png" alt="brand" style="width:30px; height:30px;"/>
								<span class="brand-text">EazyPay</span>
							</a>

						</div>
					</div>

				</div>
	
			</nav>
			<!-- /Top Menu Items -->
			<!-- Right Setting Menu -->		
			<!-- Main Content -->
			<div class="page-wrapper" >
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h4 class="txt-dark">EazyPay</h4>
						</div>

						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.php"><button class="btn btn-success btn-outline">Back</button></a></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					       <center><h3>Login</h3></center>
						  <br>

	            			<div class="row">
								<div class="col-lg-2"></div>
								
	            			<div class="col-lg-9 col-xs-12">
	            			<div class="alert alert-info alert-dismissable alert-style-1">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<i class="zmdi zmdi-info-outline"></i><p> <strong>To Login as College/Faculty:</strong> College/Faculty Tab > Enter Details > Login <br>
								<strong>To Login as Department:</strong> Department Tab > Enter Details  > Login
								</p> 
						</div>
	            		<?php if(!empty($msg)) { echo
						  "<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<p class='pull-left'>$msg</p> 
							<div class='clearfix'></div>
							</div>";
							}?>
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div  class="panel-body pb-0">
									<div  class="tab-struct custom-tab-1">
										<ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_8">
											<li role="presentation" class=""><a  data-toggle="tab" id="settings_tab_8" role="tab" href="#college" aria-expanded="false"><span>College/Faculty</span></a></li>
											<li role="presentation" class=""><a  data-toggle="tab" id="settings_tab_8" role="tab" href="#department" aria-expanded="false"><span>Department</span></a></li>
										</ul>
										<div class="tab-content" id="myTabContent_8">
											<div  id="college" class="tab-pane fade active in" role="tabpanel">
												<!-- Row -->
												<div class="row">
													<div class="col-lg-12">
														<div class="">
															<div class="panel-wrapper collapse in">
																<div class="panel-body pa-0">
																	<div class="col-sm-12 col-xs-12">
																	<div class="form-wrap">
									<form action="" method="post">
										<div class="form-body overflow-hide">
										<div class="form-group">
										 <label class="control-label mb-10" for="exampleInputContact_01">Contact Email</label>
										<div class="input-group">
										<div class="input-group-addon"><i class="icon-envelope"></i></div>
										  <input type="text" class="form-control" id="exampleInputContact_01" placeholder="example@gmail.com" name="cf_email">
										</div>
									</div>

									<div class="form-group">
										 <label class="control-label mb-10" for="exampleInputContact_01">Password</label>
										<div class="input-group">
										<div class="input-group-addon"><i class="icon-user"></i></div>
										  <input type="password" class="form-control" id="exampleInputContact_01" placeholder="Enter Password" name="password">
										</div>
									</div>
								    </div>
	
									<div class="form-actions mt-10">			
							<button type="submit" class="btn btn-success mr-10 mb-30" name="cf_submit">Login <i class="fa fa-sign-in"></i></button>
							</div>											
																</form>	
								
																</div>	
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div  id="department" class="tab-pane fade" role="tabpanel">
												<!-- Row -->
												<div class="row">
													<div class="col-lg-12">
														<div class="">
															<div class="panel-wrapper collapse in">
																<div class="panel-body pa-0">
																	<div class="col-sm-12 col-xs-12">
																	<div class="form-wrap">
									<form action="" method="post">
									<div class="form-body overflow-hide">
									<div class="form-group">
										 <label class="control-label mb-10" for="exampleInputContact_01">Contact Email</label>
										<div class="input-group">
										<div class="input-group-addon"><i class="icon-envelope"></i></div>
										  <input type="text" class="form-control" id="exampleInputContact_01" placeholder="example@gmail.com" name="contact_email">
										</div>
									</div>

									<div class="form-group">
										 <label class="control-label mb-10" for="exampleInputContact_01">Password</label>
										<div class="input-group">
										<div class="input-group-addon"><i class="icon-user"></i></div>
										  <input type="password" class="form-control" id="exampleInputContact_01" placeholder="Enter Password" name="password">
										</div>
									</div>
							</div>
							<div class="form-actions mt-10">			
							<button type="submit" class="btn btn-success mr-10 mb-30" name="dept_submit">Login <i class="fa fa-sign-in"></i></button>
							</div>				
																			</form>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>				
					<div class="form-group mb-0 pull-right">
					<span class="inline-block pr-10">Don't have an account?</span>
					<a class="inline-block btn btn-success btn-rounded btn-outline" href="signup.php">Sign Up</a>
				   </div> 
	            			</div>
					
	
				</div>
				
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2018 &copy; EazyPay</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
				
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
		
		<!-- Form Wizard JavaScript -->
		<script src="vendors/bower_components/jquery.steps/build/jquery.steps.min.js"></script>
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
		
		<!-- Form Wizard Data JavaScript -->
		<script src="dist/js/form-wizard-data.js"></script>
		
		<!-- Data table JavaScript -->
		<script src="vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
		
		<!-- Bootstrap Touchspin JavaScript -->
		<script src="vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
		
		<!-- Starrr JavaScript -->
		<script src="dist/js/starrr.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Owl JavaScript -->
		<script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
		<!-- Switchery JavaScript -->
		<script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
			
	</body>

</html>