<?php
session_start(); // Make sure to start the session at the beginning of your PHP file

// Assuming you have stored the user's name in a session variable called 'user_name'
$brukernavn = $_SESSION['username'];
?>
<html>

<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <title>Lag en bruker</title>
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
  </div>
  <div class="WelcomeuserContainer">
  </div>
  </div>
  <div class="logoforwebSide">
    <img src="images/hacker.png" class="logoWeb">
  </div>
  <div class="loginstyle">
    <p class="venligstlogintextStyle">Vennligst logg inn</p>
    <div class="brukernavnogloginn">
      <form method="post" action="login.php">
        <label for="brukernavn" class="pp">Brukernavn:</label>
        <input type="cw" name="brukernavn" placeholder="brukernavn" class="inputtagstyle" /><br />
    </div>
    <div class="passordstyle">
      <label for="passord" class="pp">Passord:</label>
      <input type="password" name="passord" placeholder="passord" class="inputtagstyle" /><br />
    </div>
    <div class="submitbtn">
      <input type="submit" value="Logg inn" name="submit" class="submitbtnstyle" />
    </div>
    </form>
    <div class="lagnybruker">
      <p class="hvit">Eller klikk <a href="registration.php" class="herstyle">her</a> for å registrere ny bruker
    </div>
  </div>
</body>

</html>