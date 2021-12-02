<?php
require '../connection.php ';
    // session_start();
    if(isset($_SESSION['username'])){
        $_SESSION['username'] = "";
    }
    unset($_SESSION['username']);
    session_destroy();
    header("location: ../../Front-end/Driver/driverlogin.html");
?>
