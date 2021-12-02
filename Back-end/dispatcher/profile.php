<?php
require "../connection.php";    

if(isset($_POST['edit']))
{
    $mail = $_SESSION['email'];
    $username =  mysqli_escape_string($connection,$_POST['name']);
    $email = mysqli_escape_string($connection,$_POST['mail']);
    $number =  mysqli_escape_string($connection,$_POST['number']);
    $password = mysqli_escape_string($connection,password_hash($_POST['password'],PASSWORD_BCRYPT)); //hashing a password
    
    $selection = "SELECT * FROM dispatcher where mail='$mail'";
    $sql = mysqli_query($connection,$selection);
    $row = mysqli_fetch_assoc($sql);
    
    $res = $row['mail'];
    if($res === $mail){
        $updates ="UPDATE dispatcher SET name='$username',mail='$email', phone_number='$number', password='$password' where mail='$mail'";
        $sql2=mysqli_query($connection,$updates); 

        if($sql2){
            // if successful
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;    
            header("location: ../../Front-end/Dispatcher/dispatcherprofile.php");
        }
        else{
            // if updates fails
            echo "error".mysqli_error($connection);
            // header("location: ../../Front-end/Dispatcher/dispatcherprofile.html");
        }
    }
    else
    {
        /*sorry your id is not match*/
        echo "error".mysqli_error($connection);
        // header('location:Profile_edit_form.php');
    }
}
?>