<?php
$servername = "localhost";
$username = "root";
$password = "pass";
$dbname = "laundry_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

$query = "SELECT *
FROM service
INNER JOIN price
ON service.service_id = price.service_id";

$query = "SELECT *
FROM category
INNER JOIN price
ON category.category_id = price.category_id";

$result = mysqli_query($conn, $query);
mysqli_close($conn);
?>