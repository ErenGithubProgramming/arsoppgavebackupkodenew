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
  <title>Begreper</title>
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
  <div class="logoforwebSide">
    <p class="welcomeUser">Welcome,
      <?php echo $brukernavn ?>
    </p>
    <img src="images/hacker.png" class="logoWeb">
  </div>
  <h2 class="forklaringavbegreperHeadline">Forklaring på ulike begreper</h2>
  <div class="forklaringer">
    <p class="DatabasepTag">Formfaktorer:</p>
    <p class="forkalringStyle">I kabinetter så er det forskjellige formfaktorer, det finks ulike formfaktorer som (ATX,
      EXTENDED ATX, MICRO-ATX, OG MINI ATX.) Når du kjøper en hovedkort så må du vite hvilken form faktor den har som på
      dette bildet.</p>
    <div class="formfaktorCenter">
      <img src="images/formfaktorbilde.png" alt="bildetavFormfaktor" class="formfaktorPreview">
    </div>
    <p class="bildeunderTekst">Dette er en bilde av en hovedkort fra komplett.no, og på spesifikasjonene kan vi se at
      den spesifke hovedkorten støtter formfaktoren ATX</p>
    <p class="forkalringStyle">Så når du har funnet den informasjonen for hvilken formfaktor den støtter, så kan du
      kjøpe deg selv en kabinett som støtter samme formfaktor som hovedkortet ditt. <br>EKS:</p>
    <div class="formfaktorCenter">
      <img src="images/kabinettFormfaktor.png" alt="previewavformfaktorikabinett" class="formfaktorPreview">
    </div>
    <p class="bildeunderTekst">Dette er en bilde av spesifikasjoner av en kabinett fra komplett.no, og på
      spesifikasjonene kan vi se at kabinetten støtter formfaktoren ATX</p>
  </div>



</body>

</html>