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
    <title>IdejaZaPoklon</title>
    <link rel="stylesheet" href="style3.css">
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
                    <li><a href="http://localhost/fonisInterniHakaton/pocetna.php?logout=1" class="signup-btn"><span>Izloguj Se (<?php echo $currentUserUsername; ?>)</span></a></li>
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

    <div class="naslov">
            <h1>
                    IDEJA ZA POKLON
                </h1>
            
    </div>
    
    <div class="wrapper">

        <div class="card cestitke">
            <a target="_blank" href="http://www.copyplanet.rs/menu/3931/cestitke">
                <img src="cestit-page-001.jpg"  alt="Slika nije učitana.">
            </a>
            <h2>ČESTITKE</h2>
        </div>
        <div class="card igr">
           
            <a target="_blank" href="https://www.dexy.co.rs/igracke">
                <img src="meda.jpg" alt="Slika nije učitana.">
            </a>
            <h2>IGRAČKE</h2>
        </div>
        <div class="card garderoba">
            
            <a target="_blank" href="https://www.zara.com/rs/">
                <img src="gar.jpg" alt="Slika nije učitana.">
            </a>
            <h2>GARDEROBA</h2>
        </div>
        <div class="card slatkisi">
            
            <a target="_blank" href="http://www.sanmarina.rs/onama">
                <img src="plavo.png" alt="Slika nije učitana.">
            </a>
            <h2>SLATKIŠI</h2>
        </div>
        <div class="card specijal">
            <a target="_blank" href="https://www.pokloni.com/"> <img src="plup.png" alt="Slika nije učitana."></a>
           <h2>IZNENAĐENJE</h2>
        </div>
    </div>

</body>
</html>