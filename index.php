<?php
  
  class User{ 

   public $user_name;
   public $psw;
   public $mail;
   public $name;
   public $date_of_birth;

   public function __construct($user, $psw, $mail = "default@domain.com"){

    $this -> user_name = $user;
    $this -> psw = $psw;
    $this -> mail = $mail;
    
   }

   public function __toString(){

    $string = "User: <br>" . "Username: " . $this -> user_name . "<br>" . "Email: " . $this -> mail . "<br>";

    if ($this -> name) {
      $string .= "Nome Completo: " . $this -> name . "<br>";
    } else {
      $string .= "Nome Completo: " . "---" . "<br>";
    }

    if($this -> date_of_birth){
      $string .= "Data di nascita: " . $this -> date_of_birth . "<br>";
    } else {
      $string .= "Data di nascita: " . "---" . "<br>";
    }

    return $string;

   }

  }


  $user1 = new User("root", "12345", "root@vodafone.com");

  $user2 = new User("admin", "admin", "admin@yahoo.com");

  $user3 = new User("pippo", "pluto");

  $user1 -> name = "Tom Cruise";

  $user2 -> date_of_birth = "25/12/2000";

  $user3 -> user_name = "paperino";



  echo $user1 . "<br>";
  
  echo $user2 . "<br>";
  
  echo $user3 . "<br>";


