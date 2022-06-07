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

         if(isset($_POST['cf_submit'])) {
           if($college){
           		$college->school_id = $_POST['school'];
           		$college->cf_name = $_POST['cf_name'];
           		$college->amount = $_POST['cf_amount'] * 100;
           		$college->cf_contact = $_POST['cf_contact'];
           		$college->cf_bank = $_POST['cf_bank'];
           		$college->cf_acc_no = $_POST['cf_acc_no'];
           		$college->cf_acc_name = $_POST['cf_acc_name'];
           		$college->cf_email = $_POST['contact_email'];
           		$college->contact_name = $_POST['contact_name'];
           		$college->password = $_POST['password'];
				$college->save();
				$session->message("Registration Successful!");
				redirect("signup.php");
               }
             }

            elseif(isset($_POST['dept_submit'])) {
				if($department){
           		$department->school_id = $_POST['school'];
           		$department->dept_name = $_POST['dept_name'];
           		$department->amount = $_POST['dept_amount'] * 100;
           		$department->dept_contact = $_POST['dept_contact'];
           		$department->dept_bank = $_POST['dept_bank'];
           		$department->dept_acc_no = $_POST['dept_acc_no'];
           		$department->dept_acc_name = $_POST['dept_acc_name'];
           		$department->contact_email = $_POST['contact_email'];
           		$department->contact_name = $_POST['contact_name'];
           		$department->password = $_POST['password'];
				$department->save();
				$session->message("Registration Successful!");
				redirect("signup.php");
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
							<a href="index-2.html">
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
					       <center><h3>Sign Up</h3></center>
						  <br>

	            			<div class="row">
								<div class="col-lg-2"></div>
								
	            			<div class="col-lg-9 col-xs-12">
 							<?php if(!empty($msg)) { echo
						  "<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<i class='zmdi zmdi-check pr-15 pull-left'></i><p class='pull-left'>$msg</p> 
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
								         <label class="control-label mb-10">Select School</label>
								          <select class="form-control" data-placeholder="Choose a Category" tabindex="1" name="school">
									         <?php foreach($schools as $school):?>
								              <option value="<?php echo $school->id;?>"><?php echo $school->school_name;?></option>
							                <?php endforeach;?>
							               </select>
							              </div>
										  <div class="form-group">
											<label class="control-label mb-10" for="exampleInputEmail_01"> College/Faculty Name</label>
											<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-institution"></i></div>
											   <input type="text" class="form-control" id="exampleInputEmail_01" placeholder="College of Environment" name="cf_name" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label mb-10" for="exampleInputEmail_01"> Amount Payable</label>
											<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-money"></i></div>
											   <input type="text" class="form-control" id="exampleInputEmail_01" placeholder="500" name="cf_amount" required>
											</div>
										</div>
											<div class="form-group">
											<label class="control-label mb-10" for="exampleInputEmail_01"> Bank Name</label>
											<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-building"></i></div>
											   <input type="text" class="form-control" id="exampleInputEmail_01" placeholder="FirstBank" name="cf_bank" required>
											</div>
										</div>
											<div class="form-group">
											<label class="control-label mb-10" for="exampleInputEmail_01"> Account Number</label>
											<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-edit"></i></div>
											   <input type="text" class="form-control" id="exampleInputEmail_01" placeholder="001345261" name="cf_acc_no" maxlength="10" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label mb-10" for="exampleInputEmail_01"> Account name</label>
											<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-user"></i></div>
											   <input type="text" class="form-control" id="exampleInputEmail_01" placeholder="e.g NACOSSTASUED" name="cf_acc_name" required>
											</div>
										</div>
									 <div class="form-group">
										 <label class="control-label mb-10" for="exampleInputContact_01">Contact Number</label>
										<div class="input-group">
										<div class="input-group-addon"><i class="icon-phone"></i></div>
										  <input type="text" class="form-control" id="exampleInputContact_01" placeholder="08086915136" name="cf_contact" required>
										</div>
									</div>
										<div class="form-group">
										 <label class="control-label mb-10" for="exampleInputContact_01">Contact Email</label>
										<div class="input-group">
										<div class="input-group-addon"><i class="icon-envelope"></i></div>
										  <input type="text" class="form-control" id="exampleInputContact_01" placeholder="example@gmail.com" name="contact_email" required>
										</div>
									</div>
										<div class="form-group">
										 <label class="control-label mb-10" for="exampleInputContact_01">Contact Name</label>
										<div class="input-group">
										<div class="input-group-addon"><i class="icon-user"></i></div>
										  <input type="text" class="form-control" id="exampleInputContact_01" placeholder="John Jones" name="contact_name" required>
										</div>
									</div>
									<div class="form-group">
										 <label class="control-label mb-10" for="exampleInputContact_01">Password</label>
										<div class="input-group">
										<div class="input-group-addon"><i class="icon-user"></i></div>
										  <input type="password" class="form-control" id="exampleInputContact_01" placeholder="Enter Password" name="password" required>
										</div>
									</div>
								    </div>
						<div class="checkbox checkbox-primary">
							<input id="checkbox2" type="checkbox" required>
								<label for="checkbox2">
								 I agree with EazyPay <a data-toggle="modal" data-target=".bs-example-modal-lg">Terms of Service</a>
								</label>
						</div>		
									<div class="form-actions mt-10">			
							<button type="submit" class="btn btn-success mr-10 mb-30" name="cf_submit">Submit</button>
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
								  <label class="control-label mb-10">Select School</label>
							    <select class="form-control" data-placeholder="Choose a Category" tabindex="1" name="school">
									<?php foreach($schools as $school):?>
								<option value="<?php echo $school->id;?>"><?php echo $school->school_name;?></option>
							<?php endforeach;?>
							</select>
							</div>
										  <div class="form-group">
											<label class="control-label mb-10" for="exampleInputEmail_01"> Department Name</label>
											<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-institution"></i></div>
											   <input type="text" class="form-control" id="exampleInputEmail_01" placeholder="Computer Science" name="dept_name" required>
											</div>
										</div>		
									<div class="form-group">
											<label class="control-label mb-10" for="exampleInputEmail_01"> Amount Payable</label>
											<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-money"></i></div>
											   <input type="text" class="form-control" id="exampleInputEmail_01" placeholder="500" name="dept_amount" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label mb-10" for="exampleInputEmail_01"> Bank Name</label>
											<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-building"></i></div>
											   <input type="text" class="form-control" id="exampleInputEmail_01" placeholder="FirstBank" name="dept_bank" required>
											</div>
										</div>
											<div class="form-group">
											<label class="control-label mb-10" for="exampleInputEmail_01"> Account Number</label>
											<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-edit"></i></div>
											   <input type="text" class="form-control" id="exampleInputEmail_01" placeholder="02341587" name="dept_acc_no" required>
											</div>
										</div>
											<div class="form-group">
											<label class="control-label mb-10" for="exampleInputEmail_01"> Account name</label>
											<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-user"></i></div>
											   <input type="text" name="dept_acc_name" class="form-control" id="exampleInputEmail_01" placeholder="e.g NACOSSTASUED" required>
											</div>
										</div>
										<div class="form-group">
										 <label class="control-label mb-10" for="exampleInputContact_01">Contact number</label>
										<div class="input-group">
										<div class="input-group-addon"><i class="icon-phone"></i></div>
										  <input type="text" class="form-control" id="exampleInputContact_01" placeholder="08086915136" name="dept_contact" required>
										</div>
									</div>
									<div class="form-group">
										 <label class="control-label mb-10" for="exampleInputContact_01">Contact Email</label>
										<div class="input-group">
										<div class="input-group-addon"><i class="icon-envelope"></i></div>
										  <input type="text" class="form-control" id="exampleInputContact_01" placeholder="example@gmail.com" name="contact_email" required>
										</div>
									</div>
										<div class="form-group">
										 <label class="control-label mb-10" for="exampleInputContact_01">Contact Name</label>
										<div class="input-group">
										<div class="input-group-addon"><i class="icon-user"></i></div>
										  <input type="text" class="form-control" id="exampleInputContact_01" placeholder="John Jones" name="contact_name" required>
										</div>
									</div>
									<div class="form-group">
										 <label class="control-label mb-10" for="exampleInputContact_01">Password</label>
										<div class="input-group">
										<div class="input-group-addon"><i class="icon-user"></i></div>
										  <input type="password" class="form-control" id="exampleInputContact_01" placeholder="Enter Password" name="password" required>
										</div>
									</div>
							</div>

						<div class="checkbox checkbox-primary">
							<input id="checkbox2" type="checkbox" required>
								<label for="checkbox2">
								 I agree with EazyPay <a data-toggle="modal" data-target=".bs-example-modal-lg">Terms of Service</a>
								</label>
						</div>	
							<div class="form-actions mt-10">			
							<button type="submit" class="btn btn-success mr-10 mb-30" name="dept_submit">Submit</button>
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

									<!-- Terms modal-->
										<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
														<h5 class="modal-title" id="myLargeModalLabel">Terms of Service</h5>
													</div>
													<div class="modal-body">
														<h5 class="mb-15">Agreement</h5>
														<p>These Merchant Terms of Service is an agreement between you and EazyPay. It details EazyPay’s obligations to you. It also highlights certain risks on using the services and you must consider such risks carefully as you will be bound by the provision of this Agreement through your use of this website or any of our services. </p>
														<h5 class="mb-15">Our Fees & Pricing Schedule</h5>
														<p>You agree to pay us for the services we render as a payment gateway for your services. Our Fees will be calculated as demonstrated on the Pricing page on the website. The Fees on our Pricing page is integral to and forms part of this Agreement. 
														We reserve the right to revise our Fees. In the event that we revise our fees we will notify you within 5 days of such change. 
														</p>
														<h5 class="mb-15">How we handle your Funds</h5>
														<p>You authorize and instruct EazyPay to hold, receive, and disburse funds on your behalf when such funds from your card transactions settle from the Card Networks. By accepting this Agreement, you further authorize EazyPay on how your card transaction settlement funds should be disbursed to you as Payouts and the timing of such Payouts. 
														You agree that you are not entitled to any interest or other compensation associated with the settlement funds held by EazyPay pending settlement and Payout to your Bank Account. 
														Settlement funds will be held in a deposit account at EazyPay pending Payouts to you in accordance with the terms of this contract. We may periodically make available to you information about pending settlements yet to be received from the Card Networks. 
 														</p>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-danger text-left" data-dismiss="modal">Close</button>
													</div>
												</div>
												<!-- /.modal-content -->
											</div>
											<!-- /.modal-dialog -->
										</div>
										<!-- /.modal -->
								</div>
							</div>
						</div>
											<div class="form-group mb-0 pull-left">
					<span class="inline-block pr-10">Already have an account?</span>
					<a class="inline-block btn btn-success btn-rounded btn-outline" href="login.php">Login</a>
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