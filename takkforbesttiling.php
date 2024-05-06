<?php
require "checkoutdatabase.php";
?>

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

    <div class="containerthankyou">
        <h2 class="bestiilingconfirm">TAKK FOR BESTILLING!</h2>
    </div>

    <div class="containerthankyouu">
        <h2 class="bestiilingconfirm">DIN ORDRE NUMMER ER:</h2>
        <?php

        $thenumber = "SELECT * FROM infocheckout;";
        $resultavgreie = mysqli_query($connectiontodatabase, $thenumber);
        $resultavgreiecheck = mysqli_num_rows($resultavgreie);
        $textBefore = "#";
        echo '<h2 class="orderidtext">' . $textBefore . $resultavgreiecheck . '</h2>';
        ?>
    </div>

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