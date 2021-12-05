<?php
 require '../../Back-end/connection.php';
$dispatcher = mysqli_query($connection, "SELECT * FROM dispatcher");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../images/logos/logo.PNG" type="image/x-icon">
    <link rel="stylesheet" href="styles/dispatchers.css" >
    <title>Dispatchers page</title>

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
        if(mysqli_num_rows($dispatcher) > 0 ) {
        ?>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Phone number</th>
                </tr>
        <?php
            $i=0;
            while($row = mysqli_fetch_assoc($dispatcher)){
        ?>
                <tr>
                    <td><a href=""><?php echo $row['name'];?></a></td>
                    <td><a href="tel:"><?php echo $row['phone_number'];?></a></td>
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
    </main>
</body>
</html> 