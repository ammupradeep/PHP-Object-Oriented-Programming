<?php

class User {
    public $name;
    public $age;

    public function __construct($name,$age){
        // echo 'Constructor ran...';
        echo 'Class ' . __CLASS__ . ' Instantiated<br>'; // Class User Instantiated
        $this->name=$name;
        $this->age=$age; 
    }

    public function sayHello(){
        return $this->name . " Says Hello";
    }

    // Called when no other references to a certain object
    // Used for cleanup, closing connections etc
    public function __destruct(){
        echo 'Destructor ran...';
    }
}

$user1 = new User("Ammu" , 22);
$user1->name = "Ammu";
echo $user1->sayHello();
echo "<br>";
echo $user1->name . ' is ' . $user1->age . ' years old ';
