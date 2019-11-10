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
    <title>Dekoracija</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>

<div class="container">
        <div id="snow_fall"></div>
        <div class="menu">
            <ul style="margin-top: 70px; text-transform:uppercase;">
                <li class="logo"><img src="Logo.png"></li>
                <li class="active"><a href="pocetna.php">Početna</a> </li>
                <li><a href="indexF.php">Filmovi</a></li>
                <li><a href="hrana.php">Hrana</a> </li>
                <li><a href="destinacije.php">Destinacije</a> </li>
                <li><a href="dekoracija.php">Dekoracija</a> </li>
                <li><a href="pokloni.php">Pokloni</a> </li>
                <?php if(isset($_SESSION['username'])){ ?>
                    <li><a href="http://localhost:8080/fonisInterniHakaton/pocetna.php?logout=1" class="signup-btn"><span>Izloguj Se (<?php echo $currentUserUsername; ?>)</span></a></li>
                <?php }else{?>
                    <li><a href="server/login.php" class="signup-btn"><span>Uloguj Se</span></a></li>
                    <li><a href="server/register.php" class="signup-btn"><span>Registruj Se</span></a></li>
                <?php } ?>
                <div class="song"></div>
                <audio class="audio" controls preload="metadata">
                    <source src = "nzm.mp3" type="audio/ogg">
                </audio>
            </ul>
        </div>


    <h1>DEKORACIJA</h1>
  
    <div class="kuca">
        <img class="pic1 slika" src="Home.jpg" alt="Slika nije prikazana" >
        <img class="pic2 slika" src="Kidsroom.jpg" alt="Slika nije prikazana" >
        <img class="pic3 slika" src="Backyard.png" alt="Slika nije prikazana" >
    </div>


    <div class="slike">
        <div>
                <img class="pic1 slika" src="Dnevna soba.jpg" alt="Slika nije prikazana" >
                <img class="pic2 slika" src="Vrata.jpg" alt="Slika nije prikazana" >
                <img class="pic3 slika" src="Staklo.jpg" alt="Slika nije prikazana" >
                <img class="pic4 slika" src="Stepenice.jpg" alt="Slika nije prikazana">
                <img class="pic5 slika" src="Case.jpg" alt="Slika nije prikazana">
        </div>
        <div>
            
                <img class="pic1 slika" src="Zid.jpg" alt="Slika nije prikazana" >
                <img class="pic2 slika" src="Prozor.jpg" alt="Slika nije prikazana" >
                <img class="pic3 slika" src="D soba 1.jpg" alt="Slika nije prikazana" >
                <img class="pic4 slika" src="Krevet.jpg" alt="Slika nije prikazana">
                <img class="pic5 slika" src="Jelka.jpg" alt="Slika nije prikazana">
        </div>
        <div>
            <img class="pic1 slika" src="Drvece.png" alt="Slika nije prikazana">
            <img class="pic2 sika" src="Dvoriste.jpg" alt="Slika nije prikazana">
            <img class="pic3 slika" src="Ulazna vrata.jpg" alt="Slika nije prikazana">
            <img class="pic4 slika" src="Vatra.jpg" alt="Slika nije prikazana">
            <img class="pic5 slika" src="Terasa.jpg" alt="Slika nije prikazana">
            
            
            
            

            

        </div>

    </div>

    <div class="opis">
        <h3>Kuca</h3>
        <h3>Decija soba</h3>
        <h3>Dvoriste</h3>
    </div>
    <div class="container">
        
    </div>

    <div class="popup-wrapper">

        <div class="popup">
            
        </div>
        
    </div>
    <script src="script.js"></script>
</body>

</html>