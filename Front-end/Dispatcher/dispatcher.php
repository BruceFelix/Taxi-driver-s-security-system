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
    <link rel="stylesheet" href="styles/dispatcher.css" >
    <title>Dispatcher page</title>
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
                    header("location: login.html");
                }
                else{
                      echo "<a>".$_SESSION['username']."</a>";
                      echo "
                      <form action='../../back-end/destroy.php' method='post'>
                         <a> <input type='submit' value='Logout' id='logout'></a>
                      </form>";
                    }
                ?>
            </div>
        </nav>
    </header>
    <main>
        <div class="my-divs">
            <a href="#">
                <div class="police">
                   <p>Call the police</p>
                </div>
            </a>
        </div>
        <div class="my-divs">
            <a  href="drivers.php">
                <div class="drivers">
                    <p>View Drivers</p>
                </div>
            </a>
        </div>
    </main>
</body>
</html>