<?php
// 1. String
$name = "Alice";
echo "String: $name<br>\n";

// 2. Integer
$age = 25;
echo "Integer: $age <br>\n";

// 3. Float (or double)
$height = 5.7;
echo "Float: $height<br>\n";

// 4. Boolean
$is_student = true;
echo "Boolean:" . ($is_student ? "true" : "false") .  "\n";

// 5. Array
$colors = array("Red", "Green", "Blue");
echo "Array: ";
print_r($colors);

// 6. Object
class Car {
    public $brand;
    public function __construct($brand) {
        $this->brand = $brand;
    }
}
$myCar = new Car("Toyota");
echo "Object: " . $myCar->brand . "\n";

?>
