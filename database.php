<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "personalportfolio";
//create a connection
$conn = mysqli_connect($servername,$username,$password,$database_name);

// check the conn 
if ($conn == false){
    die ("Connection failed: " . mysqli_connect());

}
?>