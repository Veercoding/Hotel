<?php 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}

$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$guest = $_POST['guest'];


$sql = "INSERT INTO `booking`(`checkin`, `checkout`, `guest`) VALUES ('$checkin','$checkout','$guest')";

if(mysqli_query($conn, $sql)){
    echo "Booking Successful";
}else{
    echo"error";
}


?>