<?php
 require '../../Back-end/connection.php';
$police = mysqli_query($connection, "SELECT * FROM policestations");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../images/logos/logo.PNG" type="image/x-icon">
    <link rel="stylesheet" href="styles/police.css" >
    <script src="maps.js"></script>
    <title>Police page</title>

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
                      echo '<a href="dispatcherprofile.php">'.$_SESSION['username'].'</a>';
                      echo "
                      <form action='../../back-end/driver/destroy.php' method='post'>
                         <a id='logout'> <input type='submit' value='Logout' id='logout'></a>
                      </form>";
                    }
                ?>
            </div>
        </nav>
    </header>
    <main class="police">
        <div id="map"></div>
    </main>
    <!-- <script>
        var  infoWindow = new google.maps.infoWindow({
        content: '<h3> Bruce</h3>'
    });
    </script> -->
    <script> getLocation() </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7nOf7hBVVd1HvGyKEv-zIZGlNnBvc27Y&callback=initMap&libraries=places,geometry&solution_channel=GMP_QB_locatorplus_v4_cABD" async defer></script>
</body>
</html> 