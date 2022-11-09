<?php

class User{
    private $name;
    private $age;

    public function __construct($name,$age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    // __get magic method
    public function __get($property) {
        if(property_exists($this,$property)) {
            return $this->$property;
        }
    }

    //  __set magic method 
    public function __set($property,$value) {
        if(property_exists($this,$property)) {
            $this->$property = $value;
        }
        return $this;
    }
}
    
$user1 = new User("Ammu",22);
// will not work
// $user1->name = "Jeff";
// echo $user1->name;  

// echo $user1->setName("Jeff"); // setter
// echo $user1->getName();  // getter

$user1->__set('age',23);
echo $user1->__get('age');

$user1->__set('name','Seetha');
echo $user1->__get('name');

