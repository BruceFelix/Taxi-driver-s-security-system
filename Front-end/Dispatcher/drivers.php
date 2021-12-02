<?php
require "../../Back-end/connection.php"; 
$driverresult = mysqli_query($connection,"SELECT * FROM drivers");
$taxiresult = mysqli_query($connection,"SELECT * FROM taxi");      
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../images/logos/logo.PNG" type="image/x-icon">
    <link rel="stylesheet" href="styles/drivers.css" >
    <title>Drivers page</title>
</head>
<body>
    <header>
        <nav>
            <div class="icon">
                <img src="../../images/logos/company-logo.png" alt="company logo">
            </div>
            <div class="nav-bar">
                <ul>
                    <li><a href="dispatcher.php">Home</a></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
    <?php
        if(mysqli_num_rows($driverresult) > 0 && mysqli_num_rows($taxiresult) > 0 ) {
    ?>
        <table>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Car Model</th>
                <th>Number Plate</th> 
                <th>Location</th>
            </tr>

        <?php
            $i=0;
            while(($taxirow = mysqli_fetch_assoc($taxiresult)) && ($driverrow = mysqli_fetch_assoc($driverresult))){
        ?>
            <tr>
                <td><?php echo $driverrow['name'];?></td>
                <td><?php echo $driverrow['phone_number'];?></td>
                <td><?php echo $driverrow['mail'];?></td>
                <td><?php echo $taxirow['model'];?></td>
                <td><?php echo $taxirow['plates'];?></td>
                <td><a style="font-weight: 900; color: #FF8C40;" href="#">location</a></td>
            </tr>              
        <?php
            $i++;
            }
        ?>
        </table>
        <?php
            }
            else{
                echo "No result found".mysqli_error($connection);
            }
        ?>
    </main>
</body>
</html>