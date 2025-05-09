<?php
$conn = new mysqli("localhost", "root", "", "testdb");

$sql = "DELETE FROM students WHERE name = 'ankush'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully.";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
