<?php 
    error_reporting( error_reporting() & ~E_NOTICE);
    include("server.php");
    include("messages.php");
    /* ********************** GET USER FROM DB ************************ */
    $query = "SELECT * FROM users";
    $result = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../loginCSS.css">
    <script src="https://kit.fontawesome.com/5c5689b7a2.js" crossorigin="anonymous"></script>
</head>
<body>

  <div id="container">
    <h1 class="h1">&bull; Uloguj Se &bull;</h1>
    <div class="underline">
    </div>
    <div class="icon_wrapper">
      <i class="fas fa-gift presentIcon"></i>
    </div>
    <div class="row">
    <div class="error-input wrong-comb">
        <?php 
            if($wrongCombination){ ?>
                <i class="fa fa-times-circle"></i>
                <?php writeMessage('Pogrešna kombinacija.');
            }
        ?>
    </div>
      <form method="POST" id="contact_form">
      <div class="error-input">
        <?php 
            if($missingUsername){ ?>
                <i class="fa fa-times-circle"></i>
                <?php writeMessage('Polje "Nadimak" je obavezno.');
            }
        ?>
        </div>
        <div class="col-md-12">        
          <input id="username" type="text" placeholder="Nadimak" class="is-invalid" name="username" value="">
            <span class="invalid-feedback" role="alert">
                <strong></strong>
            </span>
        </div>
        <div class="error-input">
        <?php 
            if($missingPassword){ ?>
                <i class="fa fa-times-circle"></i>
                <?php writeMessage('Polje "Šifra" je obavezno.');
            }
        ?>
        </div>
        <div class="col-md-12">        
          <input id="password" type="password" placeholder="Šifra" class="is-invalid" name="password">
            <span class="invalid-feedback" role="alert">
            </span>
        </div>
        <div class="submit col-md-12">
            <button type="submit" id="form_button" name="login">
                Uloguj Se
            </button>
        </div>
        <div class="col-md-12 go-back">
          <a href="../pocetna.php">Početna | </a>
          <a href="../pocetna.php">Nazad | </a>
          <a href="register.php">Registruj Se</a>
        </div>      
      </form><!-- // End form -->
    </div>
  </div><!-- // End #container -->

</body>
</html>