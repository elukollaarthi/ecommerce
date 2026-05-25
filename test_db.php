<?php
$servername = "127.0.0.1"; // or "localhost"
$username = "root";        // default in XAMPP
$password = "";            // default is empty
$dbname = "ecommerce";     // your database name
$port = 3307;              // <-- update if you changed from 3306

try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>