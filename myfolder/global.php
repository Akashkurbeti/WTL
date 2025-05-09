<?php

$x = 10;
$y = 20;

function add() {
    
    global $x, $y;
    $sum = $x + $y;
    echo "Sum is: $sum<br>";
}

add(); 
?>
