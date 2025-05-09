<?php

function counter() {
    static $count = 0; 
    $count++;
    echo "Count is: $count<br>";
}

counter(); 

counter(); 

counter(); 
?>
