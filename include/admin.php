<?php 

class Administrator extends db_method {
  protected static $db_table= "administrator";
  protected static $db_table_field = array('name','password');//holds the user table column
	public $id;
	public $name;
	public $password;

public function properties(){
    
    $properties = array();
     foreach (self::$db_table_field as  $db_field) {
       if(property_exists($this, $db_field)) {

         $properties[$db_field] = $this->$db_field;
       }
     }

     return $properties;
  }


public static function verify_user($name,$password){
       global $database;

       $name = $database->escape_string($name);
       $password = $database->escape_string($password);

       $squery = "SELECT * FROM ".self::$db_table." WHERE ";
       $squery .= "name = '{$name}' ";
       $squery .= "AND password = '{$password}' ";
       $squery .= "LIMIT 1";

   $id_result_array = self::find_this_query($squery);
   return !empty($id_result_array) ? array_shift($id_result_array) : false;
     }//array_shift gets the first result of that array

}




 ?>