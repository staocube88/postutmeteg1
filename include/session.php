<?php 
   class Session {
     
     private $signed_in = false;
     public $id;
     public $count;
     public $msg;
    
    function __construct(){
    	session_start();
      $this->visitor_count();
    	$this->check_login();
      $this->check_message();
   	
    }

public function message($msg="") {
  if(!empty($msg)){
      $_SESSION['message'] = $msg;

  } else {
    return $this->message;
  }
}


    private function check_message(){
if(isset($_SESSION['message'])){

  $this->message = $_SESSION['message'];
  unset($_SESSION['message']);
} else {
  $this->message = "";
}

    }

    public function visitor_count(){
      if(isset($_SESSION['count'])){
          return $this->count = $_SESSION['count']++;
      } else{
         return $_SESSION['count'] = 1;
      }
    }

     public function is_signed_in(){
     	return $this->signed_in;
     }

     public function login($user){
          if($user){
          	$this->id =$_SESSION['id'] = $user->id;
          	$this->signed_in=true;
          }
     }


     public function logout(){
     	unset($_SESSION['id']);
     	unset($this->id);
     	$this->signed_in=false;
     }


   	private function check_login(){
         if(isset($_SESSION['id'])){
            $this->id = $_SESSION['id'];
            $this->signed_in=true;//to find out if the user is logged in or not
         } else {
         	unset($this->id);
         	$this->signed_in=false;
         }
   	}

   }

$session = new Session();
$msg = $session->message();

 ?>