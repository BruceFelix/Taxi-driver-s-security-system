<?php
 require '../../Back-end/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../images/logos/logo.PNG" type="image/x-icon">
    <link rel="stylesheet" href="styles/driver.css" >
    <title>Driver's page</title>
</head>
<body>
    <header>
        <nav>
            <div class="icon">
                <img src="../../images/logos/company-logo.png" alt="company logo">
            </div>
            <div class="nav-bar">
                <?php
                if(!isset($_SESSION['username'])){
                    header("location: driverlogin.html");
                }
                else{
                      echo '<a href="profile.php">'.$_SESSION['username']. "</a>";
                      echo "
                      <form action='../../back-end/driver/destroy.php' method='post'>
                         <a id='logout'> <input type='submit' value='Logout' id='logout'></a>
                      </form>";
                    }
                ?>
                <a href="tel:999">Help </a>
            </div>
        </nav>
    </header>
    <main>
        <a href="form.html">
            <div class="my-divs passenger">
                <p>New Passenger</p>
            </div>
        </a>
        <a href="disptachers.php">
            <div class="my-divs dispatcher">
                <p>Contact Dispatcher</p>
            </div>
        </a>
        <a href="passengers.php">
            <div class="my-divs passenger">
                <p>View Passengers</p>
            </div>
        </a>
        <a href="policemap.php">
            <div class="my-divs police">
                <p>Call the Police</p>
            </div>
        </a>
    </main>
    
</body>
</html>