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
    <a href="FAQ.php" class="borderstyletag">FAQ</a>
    <a href="saker.php" class="borderstyletag">Legg Ut Sak</a>
    <a href="Items.php" class="borderstyletag">Kjøp!</a>
    <a href="loginforphp.php" class="borderstyletag">Log inn</a>
    <a href="registration.php" class="borderstyletag">Registrer</a>
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
    <?php
    // Display the "List of Participants" button if the user is an admin
    if ($usertype === 'admin') {
      echo '<a href="besttilingeradminpage.php" class="borderstyletag">Bestillinger</a>
    <a href="sakeradmin.php" class="borderstyletag">Saker Fra kunde</a>'; // Add your button here
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