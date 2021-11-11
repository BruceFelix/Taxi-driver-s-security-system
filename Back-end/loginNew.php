<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Front-end/login-page/login.css">
    <title>Log in</title>
    <?php
    require 'login.php';
    ?>
</head>
<body>
    <div class="error">
        <?php
        $noUser = "<h1 style = 'color:red; text-transform: uppercase' User not registered</h1> <br> ";
        $endOfAttempts = "<div style = 'color:red'> <strong> You can only make 3 attempts at a login. <br> Please contact your website admin. </strong></div>";
        $checkPassword = "<div style = 'color:red'> <strong> Check Your password </strong></div>";

        if($_SESSION['errorNumber'] == 1){
            echo $checkPassword;
        }
        else if($_SESSION['errorNumber'] == 2){
            echo $endOfAttempts;
        }
        else if($_SESSION['errorNumber'] == 3){
            echo $noUser;
        }
        ?>
    </div>
    <main>
        <div class="company-div">
            <div class="logo">
                <img src="../images/logos/company-logo.PNG" alt="">
            </div>
            <div>
                <h3>Welcome</h3>
            </div>
            <div class="image-capture">
                <img src="../images/images/taxi.png" alt="taxi image">
            </div>
        </div>
        <div class="sign-up">
            <form action="../Back-end/login.php" method="post">
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" required> 
                </div>
                <div>
                    <input type="submit" id="submission" value="SIGN-UP NOW">
                    <a href="../Front-end/signup/sign-up.html">Create an account</a>
                </div>
            </form>
        </div>
    </main>
    
</body>
</html>