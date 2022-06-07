<?php 
class School extends db_method {
  protected static $db_table= "school";
  protected static $db_table_field = array('id','school_name');//holds the user table column
	public $id;
	public $school_name;
//save method ends here


   
public function properties(){
    
    $properties = array();
     foreach (self::$db_table_field as  $db_field) {
       if(property_exists($this, $db_field)) {

         $properties[$db_field] = $this->$db_field;
       }
     }

     return $properties;
  }

public static function count_school (){

  global $database;

  $query = 'SELECT COUNT(id)  FROM '.self::$db_table;
  $result = mysqli_query($database->connect,$query);
  $row = mysqli_fetch_array($result);

  return $row[0];

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


//this function saves the newly selected image from the modal
public function ajax_save_user_image($user_image, $user_id){
 global $database;
$user_image = $database->escape_string($user_image);
$user_id = $database->escape_string($user_id);

$this->user_image = $user_image;
$this->id  = $user_id;


$sql = "UPDATE" . self::$db_table. "SET user_image = '{$this->user_image}'";
$sql .= " WHERE id = {$this->id} ";
$update_image = $database->query($sql);

  echo $this->img_path_and_placeholder(); 

 }
   

   public function delete_photo(){
  if($this->delete()){
      $target_path = SITE_ROOT. DS. 'admin'. DS . $this->upload_directory.DS.$this->user_image;

      return unlink($target_path) ? true : false;

  } else {
    return false;
  }
}
}//End of class User




 ?>