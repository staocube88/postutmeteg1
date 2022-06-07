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
		
		 $college_payment = CollegePayment::find_by_id($_GET['id']);
 $college = College::find_by_id($college_payment->college_id);
		


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
								<span class="brand-text">EazyPayNg</span>
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
                            <h4 class="txt-dark">EazyPayNg</h4>
						</div>
					</div>
										<!-- Row -->
					<div class="row">
					<div class="col-md-2"></div>

						<div class="col-md-8">
						<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<p class='pull-left'><strong>Payment Successful!</strong> A Receipt Has Been Sent To Your Email And
							 You Can Also Print The EazyPay Payment Receipt Below.</p> 
							<div class='clearfix'></div>
					       </div>
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
									<img src="eazypay.png" alt="" class="img-responsive" style="width:50px; height:50px;">
									<h2 class="panel-title txt-dark">
									<strong>EazyPayNg<p><b>Payment Receipt</b></strong></p>
									</h2>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-xs-12 text-right">
												<address>
													<span class="txt-dark head-font capitalize-font mb-5">Payment date:</span><br>
													<?php echo date("jS \of F Y");?><br><br>
												</address>
											</div>
										</div>
                                        <h4 class=" text-center">Payment Details</h4><br>
												<table class="table table-bordered table-striped">
												
												  <tbody>
												  <?php  echo
												    "<tr>
													 <th><strong>Student Name</strong></th>
													 <th>$college_payment->student_name</th>
													</tr>
													<tr>
													 <th><strong>Matric Number</strong></th>                                                                                                  
													 <th>$college_payment->matric_no</th>
													</tr>
													<tr>
													<th><strong>Paid To</strong></th>

													<th>$college->cf_name </th>
												   </tr>
													 <th><strong>Amount Paid</strong></th>
													 <th>&#8358;" .$college->amount/100;"</th>
													</tr>
													";
												     ?> 
												  </tbody>
												</table>
											<div class="pull-right">
												<button type="button" class="btn btn-success btn-outline btn-icon left-icon" onclick="javascript:window.print();"> 
													<i class="fa fa-print"></i><span> Print</span> 
												</button>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2"></div>
					</div>
					<!-- /Row -->

					
	
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
