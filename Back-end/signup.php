<?php
//creating db connection
require 'connection.php';

//sanitizing user input
$username =  mysqli_escape_string($connection,$_POST['name']);
$phone_number =  mysqli_escape_string($connection,$_POST['number']);
$carplates =  mysqli_escape_string($connection,$_POST['plates']);
$carmodel =  mysqli_escape_string($connection,$_POST['model']);

//hashing a password
$password = mysqli_escape_string($connection,password_hash($_POST['password'],PASSWORD_BCRYPT));

$insert_details = "INSERT INTO usersdetails(name,phonenumber,carplates,carmodel,password) VALUES('$username','$phone_number','$carplates','$carmodel','$password')";

//checking if user email already exists
$getRecords = "SELECT phonenumber FROM usersdetails WHERE phonenumber ='$phone_number'";
$receiveNumber = mysqli_query($connection,$getRecords);
if(mysqli_num_rows($receiveNumber)>0){
    echo "<h3 style='color:red'> This user aready exists.</h3>";
}
else{
    if(mysqli_query($connection,$insert_details)){
        echo "<h3 style='color:green'>User added successfully</h3>";
        header("location:../Front-end/login-page/login.html");
    }
    else{
        echo "<h3 style='color:red'>User not added </h3>".mysqli_error($connection);
    }
}
?>