<?php
$servername = "localhost";
$username = "root";
$password = "rayssa23";
$dbname = "clovisdb";

// conectando mysql
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$conn2 = new PDO('mysql:host=localhost; dbname=clovisdb','root', 'rayssa23'); 
?>