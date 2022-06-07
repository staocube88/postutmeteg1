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
		  
		  $schools = School::find_all();

		  $college = new College();

		  $department = new Department();

	       if(isset($_GET['c_proceed'])) {
	       //gets the value of school_id in college table
	        if($college) {
	           $college->school = $_GET['select'];
	           redirect("college_form.php?school_id= {$_GET['select']}");
	             
	             }
	         } //gets the value of school_id in dept table
	         elseif(isset($_GET['d_proceed'])) {
	         	 if($department) {
	           $department->school = $_GET['select'];
	           redirect("dept_form.php?school_id= {$_GET['select']}");
	             
	             }
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
			<!-- Right Setting Menu --		
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
							<li><a href="index.php"><button class="btn btn-success">Back</button></a></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- College payment -->
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-2"></div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
									<div class="alert alert-info alert-dismissable alert-style-1">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											<i class="zmdi zmdi-info-outline"></i><p> <strong>College/Faculty Fee Payment:</strong> College/Faculty Tab > Select School > Proceed <br>
												<strong>Departmental Fee Payment:</strong> Department Tab > Select School > Proceed
											</p> 
										</div>
										
							<div class="panel panel-default panel-tabs card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Choose Payment Mode</h6>
									</div>
									<div class="pull-right">
										<div  class="tab-struct custom-tab-1">
											<ul role="tablist" class="nav nav-tabs" id="myTabs_9">
												<li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="home_tab_9" href="#home_9">College/Faculty</a></li>
												<li role="presentation" class=""><a  data-toggle="tab" id="profile_tab_9" role="tab" href="#profile_9" aria-expanded="false">Department</a></li>
											</ul>
										</div>	
									</div>
									
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="tab-content" id="myTabContent_9">
											<div  id="home_9" class="tab-pane fade active in" role="tabpanel">
												<?php


												?>
											    <form method="get" action="">
											    	
											    		<div class="form-group">
														<label>Select School</label>
														<select class="form-control" name="select">
															<?php foreach($schools as  $school):?>
															<option value="<?php echo $school->id?>"> <?php echo $school->school_name;?> </option>
														   <?php endforeach;?>
														</select>
													</div>
											    	<div>
											    		<input type="submit" class="form-control btn btn-success btn-rounded" name="c_proceed" value="Proceed">
											    	</div>
											    </form>
											</div>
											<div id="profile_9" class="tab-pane fade" role="tabpanel">
												    <form method="get" action="">
											    	
											    		<div class="form-group">
														<label>Select School</label>
														<select class="form-control" name="select">
															<?php foreach($schools as  $school):?>
															<option value="<?php echo $school->id?>"> <?php echo $school->school_name;?> </option>
														   <?php endforeach;?>
														</select>
													</div>
											    	<div>
											    		<input type="submit" class="form-control btn btn-success btn-rounded" name="d_proceed" value="Proceed">
											    	</div>
											    </form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">COLLEGE DUE PAYMENT</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div id="example-basic">
											<h3><span class="head-font capitalize-font">Select School</span></h3>
											<section>
												<form action="" method="GET">
													<div class="form-group col-sm-6">
														<label>Select School</label>
														<select class="form-control" name="select">
															<?php foreach($schools as  $school):?>
															<option value="<?php echo $school->id?>"> <?php echo $school->school_name;?> </option>
														   <?php endforeach;?>
														</select>
													</div>
													<input type="hidden" name="form_submitted" value="1" />
												</form>
											</section>
												<h3><span class="head-font capitalize-font">Select College/Faculty</span></h3>
											<section>
												<?php
												$cf = new College();
												 if(isset($_GET['form_submitted'])){
												  if($cf) {

												  	  $cf->school_id = $_GET['select'];
												

												 ?>
													<div class="form-group col-sm-6">
														<label>Select College/Faculty</label>
													<select class="form-control">
													<?php foreach($colleges as $college):?>
															<option value="<?php echo $college->id?>"> <?php echo $college->cf_name;?> </option>
														   <?php endforeach;?>
													 </select>
													</div>
													<?php } } else {?>
													<p class="text-danger"> Selected School Has No Registered Colleges!</p>
												<?php } ?>
											</section>
											<h3><span class="head-font capitalize-font">Student Information</span></h3>
											<section>
											    <div class="form-group col-sm-6">
											      <input type="text" name=""  class="form-control" placeholder="Enter Your Fullname">	
											    </div>
											      <div class="form-group col-sm-6">
											      <input type="text" name="" class="form-control" placeholder="Enter Your Matric Number">	
											    </div>
											</section>
											<h3><span class="head-font capitalize-font">Make Payment</span></h3>
											<section>
												<div class="col-sm-6">
													<h5 class="text-success">Make Payment</h5>
													<p>Click the button below to make payment.</p> <br>
												<a href="#"><button class="btn btn-success btn-rounded"> Proceed >></button></a>
												</div>
												
												
											</section>

										</div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
					<!-- /College Payment -->
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