<?php
session_start();
require 'connection.php';

if(!isset($_SESSION['errorNumber'])){
    $_SESSION['errorNumber'] = 0;
}
if(!isset($_SESSION['attempts'])){
    $_SESSION['attempts'] = 0;
}
if(isset($_POST['name']) && isset($_POST['password'])){
   
$username = mysqli_escape_string($connection,$_POST['name']);
$password = mysqli_escape_string($connection, $_POST['password']);

//the username entered should match with the password
$selectUser = "SELECT * FROM usersdetails WHERE name='$username'";
$received = mysqli_query($connection,$selectUser);

//checking number of rows received
if(!$received){
    echo "mysqli_error".mysqli_error($connection);
}
else{
    $row = mysqli_num_rows($received);
    $received = mysqli_fetch_assoc($received);
    if($row>0){

        if($_SESSION['attepts']<3){

            //php ftn for checking hashed passwords
            if(password_verify($password,$received['password'])){

                $_SESSION['name'] = $username;
                echo $_SESSION['name']."welcome";
                //delay the code below for 5 seconds
                // sleep(5);
                
                //if its the admin loggin in, take him to dispatcher page
                if($username == "admin"){
                    header("location:../Frond-end/Dispatcher/dispatcher.html");
                }
                else{
                    header("location:../Front-end/client-page/client.html");
                }
            }
            else{
                $_SESSION['errorNumber'] = 1;
                $checkpassword = "<div style = 'color:red'> <strong> check your password </strong></div>";
                $_SESSION['attempts']++;

                $attemptsLeft = "<div style = 'color:red'> <strong> You have ".(3-$_SESSION['attempts'])." attempts left. </strong></div>";
                // sleep(5);
                header("location: loginNew.php");
            }
        }
        else{
            // when there are more than 3
            $_SESSION['errorNumber'] = 2;
            $endOfAttempts = "<div style = 'color:red'> <strong>You can only make 3 attempts at a login. <br> Please contact your website admin. </strong></div>";
            // sleep(5);
            // header("location:../front-end/login.html");
            header("location:../Front-end/client-page/loginNew.php");
        }    
    }
    else{
        $_SESSION['errorNumber'] = 3;
        $noUser = "<h1> style = 'color':red;'> User nor registered</h1> <br>";
        echo $_SESSION['attempts'];
        header("location:../Front-end/client-page/loginNew.php");
    }
}
}
?>