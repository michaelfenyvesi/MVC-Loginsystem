<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
  <title><?php echo SITENAME; ?></title>
</head>
<body>
    <header>
            <div id="navbar">
                <img src="...public/img/logo.png" alt="Logo" id="logo">

                <b><a href="<?php echo URLROOT; ?>" id ="header_ueberschrift">QUIZSPIEL</a></b>

            </div>
        
            <div>
            <?php if(isset($_SESSION['user_id'])) { ?>
			     <a href="<?php echo URLROOT; ?>/users/logout"><button class="header_register_submit">logout</button></a>
            <?php } else { ?>
			     <a href="<?php echo URLROOT; ?>/users/register"><button class="header_register_submit">registrieren</button></a>
                
                 <a href="<?php echo URLROOT; ?>/users/login"><button class="header_register_submit">login</button></a>
            <?php } ?>    
            </div>         
    </header>