<?php 

class DeptPayment extends db_method {
  protected static $db_table= "dept_payment";
  protected static $db_table_field = array('dept_id','student_name','matric_no','email','payment_date');//holds the user table column
	  public $id;
    public $dept_id;
    public $student_name;
    public $matric_no;
    public $email;
    public $payment_date;

    public static function find_all_payments($student_name){

      global $database;
      
      $query = "SELECT * FROM ".self::$db_table;
      $query .= " WHERE student_name = ". $database->escape_string($student_name);
      return self::find_this_query($query);
      
      }

      public static function count_dept_pay (){

          global $database;

        $query = 'SELECT COUNT(id)  FROM '.self::$db_table;
        $result = mysqli_query($database->connect,$query);
        $row = mysqli_fetch_array($result);

        return $row[0];

        }
 public static function find_trans($dept_id=0){

global $database;

$query = "SELECT * FROM ".self::$db_table;
$query .= " WHERE dept_id = ". $database->escape_string($dept_id);
$query.= " ORDER BY dept_id ASC";

return self::find_this_query($query);

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


}




 ?>