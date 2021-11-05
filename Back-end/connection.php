<?php
$user = 'cybernomand';
$host = "localhost";
$password = "D4yl!4D?Oef4ISYC";

if($connection = mysqli_connect($host,$user,$password)){
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
$tableCreator = "CREATE TABLE driversdetails (id int auto_increment, name varchar(30), password varchar(253), primary key(id), email varchar(50) , dob DATE, code varchar(50))";

?>