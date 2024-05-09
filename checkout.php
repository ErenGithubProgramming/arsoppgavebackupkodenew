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
  <title>Checkout</title>
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
    <a href="items.php" class="borderstyletag">Kjøp!</a>
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



  <form method="POST" action="takkforbesttiling.php">
    <h2 class="checkouttxt">Checkout</h2>
    <div class="row">
      <div class="col-75">
        <div class="container">

          <div class="row">
            <div class="col-50">
              <h3>Billing Address</h3>
              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
              <input type="text" name="namesof" placeholder="John M. Doe">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" name="epost" placeholder="john@example.com">
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" name="adress" placeholder="Karl Johans Gata 10">
              <label for="city"><i class="fa fa-institution"></i> City</label>
              <input type="text" name="bysted" placeholder="Oslo">

            </div>

            <div class="col-50">
              <h3>Payment</h3>
              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>
              <label for="cname">Name on Card</label>
              <input type="text" name="navnkart" placeholder="John Doe">
              <label for="ccnum">Credit card number</label>
              <input type="text" name="kortnummer" placeholder="1111-2222-3333-4444">
              <label for="expmonth">Exp Month</label>
              <input type="text" name="expmonth" placeholder="04/12">
              <div class="row">
                <div class="col-50">
                  <label for="expyear">Exp Year</label>
                  <input type="text" name="expyear" placeholder="2028">
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" name="cvc" placeholder="352">
                </div>
              </div>
            </div>

          </div>
          <input type="submit" class="btn">
        </div>
      </div>
    </div>
  </form>


  <?php
  require "checkoutdatabase.php";

  if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $namesof = $_POST["namesof"];
    $epost = $_POST["epost"];
    $adress = $_POST["adress"];
    $bysted = $_POST["bysted"];
    $navnkart = $_POST["navnkart"];
    $kortnummer = $_POST["kortnummer"];
    $expmonth = $_POST["expmonth"];
    $expyear = $_POST["expyear"];
    $cvc = $_POST["cvc"];

    $sql = "INSERT INTO Infocheckout (namesof, epost, adress, bysted, navnkart, kortnummer, expmonth, expyear, cvc) VALUES ('$namesof', '$epost', '$adress', '$bysted', '$navnkart', '$kortnummer', '$expmonth', '$expyear', '$cvc')";
    $resulttatavgrie = mysqli_query($connectiontodatabase, $sql);

  }

  ?>


</body>

</html>