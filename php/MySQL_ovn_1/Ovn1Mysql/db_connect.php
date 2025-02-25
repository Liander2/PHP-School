<?php
$servername = "localhost"; 
$username = "root";        
$password = "";            
$database = "company_db";  

// Skapa en anslutning
$conn = new mysqli($servername, $username, $password, $database);

// Kontrollera anslutningen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
