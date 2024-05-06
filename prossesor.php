<?php
session_start(); // Make sure to start the session at the beginning of your PHP file

// Assuming you have stored the user's name in a session variable called 'user_name'
$brukernavn = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="ican" type="image/x-icon" href="images/wrench.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>komponenterr</title>
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
  </div>
  <div class="logoforwebSide">
    <p class="welcomeUser">Welcome,
      <?php echo $brukernavn ?>
    </p>
    <img src="images/hacker.png" class="logoWeb">
  </div>
  <br>
  <h2 class="maintitleStyle">CPU</h2>
  <img src="images/intelcpubilde.png" class="cpu">
  <p class="pp">En CPU, også kalt prosessor eller hovedprosessor er hovedregne-/prosesseringsenheten i en datamaskin som
    utfører instruksjonene gitt i et dataprogram, og den er det primære elementet som gjennomfører datamaskinens
    funksjoner. Prosessoren har typisk to logiske bestanddeler: styreenheten og utførelsesenheten.</p>

  <br>
  <h2 class="maintitleStyle">GPU</h2>
  <img src="images/gpugrafikbilde.png" class="cpu">
  <p class="pp">Grafikkprosessor eller GPU er mikroprosessoren som behandler grafikk i nyere datamaskiner. GPU fungerer
    på mange måter som CPU-en, men er dedikert til å behandle grafikkdata. GPU-en er ofte plassert på et eget kort eller
    enhet i datamaskinen, og får sine ordre og data fra hovedkortet</p>
  <br>
  <h2 class="maintitleStyle">Hovedkort</h2>
  <img src="images/hovedkortbilde.png" class="cpu">
  <p class="pp">Hovedkort er det viktigste kretskortet i en datamaskin. Alle større komponenter i datamaskinen må kobles
    til hovedkortet. Den viktigste enheten som kobles til er prosessoren</p>
  <br>
  <h2 class="maintitleStyle">Ramme</h2>
  <img src="images/rammbildet.png" class="cpu">
  <p class="pp">RAM (Random Access Memory) er datamaskinminnet som lagrer informasjonen et program trenger mens det
    kjører. RAM er datalagring som gjør det mulig å få tilgang til lagrede data i uansett rekkefølge, også tilfeldig,
    ikke bare i sekvens.</p>
  <br>
  <h2 class="maintitleStyle">Kabinett</h2>
  <img src="images/kabinettbildet.png" class="cpu">
  <p class="pp">En kabinett brukes til å plassere komponentene dine, den har forskjellige formfaktorer. Forskjellige
    kabinetter støtter forskjellige formfaktorer som f.eks ATX, EXTENDED ATX, MICRO-ATX OG MINI ATX.</p>
  <br>
  <p class="pp">OBS! NÅR DU KJØPER EN HOVEDKORT SJEKK HVILKEN FORMFAKTOR KABINETTET DITT STØTTER OG HVILKEN FORMFAKTOR
    DIN HOVEDKORT STØTTER.</p>
  <br>
  <h2 class="maintitleStyle">Kjøling for CPU-en</h2>
  <img src="images/kjolingscpubilde.png" class="cpu">
  <p class="pp">En CPU trenger alltid en kjøler, kjøleren hjelper å holde CPU temperaturen lavt og stabil, den hjelper
    også at den ikke blir for varm. Når du kjøper en kjøler for din CPU sørg for å vite hvilken formfaktor kjøleren
    støtter og om det støtter din CPU og hovedkort.</p>
  <br>
  <h2 class="maintitleStyle">Vifter</h2>
  <img src="images/corsairvifterkjoling.png" class="cpu">
  <p class="pp">Man trenger vifter i pc-en for å kjøle ned pc-en, ved hjelp av viftene så får du bedre kjøling for pc-en
    din og komponentene dine.</p>
</body>

</html>