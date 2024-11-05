<?php
$servername = "localhost";
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "my_db"; // your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>