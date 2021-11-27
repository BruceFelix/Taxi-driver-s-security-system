<?php
//creating db connection
require 'connection.php';


//sanitizing user input
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['password'] == $_POST['passconfirm']){
        $username =  mysqli_escape_string($connection,$_POST['names']);
        $profilePicture = $mysqli->real_escape_string('image/people/'.$_FILES['profile']['name']);
        $number =  mysqli_escape_string($connection,$_POST['number']);
        $num_plates = mysqli_escape_string($connection,$_POST['plates']);
        $car_model = mysqli_escape_string($connection,$_POST['model']);
        $car_picture = $mysqli->real_escape_string('image/cars'.$_FILES['car-pic']['name']);
        $password = mysqli_escape_string($connection,password_hash($_POST['password'],PASSWORD_BCRYPT)); //hashing a password

        //make sure file type is image
        if(preg_match("!image!", $_FILES['profile']['type'])){
            //copy image to images/ folder
            if(copy($_FILES['profile']['tmp_name'], $profilePicture)){

                $_SESSION['username'] = $username;
                $insert_details = "INSERT INTO drivers(name,profile,phone_number,password) VALUES('$username','$profilePicture','$number','$password')";
                $car_details = "INSERT INTO taxi(plates,model,picture) VALUES('$num_plates','$car_model','$car_model')";


                //checking if user email already exists
                $getRecords = "SELECT phone_number FROM drivers WHERE phone_number ='$phone_number'";
                $receiveNumber = mysqli_query($connection,$getRecords);
                if(mysqli_num_rows($receiveNumber)>0){
                    echo "<h3 style='color:red'> This user aready exists.</h3>";
                }
                else{
                    if((mysqli_query($connection,$insert_details)) $$ (mysqli_query($connection,$car_details))){
        
                        echo "<h3 style='color:green'>User added successfully</h3>";
                        header("location:../Front-end/login-page/login.html");
                    }
                    else{
                        echo "<h3 style='color:red'>User not added </h3>".mysqli_error($connection);
                    }
                }
            }
            else{
                $_SESSION['message'] = "File upload fail ";
            }
        }
        else{
            $_SESSION['message'] = "Please only upload GIF, JPG, or PNG images ";
        }

    }
    else{
        $_SESSION['message'] = "The password do not match! ";
    }
}
?>
