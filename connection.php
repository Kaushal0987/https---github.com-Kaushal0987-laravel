<?php
$host="localhost";
$user="root";
$pass="";
$db="kaushal";
$conn=mysqli_connect($host, $user, $pass, $db);
if(!$conn){echo "Unable to connect to database";}
?>