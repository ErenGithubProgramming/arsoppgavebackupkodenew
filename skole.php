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
  <link rel="ican" type="image/x-icon" href="images/school.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Skole</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
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
  <div class="logoforwebSide">
    <p class="welcomeUser">Welcome,
      <?php echo $brukernavn ?>
    </p>
    <img src="images/hacker.png" class="logoWeb">
  </div>
  <p class="ppp">Skole</p>
  <p class="ppp">Jeg studerer hos kuben VGS, hvis du er interesert på skolen venligst trykk på "Kuben VGS" knappen.</p>
  <img
    src="https://akamai.vgc.no/v2/images/af1bee17-88f0-45a3-b05e-2b585f42003d?fit=crop&format=auto&h=1267&w=1900&s=0db6a6296bed4686d42de0817dc1fa6d708e1f27"
    class="kubenVGS">
  <br>
  <div class="centerofbtnkuben">
    <div class="newkubenvgsStyle">
      <a href="https://kuben.vgs.no/" target="_blank" class="kubenvgsnewstylebtn">Kuben VGS</a>
    </div>
  </div>

  <p class="ppp">Hvor ligger skolen?</p>
  <div class="centeritems">
    <p class="pp">Her er en bilde av en kart som viser hvor skolen min ligger</p>
  </div>
  <div class="locationCenter">
    <img src="images/location.gif" alt="locater" class="locationGIF">
  </div>
  <div class="imgcenter">
    <img src="images/kuben preview.png" alt="skole" class="previewofkuben">
  </div>
  <p class="pp">Trykk <a
      href="https://www.google.com/maps/place/Kuben+videreg%C3%A5ende+skole/@59.9279964,10.8145408,17z/data=!3m1!4b1!4m6!3m5!1s0x46416fe3cc2c0ca9:0x673dd817efc08f25!8m2!3d59.9279937!4d10.8171157!16s%2Fm%2F0w7q1zw?entry=ttu"
      class="btngoogleStlye" target="_blank">her</a> for å bli navigert til Google Maps!</p>

  <div class="linjevgs">
    <p class="newheadlineforschool">Hvis du er interesert i hvilken linje jeg går på og vil finne ut mer informasjon
      om den, venligst trykk på lenken under bildet!</p>
    <img src="images/programmeinrgsbilde.png" class="imageofprogrrammign">
    <p class="pp">Trykk <a href="https://kuben.vgs.no/fagtilbud/yrkesfag/informasjonsteknologi-og-medieproduksjon/"
        class="btngoogleStlye" target="blank">Her</a> for å få mer informasjon!</p>
  </div>


</body>

</html>