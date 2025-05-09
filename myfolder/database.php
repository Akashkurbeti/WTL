<?php
// Step 1: Connect to DB
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Insert data
$sql = "INSERT INTO students (name, age) VALUES ('Alice', 20)";

if ($conn->query($sql) === TRUE) {
    echo "New record inserted successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Step 3: Display data
$sql = "SELECT id, name, age FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h3>Student List:</h3>";
    while($row = $result->fetch_assoc()) {
        echo "ID: ".$row["id"]." - Name: ".$row["name"]." - Age: ".$row["age"]."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
