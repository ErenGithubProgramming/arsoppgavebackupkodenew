<?php
require "checkoutdatabase.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $emailofperson = $_POST['epost'];
    $sakofperson = $_POST['sak'];

    // Insert the new record into the database
    $sql = "INSERT INTO sakerforperson (epost, sak) VALUES ('$emailofperson', '$sakofperson')";
    $result = mysqli_query($connectiontodatabase, $sql);

    // Fetch the last inserted ID from the sakerforperson table
    $last_id_result = mysqli_query($connectiontodatabase, "SELECT MAX(idsakerforperson) FROM sakerforperson");
    $last_id_row = mysqli_fetch_row($last_id_result);
    $last_id = $last_id_row[0];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Takk for henvendelsen!</title>
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
    </div>
    <div class="WelcomeuserContainer">
    </div>
    </div>
    <div class="logoforwebSide">
        <img src="images/hacker.png" class="logoWeb">
    </div>
    <br>
    <div class="saksnummerbackground">
        <div class="containercenter">
            <h2 class="textstyletwo">Takk for henvedelsen din, vi skal prøve å svare på din sak så fort som mulig!</h2>
            <h2 class="textstyletwo">Saksnummer:
                <?php
                // Display the last inserted ID
                echo '<span class="ticketidtext">#' . $last_id . '</span>';
                ?>
            </h2>
        </div>
    </div>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $emailofperson = $_POST['epost'];
        $sakofperson = $_POST['sak'];

        $sql = "INSERT INTO sakerforperson (epost, sak) VALUES ('$emailofperson', '$sakofperson')";
        $resultat = mysqli_query($connectiontodatabase, $sql);
        $resultaltavgreia = mysqli_query($connectiontodatabase, $sql);

    }
    ?>
</body>

</html>