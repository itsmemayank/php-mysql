<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mywebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id = $_GET["id"];

// sql to delete a record
$sql = "DELETE FROM users WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("location:25-DeleteRecord.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>