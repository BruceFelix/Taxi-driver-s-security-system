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
    <link rel="stylesheet" href="../login-page/login.css">
    <title>Login</title>
</head>
<body>
    <main>
        <div class="company-div">
            <div class="logo">
                <img src="../../images/logos/company-logo.PNG" alt="">
            </div>
            <div>
                <h3>Welcome<?php echo $_SESSION['username'] ?></h3>
                
            </div>
            <div class="image-capture">
                <img src="../../images/images/taxi.png" alt="taxi image">
            </div>
        </div>
        <div class="sign-up">
            <form action="../../Back-end/login.php" method="post">
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" required> 
                </div>
                <div class="footer">
                    <input type="submit" id="submission" value="SIGN-UP NOW">
                    <a href="../signup/sign-up.html">Create an account</a>
                </div>
            </form>
        </div>
    </main>
    
</body>
</html>