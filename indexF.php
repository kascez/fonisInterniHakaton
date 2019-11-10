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
    <title>Filmovi</title>
    <link rel="stylesheet" href="styleF.css">
</head>



<body>

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

    <div class="naslov">
        <h1>FILMOVI</h1>
    </div>
    <div class="upm">
        <p>Biraj i gledaj najbolje filmove kod nas! <br> Specijalizovano samo za vas uzitak u novgodisnjoj sezoni!</p>
    </div>

    <div class="projekti">
        <div class="card">
            <a href="https://www.imdb.com/title/tt1067106/"><img class="active" id="proba" src="51rEhyKpP6L._SY445_.jpg" alt=""></a>
            <h3>A Christmas Carol</h3>
            <p>An animated retelling of Charles Dickens' classic novel about a Victorian-era miser taken on a journey of self-redemption, courtesy of several mysterious Christmas apparitions.</p>
        </div>
        <div class="card">
            <a href="https://www.imdb.com/title/tt0107688/"></a><img class="active" src="9781772758085_p0_v1_s550x406.jpg" alt="">
            </a>
            <h3>The Nightmare Before Christmas</h3>
            <p class>Jack Skellington, king of Halloween Town, discovers Christmas Town, but his attempts to bring Christmas to his home causes confusion.</p>
        </div>
        <div class="card">
            <a href="https://www.imdb.com/title/tt0058536/">
                <img class="active" src="220px-Poster_of_the_movie_Rudolph_the_Red-Nosed_Reindeer.jpg" alt="">
            </a>
            <h3>Rudolph</h3>
            <p>A misfit reindeer and his friends look for a place that will accept them.</p>
        </div>
        <div class="card">
            <img class="active" src="MV5BYmE5Yjg0MzktYzgzMi00YTFiLWJjYTItY2M5MmI1ODI4MDY3XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg" alt="">
            <h3>The Grinch</h3>
            <p>A grumpy Grinch plots to ruin Christmas for the village of Whoville.</p>
        </div>
        <div class="card">
            <img class="active" src="filmmm.jpg" alt="">
            <h3>The Princess Switch</h3>
            <p>A Chicago baker (V.Hudgens) is competing in a Christmas baking competition in Belgravia. There she bumps into the prince's fiancee. They look alike and switch for 2 days. "Life is what happens to you while you're busy making other plans."</p>
        </div>
        <div class="card">
            <img class="active" src="MV5BNTQ4ZmY0NjgtYzVhNy00NzhiLTk3YTYtNzM1MTdjM2VhZDA3XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX182_CR0,0,182,268_AL_.jpg" alt="">
            <img src="MV5BYmE5Yjg0MzktYzgzMi00YTFiLWJjYTItY2M5MmI1ODI4MDY3XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg" alt="">
            <img src="filmmm.jpg" alt="">
            <h3>Last Christmas</h3>
            <p>Kate is a young woman subscribed to bad decisions. Her last date with disaster? That of having accepted to work as Santa's elf for a department store. However, she meets Tom there. Her life takes a new turn. For Kate, it seems too good to
                be true.</p>
        </div>
    </div>



</body>

</html>