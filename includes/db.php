<?php
$servername = "127.0.0.1"; 
$username = "root";       
$password = "";           
$dbname = "ecommerce";    
$port = 3307; // IMPORTANT: match with XAMPP MySQL port

try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>