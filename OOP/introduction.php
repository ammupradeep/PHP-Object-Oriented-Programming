<?php
// Define a class
class User {
    // properties(Attributes)
    public $name;

    // Methods(Functions)
    public function sayHello(){
        return $this->name . ' Says Hello';
    }
}

// Instantiate a user object from the user class
$user1 = new User();

$user1->name = 'Ammu';
// echo $user1->name;
echo '<br>';
echo $user1->sayHello();

echo '<br>';
// Create new user
$user2 = new User();
$user2->name = 'Pradeep';
// echo $user2->name;
echo '<br>';
echo $user2->sayHello();