<html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title>Registrer Bruker</title>
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
    </div>
    <div class="logoforwebSide">
        <img src="images/hacker.png" class="logoWeb">
    </div>

    <div class="registartionStyle">
        <p class="oprettnybrukerStyle">Oprett ny bruker</p>
        <form method="post">
            <div class="brukernavnStyle">
                <label for="brukernavn" class="pp">Brukernavn:</label>
                <input type="cw" name="brukernavn" placeholder="brukernavn" class="inputtagstyle" /><br />
            </div>
            <div class="passordStyle">
                <label for="passord" class="pp">Passord:</label>
                <input type="password" name="passord" placeholder="passord" class="inputtagstyle" /><br />
            </div>
            <div class="submitbtn">
                <input type="submit" value="Logg inn" name="submit" class="submitbtnstyle" />
            </div>
            <div class="lagnybruker">
                <p class="lagdnyBruker">Har du lagd bruker fra før? Trykk <a href="loginforphp.html"
                        class="herstyle">Log Inn</a> knappen for å logge deg inn!
            </div>
        </form>
</body>
<?php
if (isset($_POST['submit'])) {
    //Gjøre om POST-data til variabler
    $brukernavn = $_POST['brukernavn'];
    $passord = md5($_POST['passord']);

    //Koble til databasen
    $dbc = mysqli_connect('127.0.0.1', 'root', 'Admin', 'checkout')
        or die('Error connecting to MySQL server.');

    //Gjøre klar SQL-strengen
    $query = "INSERT INTO info_om_Kunde (brukernavn, passord, usertype) VALUES ('$brukernavn','$passord', 'user')";

    //Utføre spørringen
    $result = mysqli_query($dbc, $query)
        or die('Error querying database.');

    //Koble fra databasen
    mysqli_close($dbc);

    //Sjekke om spørringen gir resultater
    if ($result) {
        //Gyldig login
        echo "<div style='font-family: Impact, Haettenschweiler, \"Arial Narrow Bold\", sans-serif; font-size: xx-large; color: rgb(255, 255, 255); text-align: center;'>Takk for at du lagde bruker! Trykk <a href='loginforphp.php' style='color: limegreen;'>her</a> for å logge inn</div>";
    } else {
        //Ugyldig login
        echo "Noe gikk galt, prøv igjen!";
    }
}
?>


</html>