<?php
  
  class User{  // creo la classe User

   // definisco delle variabili d'istanza

   public $user_name;
   public $psw;
   public $mail;
   public $name;
   public $date_of_birth;

   public function __construct($user, $psw, $mail = "default@domain.com"){ // creo la funzione __costruct che richiede come argomenti username, password e mail ma alla mail assegno un valore di default nel caso non venga messa come argomento. ATTENZIONE il valore di default può anche essere null o "" (stringa vuota) per permettere di creare un oggetto omettendo dei valori ma senza per forza sostituirli con dei valori determinati.

    $this -> user_name = $user;
    $this -> psw = $psw;
    $this -> mail = $mail;
    
   }

   public function __toString(){ // la funzione toString() è una funzione già presente in php (non si può cambiare la firma cioè nè nome della funzione ne argomenti). Si "attiva" quando tratto l'oggetto come una stringa ad esempio con echo oggetto. Non è obbligatorio crearla ma è una best practice. Si definisce una stringa da stampare che dia un idea dell'oggetto e eventuali informazioni utili

    $string = "User: <br>" . "Username: " . $this -> user_name . "<br>" . "Email: " . $this -> mail . "<br>"; // la stringa sarà composta da username e mail che sono sicuro siano presenti perchè sono richieste dalla contruct

    if ($this -> name) { // se è presente il nome completo lo aggiungo alla stringa (.= è come += in javascript)

      $string .= "Nome Completo: " . $this -> name . "<br>";

    } else { //altrimenti stampo --- 

      $string .= "Nome Completo: " . "---" . "<br>";

    }

    if($this -> date_of_birth){ // come sopra se il dato stampo altrimenti ci metto ---

      $string .= "Data di nascita: " . $this -> date_of_birth . "<br>";

    } else {

      $string .= "Data di nascita: " . "---" . "<br>";

    }

    return $string; // la funzione toString() ritorna la stringa

   }

  }

  // creo tre istanze della classe user

  $user1 = new User("root", "12345", "root@vodafone.com");

  $user2 = new User("admin", "admin", "admin@yahoo.com");

  $user3 = new User("pippo", "pluto"); // qua la mail verrà presa quella di default

  // modifico alcuni attributi di diverse istanze.

  $user1 -> name = "Tom Cruise";

  $user2 -> date_of_birth = "25/12/2000";

  $user3 -> user_name = "paperino";


  // stampo le tre istanze. in questo caso verrà lanciata la funzione toString() che mi restituirà i valori delle varie variabili d'istanza specifiche per ogni user
  echo $user1 . "<br>";
  
  echo $user2 . "<br>";
  
  echo $user3 . "<br>";


