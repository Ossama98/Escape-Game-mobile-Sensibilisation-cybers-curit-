<?php
  session_start();
  include_once 'includes/functions.inc.php';
  require 'vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Escape-Hack</title>
    
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <nav>
      <div class="wrapper">
      <a href="index.php"><img class="logo" src="src\logo blanc.png" alt="Blogs logo" height="100px" width="100px"></a>
        <ul>
          <li><a href="index.php">Home</a></li>
          <?php
            if (isset($_SESSION["useruid"])) {
              echo "<li><a href='sondage.php'>Sondage</a></li>";
              echo "<li><a href='logout.php'>Logout</a></li>";
            }
            else {
              //echo "<li><a href='signup.php'>Sign up</a></li>";
              echo "<li><a href='login.php'>Log in</a></li>";
            }
          ?>
        </ul>
      </div>
    </nav>

  <div class="wrapper">
    <div class="wrapperbis">
