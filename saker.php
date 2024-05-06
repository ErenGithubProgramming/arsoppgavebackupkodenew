<?php
session_start(); // Make sure to start the session at the beginning of your PHP file

// Assuming you have stored the user's name in a session variable called 'user_name'
$brukernavn = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/x-icon" href="images/pcimg.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,600;1,600&display=swap"
    rel="stylesheet">
</head>

<body>
  <div class="topnav">
    <a href="Home.php" class="borderstyletag">Home</a>
    <a href="prossesor.php" class="borderstyletag">komponentene</a>
    <a href="skole.php" class="borderstyletag">Skole</a>
    <a href="begreper.php" class="borderstyletag">Begreper</a>
    <a href="FAQ.html" class="borderstyletag">FAQ</a>
    <a href="loginforphp.php" class="borderstyletag">Log inn</a>
    <a href="registration.php" class="borderstyletag">Registrer</a>
    <a href="Items.php" class="borderstyletag">Kjøp!</a>
    <a href="saker.php" class="borderstyletag">Legg Ut Sak</a>
    <?php
    // Check if the user is logged in
    if (isset($_SESSION['username'])) {
      // If logged in, display the logout link
      echo '<a href="logout.php" class="thisisatest">Logout</a>';
    } else {
      // If not logged in, display a message or redirect to the login page
      echo 'You are not logged in.';
    }
    ?>
  </div>
  <div class="WelcomeuserContainer">
  </div>
  </div>
  <div class="logoforwebSide">
    <p class="welcomeUser">Welcome,
      <?php echo $brukernavn ?>
    </p>
    <img src="images/hacker.png" class="logoWeb">
  </div>

  <br>
  <div class="backgroundcolorforsaker">
    <h2 class="sakerheadline">Saker</h2>
    <form method="POST" action="takkforsak.php">
      <div class="sakercontainersaker">
        <h2 class="sakerheadline">Navn</h2>
        <input type="texttt" placeholder="navn" class="inputstylecontainers" name="navn">
        <h2 class="sakerheadline">E-Mail</h2>
        <input type="email" placeholder="Email" class="inputstylecontainers" name="epost">
        <h2 class="sakerheadline">Sak</h2>
        <input type="texttt" placeholder="Sak" class="sakerstyleinputfelt" name="sak">
        <input type="submit" class="submitbtnstylepadding">
      </div>
    </form>
  </div>



  <?php

  require "checkoutdatabase.php";

  if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $nameofperson = $_POST['navn'];
    $emailofperson = $_POST['epost'];
    $sakofperson = $_POST['sak'];

    $sql = "INSERT INTO sakerforperson (navn, epost, sak) VALUES ('$nameofperson', '$emailofperson', '$sakofperson')";
    $resultaltavgreia = mysqli_query($connectiontodatabase, $sql);

  }
  ?>



</body>

</html>