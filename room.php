<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$room = $_POST['room'];
$arrivaldate = $_POST['arrivaldate'];
$returndate = $_POST['returndate'];

$sql = "INSERT INTO `rooms`(`name`, `email`, `room`, `arrivaldate`, `returndate`) VALUES ('$name','$email', '$room', '$arrivaldate','$returndate')";

if(mysqli_query($conn, $sql)){
    echo ("Data added successfully");

}else{
    echo "something went wrong";
}



?>