<?php

require "checkoutdatabase.php";
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
            <h2 class="textstyletwo">Saks nummer:
                <?php

                $thenumber = "SELECT * FROM sakerforperson;";
                $resultavgreie = mysqli_query($connectiontodatabase, $thenumber);
                $resultavgreiecheck = mysqli_num_rows($resultavgreie);
                $textBefore = "#";
                echo '<h2 class="ticketidtext">' . $textBefore . $resultavgreiecheck . '</h2>';

                ?>

        </div>
    </div>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {


        $nameofperson = $_POST['navn'];
        $emailofperson = $_POST['epost'];
        $sakofperson = $_POST['sak'];

        $sql = "INSERT INTO sakerforperson (navn, epost, sak) VALUES ('$nameofperson', '$emailofperson', '$sakofperson')";
        $resultat = mysqli_query($connectiontodatabase, $sql);
        $resultaltavgreia = mysqli_query($connectiontodatabase, $sql);

    }
    ?>
</body>

</html>