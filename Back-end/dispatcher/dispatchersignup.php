<?php
require '../connection.php';

//sanitizing user input
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['password'] == $_POST['passconfirm']){
        $username =  mysqli_escape_string($connection,$_POST['names']);
        $email = mysqli_escape_string($connection,$_POST['mail']);
        $number =  mysqli_escape_string($connection,$_POST['number']);
        $password = mysqli_escape_string($connection,password_hash($_POST['password'],PASSWORD_BCRYPT)); //hashing a password

        $insert_details = "INSERT INTO dispatcher(name,mail,phone_number,password) VALUES('$username','$email','$number','$password')";
        //checking if user email already exists
        $getRecords = "SELECT * FROM dispatcher WHERE mail ='$email'";
        $receiveNumber = mysqli_query($connection,$getRecords);
        if(mysqli_num_rows($receiveNumber)>0){
            echo "<h3 style='color:red'> This user aready exists.</h3>";
        }
        else{
            if(mysqli_query($connection,$insert_details)){

                echo "<h3 style='color:green'>User added successfully</h3>";
                header("location:../../Front-end/Dispatcher/login.html");
            }
            else{
                echo "<h3 style='color:red'>User not added </h3>".mysqli_error($connection);
            }
        }
    }
    else{
        echo "The password do not match! ";
    }
}

?>