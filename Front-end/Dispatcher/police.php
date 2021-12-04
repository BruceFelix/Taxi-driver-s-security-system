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
                      <form action='../../back-end/dispatcher/destroy.php' method='post'>
                         <a id='logout'> <input type='submit' value='Logout' id='logout'></a>
                      </form>";
                    }
                ?>
            </div>
        </nav>
    </header>
    <main class="police">
        <div class="left">
        <?php
        if(mysqli_num_rows($police) > 0 ) {
        ?>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Phone number</th>
                </tr>
        <?php
            $i=0;
            while($row = mysqli_fetch_assoc($police)){
        ?>
                <tr>
                    <td><a href=""><?php echo $row['name'];?></a></td>
                    <td><?php echo $row['number'];?></td>
                </tr>
        <?php
            $i++;
            }
        ?>
            </table>
        <?php
            }
            else{
                echo "No results found.".mysqli_error($connection);
            }
        ?>
        </div>
        <div id="map"></div>
    </main>
    <script src="maps.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0TOlBoaCqdBkmXn7YOw7BGP8CNtYE4sM&callback=initMap"></script>
</body>
</html> 