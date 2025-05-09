<?php
$fruits = array("Apple", "Banana", "Cherry");
echo $fruits[0]."<br>"; // Output: Apple


$person = array("name" => "shailesh", "age" => 25, "city" => "Paris");
echo $person["name"]."<br>"; // Output: Alice


$students = array(
    array("Alice", 85, "A"),
    array("Bob", 75, "B"),
    array("Charlie", 65, "C")
);

echo $students[1][0]."<br>";
echo $students[2][1];
?>
