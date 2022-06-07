<?php 
function __autoload($class){

$class = strtolower($class);

$the_path = "include/{$class}.php";

if (file_exists($the_path)){
   require_once($the_path);
} else{
	die("This file named {$class}.php was not found!");
  }
    
    }


  function redirect($location){
  	header("Location:{$location}");
  }
?>