<?php
 class Database {
public $connect;

   function __construct(){
        $this -> open_db_connection();
   }

  public function open_db_connection() {
 

 $this->connect = mysqli_connect('localhost','EazyP@2020','eazypaycom_edb','eazypaycom_edb');//obj. oriented format.
     if($this->connect->connect_errno) {
     	die("Database connection failed!". mysqli_error());
     }
  }

  public function query($squery){
       $result = mysqli_query($this->connect,$squery);
       return $result; 
  }

  private function confirm_query(){
  	  if(!$result){
       	 die("Query failed!");
       }

     }

 public function escape_string($string){
 	$escaped_string = mysqli_real_escape_string($this->connect,$string);
 	return $escaped_string;
 }

public function insert_id(){
  return mysqli_insert_id($this->connect);
}

}

$database = new Database();






 ?>