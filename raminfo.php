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
    <a class="active" href="Home.php">Home</a>
    <a href="prossesor.php">komponentene</a>
    <a href="skole.php">Skole</a>
    <a href="begreper.php">Begreper</a>
    <a href="FAQ.html">FAQ</a>
    <a href="loginforphp.php">Log inn</a>
    <a href="registration.php">Registrer</a>
    <a href="Items.php">Kjøp!</a>
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
  <div class="Headlineforproductinfo">
  <h2 class="Productnameinformaiton">Corsair 32 GB Ram</h2>
  </div>


  <div class="imgsrcontainerforitemdescripotion">
  <img src="https://www.tradeinn.com/f/13878/138781581/corsair-ram-minne-vengeance-rgb-pro-32gb-2x16gb-ddr4-3200mhz.jpg" class="Imageitemsize">
  <p class="itemdescriptionStyle">32 GB RAM, 7200 MHZ, DDR5</p>
  </div>

</body>

</html>