<?php
if (isset($_POST['submit'])) {
    //Gjøre om POST-data til variabler
    $brukernavn = $_POST['brukernavn'];
    $passord = md5($_POST['passord']);

    //Koble til databasen
    $dbc = mysqli_connect('localhost', 'root', 'Admin', 'checkout') or die('Error connecting to MySQL server.');

    //Gjøre klar SQL-strengen
    $query = "SELECT brukernavn, passord from info_om_kunde where brukernavn='$brukernavn' and passord='$passord'";
    echo $query;

    //Utføre spørringen
    $result = mysqli_query($dbc, $query) or die('Error querying database.');

    //Sjekke om spørringen gir resultater
    if ($result->num_rows > 0) {
        // Gyldig login
        // Set the 'username' session variable
        session_start(); // Make sure to start the session
        $_SESSION['username'] = $brukernavn;

        header('location: success.html');
    } else {
        // Ugyldig login
        header('location: failure.html');
    }

    //Koble fra databasen
    mysqli_close($dbc);
} else {
    echo "Du har ikke trykket submit i formen";
}
?>