<?php
require '../connection.php';
$mail = $_SESSION['email'];
$username =  mysqli_escape_string($connection,$_POST['name']);
$number =  mysqli_escape_string($connection,$_POST['number']);
$mail =  mysqli_escape_string($connection,$_POST['mail']);
$point = mysqli_escape_string($connection,$_POST['point']);
$destination = mysqli_escape_string($connection,$_POST['destination']);

$insert_details = "INSERT INTO customer_details(name,mail,phone_number,pickuppoint, destination) VALUES('$username','$mail','$number','$point','$destination')";

if(mysqli_query($connection,$insert_details)){
    header("location: ../../Front-end/Driver/driver.php");
}
else{
    echo "<h3 style='color:red'>details not added </h3>".mysqli_error($connection);

}

?>