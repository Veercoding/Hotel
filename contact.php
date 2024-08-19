<?php

$servernme = "localhost";
$username = "root";
$password = "";
$database = "hotel";


$conn = mysqli_connect($servernme, $username, $password, $database);

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];


$sql = "INSERT INTO `contact`(`firstname`, `lastname`, `email`, `phone`, `message`) 
VALUES ('$firstname','$lastname','$email','$phone','$message')";

if(mysqli_query($conn, $sql)){
    echo ("Data added successfully");

}else{
    echo "something went wrong";
}




?>