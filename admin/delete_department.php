<?php include_once ("../include/init.php");?>
<?php 
$department = DEpartment::find_by_id($_GET['id']);
if($department) {
  $department->delete();
  $session->message("Department Details has been Deleted Successfully!");
  return redirect("department.php");
} else {
  redirect("department.php");
}

 ?>