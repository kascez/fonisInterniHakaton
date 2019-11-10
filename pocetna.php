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
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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

        <div class="tata">
            <div class="app-text">
                <h1>Srećna Nova Godina!!!</h1>
                <p>Dobrodošli na naš sajt "How2NovaGodina" <br> Naš sajt vam omogućava da se na najlakši <br> način
                    pripremite za Novu Godinu <br> Na našem sajtu možete pronaći ideje <br> za poklone, destinacije za
                    novogodišnja <br> putovanja, kako da ukrasite svoj dom <br> kao i neke od najpoznatijih filmova <br>
                    i serija. </p>
            </div>
            <div class="djede_mraz">
                <img src="djedemraz.gif">
            </div>
        </div>
        <div class="social-icons">
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="banner">

    </div>
    <script type="text/javascript" src="particles.js"></script>
    <script type="text/javascript" src="app.js"></script>



</body>

</html>