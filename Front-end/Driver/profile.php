<?php
require "../../Back-end/connection.php";
$selectDetails = "SELECT * FROM drivers";
$selectTaxi = "SELECT * FROM taxi";
$result = mysqli_query($connection,$selectDetails);
$taxiresult = mysqli_query($connection,$selectTaxi);
if((mysqli_num_rows($result) > 0) && (mysqli_num_rows($taxiresult) > 0)) {
    $driverresult = mysqli_fetch_assoc($result);
    $carresult = mysqli_fetch_assoc($taxiresult);
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Driver/styles/profile.css">
    <link rel="shortcut icon" href="../../images/logos/logo.PNG" type="image/x-icon">
    <title>Profile page</title>
</head>
<body>
    <header>
        <nav>
            <div class="icon">
                <img src="../../images/logos/company-logo.png" alt="company logo">
            </div>
            <div class="nav-bar">
                <a href="driver.php">Back</a>
                <!-- <a href="../../Front-end/landing-page/landing.html">Logout</a> -->
            </div>
        </nav>
    </header>
    <main>
        <div class="left">
            <div class="img">
                <?php echo "<img class='theimage' src='../../Back-end/photos/people/".$driverresult['profile']."'>"?>
                <!-- <img src="../../images/images/man.png" alt=""> -->
                <h3><?php echo $driverresult['name'];?></h3>
                <p><?php echo $driverresult['mail'];?></p>
                <p><?php echo $driverresult['phone_number'];?></p>
            </div>
        </div>
        <div class="profile">
            <form action="../../Back-end/driver/profile.php" method="POST" enctype="multipart/form-data"> 
                <legend> <strong>Profile Settings</strong></legend>
                <div class="names">
                        <label for="name">Fullname</label><br>
                        <input type="text" name="name" class="holder" value="<?php echo $driverresult['name'];?>"> 
                </div>
                <div class="mail">
                    <label for="mail">Email</label><br>
                    <input type="email" name="mail" value="<?php echo $driverresult['mail'];?>"> 
                </div>
                <div class="other-details">
                    <div>
                        <label for="tel">Phone Number</label><br>
                        <input type="tel" name="tel" value="+254<?php echo $driverresult['phone_number'];?>">
                    </div>
                    <div>
                        <label for="plates">Number plate</label> <br>
                        <input type="text" name="plates" value="<?php echo $carresult['plates'];?>">
                    </div>
                    <div>
                        <label for="model">Car model</label> <br>
                        <input type="text" name="model" value="<?php echo $carresult['model'];?>">
                    </div>
                    <div>
                        <label for="cpic">Car picture</label> <br>
                        <input type="file" name="cpic">
                    </div>
                </div>
                <input type="submit" name='edit' value="Save Profile">
            </form>
        </div>
    </main>
</body>
</html>