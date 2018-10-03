<?php
$servername = "localhost";
$username = "Admin1";
$password = "Admin1";
$database = "Website angelica";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database connection
$conn = mysqli_connect("$servername", "$username", "$password", "$database");
