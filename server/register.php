<?php
    
    error_reporting( error_reporting() & ~E_NOTICE);

    session_start();

    if(!empty($_SESSION['username'])){
      header("Location: ../");
    }

 	include("server.php");
    include("messages.php");
     
    
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
    <h1 class="h1">&bull; Registruj Se &bull;</h1>
    <div class="underline">
    </div>
    <div class="icon_wrapper">
        <i class="fas fa-gift presentIcon"></i>
    </div>
    <div class="row">
      <form method="POST" id="contact_form">
        <div class="error-input">
        <?php 
            if($missingUsername){ ?>
                <i class="fa fa-times-circle"></i>
                <?php writeMessage('Polje "Nadimak" je obavezno.');
            }

            if($takenUsername){ ?>
                <i class="fa fa-times-circle"></i>
                <?php writeMessage('Nadimak je već zauzet.');
            }
        ?>
        </div>
        <div class="col-md-12">        
          <input id="name_input" placeholder="Nadimak" type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" name="username" value=""  autofocus>
              <span class="invalid-feedback" role="alert">
                  <strong></strong>
              </span>
        </div>
        <div class="error-input">
        <?php 
            if($missingEmail){ ?>
                <i class="fa fa-times-circle"></i>
                <?php writeMessage('Polje "Email" je obavezno.');
            }

            if($invalidEmail){ ?>
                <i class="fa fa-times-circle"></i>
                <?php writeMessage('Email nije ispravnog formata.');
            }

            if($takenEmail){ ?>
                <i class="fa fa-times-circle"></i>
                <?php writeMessage('Email je već registrovan.');
            }
        ?>
        </div>
        <div class="col-md-12">        
          <input id="email" type="email" placeholder="Email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="" >
            <span class="invalid-feedback" role="alert">
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
          <input id="password" type="password" placeholder="Šifra" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" >
            <span class="invalid-feedback" role="alert">
            </span>
        </div>
        <div class="error-input">
        <?php 
            if($notMatchingPasswords){ ?>
                <i class="fa fa-times-circle"></i>
                <?php writeMessage('Šifre se ne poklapaju.');
            }
        ?>
        </div>
        <div class="col-md-12">        
          <input id="password-confirm" placeholder="Potvrdi Šifru" type="password" name="passwordconfirm" >
        </div>
        <div class="submit col-md-12">
            <button type="submit" id="form_button" name="register">
                Registruj Se
            </button>
            
        </div>
        <div class="col-md-12 go-back">
          <a href="../">POČETNA | </a>
          <a href="../">NAZAD | </a>
          <a href="login.php">ULOGUJ SE</a>
        </div>      
      </form><!-- // End form -->
    </div>
  </div><!-- // End #container -->

</body>
</html>