<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hencework.com/theme/EazyPay/full-width-light/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Aug 2017 01:03:18 GMT -->
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Admin | Edit College</title>
	<meta name="description" content="EazyPay is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, EazyPay Admin, EazyPayadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
    
	<!-- Data table CSS -->
	<link href="vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
	
	<!-- Custom CSS -->
	<link href="dist/css/style.css" rel="stylesheet" type="text/css">

<?php
    
    include('../include/init.php');
    $department = Department::find_by_id($_GET['id']);


         if(isset($_POST['dept_submit'])) {
           if($department){
           		$department->school_id = $_POST['school'];
           		$department->dept_name = $_POST['dept_name'];
           		$department->amount = $_POST['dept_amount'] * 100;
           		$department->dept_contact = $_POST['dept_contact'];
           		$department->dept_bank = $_POST['dept_bank'];
           		$department->dept_acc_no = $_POST['dept_acc_no'];
           		$department->dept_acc_name = $_POST['dept_acc_name'];
           		$department->account_code = $_POST['account_code'];
           		$department->contact_email = $_POST['contact_email'];
           		$department->contact_name = $_POST['contact_name'];
				$department->save();
				$session->message("Update Successful!");
				redirect("college.php");
               }
             }
    ?>
</head>

<body>
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
                        <a href="#">
                            <img class="brand-img" src="../eazypay.png" alt="brand" style="width:30px; height:30px;"/>
                            <span class="brand-text">EazyPay</span>
                        </a>
                    </div>
                </div>  
                <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
                <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>

            </div>
            <div id="mobile_only_nav" class="mobile-only-nav pull-right">
                <ul class="nav navbar-right top-nav pull-right">
                    <li>
                        <a href="logout.php">Logout <i class="fa fa-sign-out"></i></a>
                    </li>
                </ul>
            </div>  
        </nav> 
        <!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>Navigation</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
                    <a href="dashboard.php"><div class="pull-left"><i class="fa fa-dashboard mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="clearfix"></div></a>
                </li>
			    <li>
                    <a href="schools.php"><div class="pull-left"><i class="fa fa-institution mr-20"></i><span class="right-nav-text">Manage Schools</span></div><div class="clearfix"></div></a>
                </li>
                  <li>
                    <a href="college.php"><div class="pull-left"><i class="zmdi zmdi-book mr-20"></i><span class="right-nav-text">College/Faculty Records</span></div><div class="clearfix"></div></a>
                </li>
                <li>
                    <a href="department.php"><div class="pull-left"><i class="zmdi zmdi-book mr-20"></i><span class="right-nav-text">Department Records</span></div><div class="clearfix"></div></a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#icon_dr"><div class="pull-left"><i class="fa fa-money mr-20"></i><span class="right-nav-text">Transactions</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                    <ul id="icon_dr" class="collapse collapse-level-1">
                                          <li>
                    <a href="dept_trans.php"><div class="pull-left"><span class="right-nav-text">Department Transactions</span></div><div class="clearfix"></div></a>
                </li>
                <li>
                    <a href="college_trans.php"><div class="pull-left"><span class="right-nav-text">College/FacultyTransactions</span></div><div class="clearfix"></div></a>
                </li>
                    </ul>
                </li>
			</ul>
		</div>
		<!-- /Left Sidebar Menu!-->
		<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Edit Department's information</h5>
						</div>
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="" method="post">
										<div class="form-body overflow-hide">
										  <div class="form-group">
											<label class="control-label mb-10" for="exampleInputEmail_01"> DepartmentName</label>
											<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-institution"></i></div>
											   <input type="text" class="form-control" id="exampleInputEmail_01" name="dept_name" value="<?php echo $department->dept_name;?>">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label mb-10" for="exampleInputEmail_01"> Amount Payable</label>
											<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-money"></i></div>
											   <input type="text" class="form-control" id="exampleInputEmail_01" name="dept_amount" value="<?php echo $department->amount;?>">
											</div>
										</div>
											<div class="form-group">
											<label class="control-label mb-10" for="exampleInputEmail_01"> Bank Name</label>
											<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-building"></i></div>
											   <input type="text" class="form-control" id="exampleInputEmail_01" name="dept_bank" value="<?php echo $department->dept_bank;?>">
											</div>
										</div>
											<div class="form-group">
											<label class="control-label mb-10" for="exampleInputEmail_01"> Account Number</label>
											<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-edit"></i></div>
											   <input type="text" class="form-control" id="exampleInputEmail_01" name="dept_acc_no" maxlength="10" value="<?php echo $department->dept_acc_no;?>">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label mb-10" for="exampleInputEmail_01"> Account name</label>
											<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-user"></i></div>
											   <input type="text" class="form-control" id="exampleInputEmail_01" name="dept_acc_name" value="<?php echo $department->dept_acc_name;?>">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label mb-10" for="exampleInputEmail_01"> Account Code</label>
											<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-user"></i></div>
											   <input type="text" class="form-control" id="exampleInputEmail_01" name="account_code" value="<?php echo $department->account_code;?>">
											</div>
										</div>
									 <div class="form-group">
										 <label class="control-label mb-10" for="exampleInputContact_01">Contact Number</label>
										<div class="input-group">
										<div class="input-group-addon"><i class="icon-phone"></i></div>
										  <input type="text" class="form-control" id="exampleInputContact_01" name="dept_contact" value="<?php echo $department->dept_contact;?>">
										</div>
									</div>
										<div class="form-group">
										 <label class="control-label mb-10" for="exampleInputContact_01">Contact Email</label>
										<div class="input-group">
										<div class="input-group-addon"><i class="icon-envelope"></i></div>
										  <input type="text" class="form-control" id="exampleInputContact_01" name="contact_email" value="<?php echo $department->dept_email;?>">
										</div>
									</div>
										<div class="form-group">
										 <label class="control-label mb-10" for="exampleInputContact_01">Contact Name</label>
										<div class="input-group">
										<div class="input-group-addon"><i class="icon-user"></i></div>
										  <input type="text" class="form-control" id="exampleInputContact_01" name="contact_name" value="<?php echo $department->contact_name;?>">
										</div>
									</div>
								    </div>	
									<div class="form-actions mt-10">			
										<button type="submit" class="btn btn-success mr-10 mb-30" name="dept_submit">Update</button>
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
				
				<!-- Footer -->
				<footer class="footer container-fluid pl-30 pr-30">
					<div class="row">
						<div class="col-sm-12">
							<p>2018 &copy; EazyPay by Complanet Technologies</p>
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

<!-- Mirrored from hencework.com/theme/hound/full-width-light/form-element.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Aug 2017 01:02:43 GMT -->
</html>