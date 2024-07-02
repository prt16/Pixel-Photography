<?php
$servername = 'localhost';
$username = 'root';
$password='Pradeepa@16';
$dbname= 'pixel';
$conn = mysqli_connect($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
