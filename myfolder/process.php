<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form values
    $name = $_POST['username'];
    $email = $_POST['email'];

   
    echo "<h2>Form Submitted Successfully!</h2>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email);
} else {
    echo "Please submit the form.";
}
?>
