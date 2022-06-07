<?php 

class College extends db_method {
  protected static $db_table="cf";
  protected static $db_table_field = array('school_id','cf_name','amount','cf_contact','cf_bank','cf_acc_no','cf_acc_name','cf_email','contact_name','password','account_code');//holds the user table column
	public $id;
	public $school_id;
  public $cf_name;
  public $amount;
	public $cf_contact;
  public $cf_bank;
  public $cf_acc_no;
  public $cf_acc_name;
  public $cf_email;
  public $contact_name;
  public $password;
  public $account_code;


public static function find_all_colleges($school_id=0){

global $database;

$query = "SELECT * FROM ".self::$db_table;
$query .= " WHERE school_id = ". $database->escape_string($school_id);
$query.= " ORDER BY school_id ASC";

return self::find_this_query($query);

}

public static function count_college (){

  global $database;

  $query = 'SELECT COUNT(id)  FROM '.self::$db_table;
  $result = mysqli_query($database->connect,$query);
  $row = mysqli_fetch_array($result);

  return $row[0];

}



   
public function properties(){
    
    $properties = array();
     foreach (self::$db_table_field as  $db_field) {
       if(property_exists($this, $db_field)) {

         $properties[$db_field] = $this->$db_field;
       }
     }

     return $properties;
  }


public static function verify_user($cf_email,$password){
       global $database;

       $cf_email = $database->escape_string($cf_email);
       $password = $database->escape_string($password);

       $squery = "SELECT * FROM ".self::$db_table." WHERE ";
       $squery .= "cf_email = '{$cf_email}' ";
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