<?php include_once ("../include/init.php");?>
<?php 
$college = College::find_by_id($_GET['id']);
if($college) {
  $college->delete();
  $session->message("College/Faculty Details has been Deleted Successfully!");
  return redirect("college.php");
} else {
  redirect("college.php");
}

 ?>