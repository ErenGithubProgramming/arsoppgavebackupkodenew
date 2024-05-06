<?php
session_start();

// Step 1: Connect to the database
$connection = mysqli_connect("localhost", "root", "Admin", "checkout");

// Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

// Assuming you have stored the user's name in a session variable called 'brukernavn'
$brukernavn = $_SESSION['username'];

// Step 2: Retrieve data from the database based on the user's username
$sql = "SELECT usertype FROM info_om_kunde WHERE brukernavn = '$brukernavn'";
$result = mysqli_query($connection, $sql);

// Check if query was successful and if the user is an admin
if ($result && mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $usertype = $row['usertype'];
}

// Retrieve the 'navn' parameter from the URL
if (isset($_GET['brukernavn'])) {
  $brukernavn = $_GET['brukernavn'];

  // Step 3: Check if the user exists in the "pameldingsinfo" table
  $sql_check_user = "SELECT COUNT(*) AS user_count FROM brukernavn WHERE brukernavn = '$brukernavn'";
  $result_check_user = mysqli_query($connection, $sql_check_user);

  // Check if query was successful
  if ($result_check_user) {
    $row_check_user = mysqli_fetch_assoc($result_check_user);
    $user_count = $row_check_user['user_count'];

    // Check if the user exists in the "pameldingsinfo" table
    if ($user_count > 0) {
      // User exists, set flag to show the button
      $show_download_button = true;
    } else {
      // User does not exist, set flag to hide the button
      $show_download_button = false;
    }
  } else {
    // Query failed, handle error
    echo "Error: " . mysqli_error($connection);
  }
}



mysqli_close($connection);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/x-icon" href="images/pcimg.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQ</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="topnav">
    <a href="Home.php" class="borderstyletag">Home</a>
    <a href="prossesor.php" class="borderstyletag">komponentene</a>
    <a href="skole.php" class="borderstyletag">Skole</a>
    <a href="begreper.php" class="borderstyletag">Begreper</a>
    <a href="FAQ.php" class="borderstyletag">FAQ</a>
    <a href="saker.php" class="borderstyletag">Legg Ut Sak</a>
    <a href="Items.php" class="borderstyletag">Kjøp!</a>
    <a href="loginforphp.php" class="borderstyletag">Log inn</a>
    <a href="registration.php" class="borderstyletag">Registrer</a>
    <?php
    // Display the "List of Participants" button if the user is an admin
    if ($usertype === 'admin') {
      echo '<a href="besttilingeradminpage.php" class="borderstyletag">Bestillinger</a>
    <a href="sakeradmin.php" class="borderstyletag">Saker Fra kunde</a>'; // Add your button here
    }
    ?>
  </div>
  <div class="logoforwebSide">
    <img src="images/hacker.png" class="logoWeb">
  </div>
  <br>
  <section> <!-- starten på knapp koden -->
    <h2 class="title">FAQ</h2>
    <div class="faq"> <!-- div sted for faq knappene -->
      <div class="question">
        <h3 class="faqDesign">Hva kan jeg gjøre på denne nettsiden?</h3>
        <svg width="15" height="10" viewbox="0 0 42 25"> <!-- for å lage pil knappen -->
          <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
        </svg>
      </div>
      <div class="answer">
        <p class="faqDesign">I denne nettsiden vil du få informasjon om hva de forskjellige data komponentene gjør og
          hva du må passe på.</p>
      </div>
    </div>

    <div class="faq"> <!-- div sted for faq knappene -->
      <div class="question">
        <h3 class="faqDesign">Hvordan kan jeg lage bruker?</h3>
        <svg width="15" height="10" viewbox="0 0 42 25"> <!-- for å lage pil knappen -->
          <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
        </svg>
      </div>
      <div class="answer">
        <p class="faqDesign">For å lage en bruker så kan du trykke på <a href="registration.php"
            class="lagbrukerKnapp">lag bruker</a> knappen for å bli navigert til siden for å lage en bruker!</p>
      </div>
    </div>

    <div class="faq"> <!-- div sted for faq knappene -->
      <div class="question">
        <h3 class="faqDesign">Hvor kan jeg lese om data komponentene?</h3>
        <svg width="15" height="10" viewbox="0 0 42 25"> <!-- for å lage pil knappen -->
          <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
        </svg>
      </div>
      <div class="answer">
        <p class="faqDesign">For å lese om data komponentene så kan du trykke på <a href="prossesor.html"
            class="lagbrukerKnapp">komponentene</a> knappen for å bli navigert til siden!</p>
      </div>
    </div>
  </section> <!-- slutter her -->


  <script src="onClick.JS"></script>
</body>

</html>