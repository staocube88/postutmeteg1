<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Admin | Manage Schools</title>
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
    $schools =School::find_all();

    if (isset($_POST['submit'])) {
        $school = new School();
        if ($school) {
            $school->school_name = $_POST['school_name'];
            $school->save();
            $session->message("School Added Successfully");
            redirect("school.php");
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
                    <a href="college_trans.php"><div class="pull-left"><span class="right-nav-text">College/Faculty Transactions</span></div><div class="clearfix"></div></a>
                </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /Left Sidebar Menu -->
        <!-- Main Content -->
        <div class="page-wrapper">
            <div class="container-fluid">
                
                <!-- Title -->
                <div class="row heading-bg">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                      <h5 class="txt-dark">Manage Schools</h5>
                    </div>
                </div>
                <!-- /Title -->
                
                <!-- Row -->
                <div class="row">
                    <div class="col-sm-6">
                        <?php if(!empty($msg)) { echo
                          "<div class='alert alert-success alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <i class='zmdi zmdi-check pr-15 pull-left'></i><p class='pull-left'>$msg</p> 
                            <div class='clearfix'></div>
                            </div>";
                            }?> 
                        <h6 class="txt-dark">Add School</h6>
                        <form action="" method="post">
                            <div class="form-group">
                               <input type="text" name="school_name" class="form-control" placeholder="Enter School Name"> 
                            </div>
                            <div calss="form-group">
                                <input type="submit" name="submit" class="btn btn-success form-control" value="Submit">
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <div class="panel panel-default card-view">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">Schools</h6>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <div class="table-wrap">
                                        <div class="table-responsive">
                                            <table id="datable_1" class="table table-hover display  pb-30" >
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>School</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($schools as $school):?>
                                                    <tr>
                                                        <td><?php echo $school->id;?></td>
                                                        <td><?php echo $school->school_name;?></td>
                                                    </tr>
                                                <?php endforeach;?>
                                                </tbody>
                                            </table>
                                        </div>
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
                        <p>2018 &copy; EazyPay. by Complanet Technologies</p>
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
    
    <!-- Data table JavaScript -->
    <script src="vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="dist/js/dataTables-data.js"></script>
    
    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>
    
    <!-- Owl JavaScript -->
    <script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
    
    <!-- Switchery JavaScript -->
    <script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>
    
    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>
    
    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>
    
    
</body>

</html>
