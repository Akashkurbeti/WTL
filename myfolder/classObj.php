<?php

class Car {
   
    public $brand;
    public $color;

   
    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

   
    public function displayInfo() {
        echo "This car is a " . $this->color . " " . $this->brand . ".<br>";
    }
}


$car1 = new Car("Toyota", "Red");
$car2 = new Car("BMW", "Black");


$car1->displayInfo(); 
$car2->displayInfo();  
?>
