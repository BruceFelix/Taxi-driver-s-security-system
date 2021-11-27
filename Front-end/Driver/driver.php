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
                <a href="profile.html"><?php echo $_SESSION['username'] ?></a>
                <a href="../landing-page/landing.html">Logout</a>
            </div>
        </nav>
    </header>
    <main>
        <a href="form.html">
            <div class="my-divs passenger">
                <p>New Passenger</p>
            </div>
        </a>
        <a href="#">
            <div class="my-divs dispatcher">
                <p>Contact Dispatcher</p>
            </div>
        </a>
        <a href="">
            <div class="my-divs police">
                <p>Call the Police</p>
            </div>
        </a>
    </main>
    
</body>
</html>