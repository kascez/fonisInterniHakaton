<?php
    
    error_reporting( error_reporting() & ~E_NOTICE);
    include("server/server.php");

    if(!empty($_SESSION['success'])){
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    }

    if(!empty($_SESSION['loggedout'])){
        echo $_SESSION['loggedout'];
        unset($_SESSION['loggedout']);
    }
     
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php if(isset($_SESSION['username'])){ ?>
        <a href="http://localhost:8080/fonisInterniHakaton/index.php?logout=1" class="register">Logout</a>
    <?php }else{?>
        <a href="server/login.php">Login</a><br>
        <a href="server/register.php">Register</a><br>
    <?php } ?>



<br><br><br><br>
    <a href="server/login.php">Login</a><br>
    <a href="server/register.php">Register</a><br>
    <a href="http://localhost:8080/fonisInterniHakaton/index.php?logout=1" class="register">Logout</a>
</body>
</html>