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
    <link rel="stylesheet" href="swiper.min.css">
    <link rel="stylesheet" href="hranastyle.css">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
</head>

<body>
<div class="menu">
            <ul style="margin-top: 70px; text-transform:uppercase;">
                <li class="logo"><img src="Logo.png"></li>
                <li class="active"><a href="pocetna.php">Početna</a> </li>
                <li><a href="indexF.php">Filmovi</a></li>
                <li><a href="hrana.php">Hrana</a> </li>
                <li><a href="#">Destinacije</a> </li>
                <li><a href="dekoracija.php">Dekoracija</a> </li>
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
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="imgBx">
                    <img src="djumbir.jpg">
                </div>
                <div class="details">
                    <h3>Kolacic od djumbira<br><span>All Time Favourite</span></h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="imgBx">
                    <img src="cevapi.jpg">
                </div>
                <div class="details">
                    <h3>Ćevapi<br><span>All Time Favourite</span></h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="imgBx">
                    <img src="cimet.jpg">
                </div>
                <div class="details">
                    <h3>Rolnice od cimeta<br><span>All Time Favourite</span></h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="imgBx">
                    <img src="domaci-ajvar.jpg">
                </div>
                <div class="details">
                    <h3>Domaći ajvar<br><span>All Time Favourite</span></h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="imgBx">
                    <img src="peglane.png">
                </div>
                <div class="details">
                    <h3>Peglane kobasice<br><span>All Time Favourite</span></h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="imgBx">
                    <img src="rolat.jpg">
                </div>
                <div class="details">
                    <h3>Rolat<br><span>All Time Favourite</span></h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="imgBx">
                    <img src="ruska.jpg">
                </div>
                <div class="details">
                    <h3>Ruska salata<br><span>All Time Favourite</span></h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="imgBx">
                    <img src="sarme.jpg">
                </div>
                <div class="details">
                    <h3>Sarme<br><span>All Time Favourite</span></h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="imgBx">
                    <img src="sence.jpg">
                </div>
                <div class="details">
                    <h3>Pečenje<br><span>All Time Favourite</span></h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="imgBx">
                    <img src="sopska.jpg">
                </div>
                <div class="details">
                    <h3>Šopska<br><span>All Time Favourite</span></h3>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <script type="text/javascript" src="swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });
    </script>
</body>

</html>