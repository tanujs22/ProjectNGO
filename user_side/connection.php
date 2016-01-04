<?php
$servername = "localhost";
$username = "root";
$password = "root123";
$db = "project_ngo";
// create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// check connection
if ($conn -> connect_error){
    die("Connection failed: " . $conn->connect_error);
}else{
    
}
?>
