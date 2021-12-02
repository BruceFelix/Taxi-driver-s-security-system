<?php
require "../../Back-end/connection.php";
$selectDetails = "SELECT * FROM dispatcher";
$result = mysqli_query($connection,$selectDetails);
if(mysqli_num_rows($result) > 0 ) {
    $driversresult = mysqli_fetch_assoc($result);
}    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/dispatcherprofile.css">
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
                <ul>
                    <li><a href="dispatcher.php">Back</a></li>
                    <!-- <li><a href="login.html">Logout</a></li> -->
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="left">
            <div class="img">
                <img src="../../images/images/man.png" alt="">
                <h3><?php echo $driversresult['name'];?></h3>
                <p><?php echo $driversresult['mail'];?></p>
                <p>+254<?php echo $driversresult['phone_number'];?></p>
            </div>
        </div>
        <div class="profile">
            <form action="../../Back-end/dispatcher/profile.php" method="POST" enctype="multipart/form-data">
                <legend> <strong>Profile Settings</strong></legend>
                <div class="names">
                        <label for="name">Fullname</label><br>
                        <input type="text" name="name" value="<?php echo $driversresult['name'];?>"> 
                </div>
                <div class="mail">
                    <label for="mail">Email</label><br>
                    <input type="email" name="mail" value="<?php echo $driversresult['mail'];?>"> 
                </div>

                <div class="other-details">
                    <div>
                        <label for="number">Phone Number</label><br>
                        <input type="tel" name="number" value="+254<?php echo $driversresult['phone_number'];?>">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password">
                    </div>
                </div>
                <input type="submit" name="edit" value="Save Profile">
            </form>
        </div>
    </main>
</body>
</html>