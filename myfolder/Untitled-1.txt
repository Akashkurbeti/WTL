<?php
$conn = new mysqli("localhost", "root", "", "testdb");

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h3>Student List:</h3>";
    while($row = $result->fetch_assoc()) {
        echo "ID: ".$row["id"]." - Name: ".$row["name"]." - Age: ".$row["age"]."<br>";
    }
} else {
    echo "No students found.";
}

$conn->close();
?>
