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
$pin = $_POST['pin'];   
$room = $_POST['room'];
$radio1 = $_POST['radio1'];
$radio2 = $_POST['radio2'];


$sql = "INSERT INTO `payment`(`name`, `pin`, `room`, `radio1`, `radio2`) VALUES ('$name','$pin','$room','$radio1','$radio2')";

if(mysqli_query($conn, $sql)){
    echo ("Data added successfully");

}else{
    echo "something went wrong";
}



?>