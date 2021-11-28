<?php
require '../connection.php';
   
$email = mysqli_escape_string($connection,$_POST['mail']);
$password = mysqli_escape_string($connection, $_POST['password']);

//the username entered should match with the password
$selectUser = "SELECT * FROM drivers WHERE mail='$email'";
$received = mysqli_query($connection,$selectUser);

//checking number of rows received
if($received){
    $_SESSION['username'] = "Hello";
    header("location: ../../Front-end/Driver/driver.php");  
}
else{
    echo "mysqli_error".mysqli_error($connection);
}
?>