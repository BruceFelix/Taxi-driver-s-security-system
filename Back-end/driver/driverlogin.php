<?php
require '../connection.php';
if(isset($_POST['mail']) && isset($_POST['password'])){

$email = mysqli_escape_string($connection,$_POST['mail']);
$password = mysqli_escape_string($connection, $_POST['password']);

//the username entered should match with the password
$selectUser = "SELECT * FROM drivers WHERE mail='$email'";
$received = mysqli_query($connection,$selectUser);

//checking number of rows received
if(!$received){
    echo "mysqli_error".mysqli_error($connection);
}
else{
    $row =mysqli_num_rows($received);
    $received = mysqli_fetch_assoc($received);
    if($row>0)
    {
        
        if(password_verify($password,$received['password']))
        {   
            $_SESSION['email'] = $received['mail'];
            $_SESSION['username'] = $received['name'];
            header("location: ../../Front-end/Driver/driver.php");

        }
        else{
            header("location:../../Front-end/Driver/driverlogin.html");
        }
    }
    else
    {
        header("location:../../Front-end/Driver/driverlogin.html");
    }
}
}
?>