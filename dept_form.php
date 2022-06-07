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
		
		 $departments = Department::find_all_departments($_GET['school_id']);


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
							<li><a href="school_form.php"><button class="btn btn-success btn-outline">Back</button></a></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					       <center><h3></h3></center>
					      <br>
	            			<div class="row">
	            				<div class="col-lg-2"></div>
	            			<div class="col-lg-9 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div  class="panel-body pb-0">
									<div  class="tab-struct custom-tab-1">
										<ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_8">
											<li role="presentation" class=""><a  data-toggle="tab" id="settings_tab_8" role="tab" href="#department" aria-expanded="false"><span>Departmental Fee Payment</span></a></li>
										</ul>
										<div class="tab-content" id="myTabContent_8">
											<div  id="department" class="tab-pane fade active in" role="tabpanel">
												<!-- Row -->
												<div class="row">
													<div class="col-lg-12">
														<div class="">
															<div class="panel-wrapper collapse in">
																<div class="panel-body pa-0">
																	<div class="col-sm-12 col-xs-12">
																	<div class="form-wrap">
									             <form action="payment.php" method="post">
										        <div class="form-body overflow-hide">
										      <div class="form-group">
								                <label class="control-label mb-10">Select Department</label>
								                <select class="form-control" data-placeholder="Choose a Category" tabindex="1" name="department">
									       			<?php foreach($departments as $department):?>
								          			<option value="<?php echo $department->id;?>"><?php echo $department->dept_name;?></option>
							              			<?php endforeach;?>
							            		</select>
							            	</div>
										  <div class="form-group">
											<label class="control-label mb-10" for="exampleInputEmail_01">Fullname</label>
											<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-user"></i></div>
											   <input type="text" class="form-control" id="exampleInputEmail_01" placeholder="e.g Ajibade John Michael" name="name">
											</div>
										</div>
										<div class="form-group">
										 <label class="control-label mb-10" for="exampleInputContact_01">Matric Number</label>
										<div class="input-group">
										<div class="input-group-addon"><i class="fa fa-edit"></i></div>
										  <input type="text" class="form-control" id="exampleInputContact_01" placeholder="20160405708" name="matric_no">
										</div>
									</div>
											<div class="form-group">
										 <label class="control-label mb-10" for="exampleInputContact_01">Email</label>
										<div class="input-group">
										<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
										  <input type="email" name="email" class="form-control" id="exampleInputContact_01" placeholder="example@gmail.com">
										</div>
									</div>
							</div>
							<div class="form-actions mt-10">			
							<button type="submit" class="btn btn-success btn-rounded mr-10 mb-30" name="submit">Proceed To Payment
							</button>				
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