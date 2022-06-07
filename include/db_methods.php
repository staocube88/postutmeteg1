<?php 

 class db_method {

  public static function find_all() {
     return static::find_this_query("SELECT * FROM ".static::$db_table." ");
  }


   public static function find_by_id($id){
    global $database;

    $id_result_array = static::find_this_query("SELECT * FROM ".static::$db_table." WHERE id = $id LIMIT 1");
   return !empty($id_result_array) ? array_shift($id_result_array) : false;

      }
    
   public static function find_this_query($squery) {
         global $database;
         $result_set = $database->query($squery);
         $obj_array = array();

         while($row=mysqli_fetch_array($result_set)){
              $obj_array[] = static::instantiation($row);
         }
         return $obj_array;
  }

  public static function instantiation($found_user){
      $calling_class = get_called_class();

      $the_object = new $calling_class;
      
      foreach ($found_user as $attr => $value) {
        if($the_object -> has_the_attr($attr)){
                 $the_object ->$attr =$value;
        }
      }
  

        return $the_object;
  }

  private function has_the_attr($attr){
     $obj_prop = get_object_vars($this);
    return array_key_exists($attr, $obj_prop);
  }

 public function save(){
      return isset($this->id) ? $this->update() : $this->create();
   }//will update user  based on given id else it will create a new one


public function create() {
 global $database;

 $properties = $this->clean_properties();

 $query = "INSERT INTO " .static::$db_table. "(".implode(",",array_keys($properties)).")";
 $query.= "VALUES('".IMPLODE("','",array_values($properties))."')";

  if($database->query($query)) {
  	$this->id = $database->insert_id();
  	  return true;
  } else {
  	return false;
  }

 }//create_method

public function update(){
      global $database;
      
      $properties = $this->clean_properties();
      $properties_pairs = array();

      foreach ($properties as $key => $value) {
          $properties_pairs[] = "{$key} ='{$value}'";
      }


      $sql = "UPDATE " .static::$db_table. " SET ";
      $sql.= implode("," , $properties_pairs);
      $sql.= " WHERE id = ".$database->escape_string($this->id);
  //$sql .= "username='".$database->escape_string($this->username)."', ";
    $database->query($sql);

    return (mysqli_affected_rows($database->connect) == 1) ? true : false;


     }//update method

      public function delete(){
      global $database;

      $sql = "DELETE FROM " .static::$db_table. " ";
      $sql.= "WHERE id= ".$database->escape_string($this->id);
      $sql.= " LIMIT 1";
    $database->query($sql);

    return (mysqli_affected_rows($database->connect) == 1) ? true : false;

     }//delete method



public function properties(){
    
    $properties = array();
     foreach (self::$db_table_field as  $db_field) {
       if(property_exists($this, $db_field)) {

         $properties[$db_field] = $this->$db_field;
       }
     }

     return $properties;
  }
//this function cleans up the value of the properties method
   protected function clean_properties(){
    global $database;

    $clean_prop = array();

    foreach ($this->properties() as $key => $value) {
      $clean_prop[$key] = $database->escape_string($value);
    }
    return $clean_prop;
   }

      public static function count_all(){
    global $database;
    $query = "SELECT COUNT(*) FROM " . static::$db_table;
    $result_set = $database->query($query);
    $row = mysqli_fetch_array($result_set);
    return array_shift($row);
   }
     
     }
 
 ?>