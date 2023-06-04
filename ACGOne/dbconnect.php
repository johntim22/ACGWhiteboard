<?php
$servername = "localhost:3306";
$username = "timotheatos_root";
$password = "!Deree2021#";
$dbname = "timotheatos_ACGOneUsers";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
