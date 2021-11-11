<?php
$user = 'cybernomand';
$host = "localhost";
$password = "D4yl!4D?Oef4ISYC";
$database = "Taxi_drivers_security_system";
if($connection = mysqli_connect($host,$user,$password,$database)){
    // echo "<h3 style='color:green'>Connected successfully</h3>";
}
else{
    echo"<h3 style='color:red'>Could not connect successfully</h3>" .mysqli_error($connection);
}

$createdb = "CREATE DATABASE Taxi_drivers_security_system";
// // sql statements
// if(mysqli_query($connection,$createdb)){
//     echo "<h3 style='color:green'>DB created successfully</h3>";

// }
// else{
//     echo "<h3 style='color:red'>DB not created</h3>".mysqli_error($connection);

// }
$tableCreator = "CREATE TABLE usersdetails (id int auto_increment, fname varchar(30),lname varchar(30), primary key(id),profile_picture varchar(30),phonenumber int(50), password varchar(253))";
if(mysqli_query($connection, $tableCreator)){
    echo "Table created successfully";
}
else{
    echo "Table not created".mysqli_error($connection);
}
$dispatchertable = "CREATE TABLE taxis (id int auto_increment, plates varchar(30), primary key(id), model varchar(30), car_pic varchar(253))";
if(mysqli_query($connection, $dispatchertable)){
    echo "Table created";
}
else{
    echo "Not created".mysqli_error($connection);
}
?>