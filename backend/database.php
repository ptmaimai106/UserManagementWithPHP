<?php
$host = "mysql-server";
$user = "root";
$pass = "secret";
$db = "app1";




// // Create connection
 $conn = mysqli_connect($host, $user, $pass, $db);
// // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
 else{
//     echo $conn->host_info;
 }
 ?>