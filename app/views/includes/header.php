<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Travel Tsunami </title>
    <link rel="stylesheet" href="public/css/Header.css">
    <link rel="stylesheet" href="public/css/style.css">

</head>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/Header.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
  <title><?php echo SITENAME; ?></title>
</head>

<body>
    <div class="header">
        <h1>Travel Tsunami</h1>
        <p>Experience The Fullness Of Traveling</p>
        <a href="Contact" class="contact-btn"> Contact Us For More Information </a>
    </div>

    <div class="navigation-top">
        <a href="/eCommerce-Project/Home" style="float:left; font-weight: bold;">Travel Tsunami</a>
        <a href="/eCommerce-Project/Contact" class="nav-links" style="float:left">Contact</a>
        <a href="/eCommerce-Project/Cruise" class="nav-links" style="float:left">Cruises</a>
        <a href="/eCommerce-Project/Flight" class="nav-links" style="float:left">Flights</a>

        <?php 
            if (isLoggedIn()) {
              echo '<a class="nav-link" style="float:left" href="/eCommerce-Project/Trip/create"> Publish </a>';
            }
          ?>

        <?php
    if (isLoggedIn()) {
      echo '<a class="nav-link" href="/eCommerce-Project/User/logout"><i class="fa-solid fa-sign-out"></i> Logout</a>';
      echo '<a class="nav-link" href="/eCommerce-Project/User/'.$_SESSION['user_id'].'">Profile</a>';
    } 
    else {
      echo '<a href="/eCommerce-Project/User/signup" style="float:right; font-weight: bold;"> Sign Up</a>
            <a href="/eCommerce-Project/User/signin" style="float:right; font-weight: bold;"> Login</a>';
    }
    ?>

    

    </div>