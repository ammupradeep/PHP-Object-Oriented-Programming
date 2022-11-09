<?php
class User {
    protected $name = "Ammu";
    protected $age;

    public function __construct($name,$age) {
        $this->name = $name;
        $this->age = $age;
        echo "Parent class constructor";
        echo "<br>";
    }
}

class Customer extends User {
    private $balance;

    public function __construct($name,$age,$balance){
        //to invoke parent class constructoe
        parent :: __construct($name,$age);

        $this->balance=$balance;
        echo "Child class constructor";
        echo "<br>";
    }

    public function pay($amount) {
        return $this->name . " of age " . $this->age . " paid $" . $amount;
    }

    public function getBalance(){
        return $this->balance;
    }
} 

$customer1 = new Customer("Ammu Pradeep" , 22, 500);
echo $customer1->pay(1000);
echo "<br>";
echo $customer1->getBalance();