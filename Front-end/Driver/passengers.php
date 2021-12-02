<?php
require "../../Back-end/connection.php"; 
$driverresult = mysqli_query($connection,"SELECT * FROM customer_details");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../images/logos/logo.PNG" type="image/x-icon">
    <link rel="stylesheet" href="../Dispatcher/styles/drivers.css" >
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
                    <li><a href="driver.php">Home</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
    <?php
        if(mysqli_num_rows($driverresult) > 0  ) {
    ?>
        <table>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Pickup Point</th>
                <th>Destination</th>
            </tr>

        <?php
            $i=0;
            while($driverrow = mysqli_fetch_assoc($driverresult)){
        ?>
            <tr>
                <td><?php echo $driverrow['name'];?></td>
                <td><?php echo $driverrow['phone_number'];?></td>
                <td><?php echo $driverrow['pickuppoint'];?></td>
                <td><?php echo $driverrow['destination'];?></td>
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