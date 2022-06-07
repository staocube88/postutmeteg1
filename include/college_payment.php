<?php 

class CollegePayment extends db_method {
  protected static $db_table= "college_payment";
  protected static $db_table_field = array('college_id','student_name','matric_no','email','payment_date');//holds the user table column
	  public $id;
    public $college_id;
    public $student_name;
    public $matric_no;
    public $email;
    public $payment_date;



      public static function count_col_pay (){

          global $database;

        $query = 'SELECT COUNT(id)  FROM '.self::$db_table;
        $result = mysqli_query($database->connect,$query);
        $row = mysqli_fetch_array($result);

        return $row[0];

        }
public static function find_trans($college_id=0){

global $database;

$query = "SELECT * FROM ".self::$db_table;
$query .= " WHERE college_id = ". $database->escape_string($college_id);
$query.= " ORDER BY college_id ASC";

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