<?php 


$server = "localhost";

$user = "root";

$password = "";

$database = "Pru";


$connect = mysqli_connect($server, $user, $password, $database);

$injection = "INSERT INTO connect VALUES ('$name','$suname', '$identification', '$mail', '$password', '$id')";


$vefication = mysqli_query($connect, $injection);

if (!$connect) {
	echo "desconnect with Error";
} else {
	echo"connect";
}



 ?>