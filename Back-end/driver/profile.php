<?php
require "../connection.php";    
if(isset($_POST['edit']))
{
    $mail = $_SESSION['email'];
    $username =  mysqli_escape_string($connection,$_POST['name']);
    $email = mysqli_escape_string($connection,$_POST['mail']);
    $number =  mysqli_escape_string($connection,$_POST['number']);
    $plates = mysqli_escape_string($connection,$_POST['plates']);
    $model = mysqli_escape_string($connection,$_POST['model']);
    $password = mysqli_escape_string($connection,password_hash($_POST['password'],PASSWORD_BCRYPT)); //hashing a password
    
    $selection = "SELECT * FROM drivers WHERE mail='$mail'";
    $updatetaxi = "SELECT* FROM taxi WHERE mail='$mail'";
    $sql = mysqli_query($connection,$selection);
    $sql2 = mysqli_query($connection,$updatetaxi);
    $rowdrivers = mysqli_fetch_assoc($sql);
    $rowtaxi = mysqli_fetch_assoc($sql2);
    
    $resdriver = $rowdrivers['mail'];
    $restaxi = $rowtaxi['mail'];
    if(($resdriver === $mail) && ($restaxi == $mail)){
        $updatedriver ="UPDATE drivers SET name='$username',mail='$email', phone_number='$number', password='$password' WHERE    mail='$mail' ";
        $updatingtaxi = "UPDATE taxi  SET mail='$mail', plates='$plates',model='$model' WHERE mail='$mail'";
        $sqluser=mysqli_query($connection,$updatedriver); 
        $sqltaxi = mysqli_query($connection,$updatingtaxi);

        if(($updatedriver) && ($updatingtaxi )){
            // if successful
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;    
            header("location: ../../Front-end/Driver/profile.php");

            echo "Done";
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