<?php
session_start();

$connection = mysqli_connect("localhost", "root", "Admin", "checkout");


// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 2: Retrieve data from the table
$sql = "SELECT * FROM sakerforperson";
$result = mysqli_query($connection, $sql);

$brukernavn = $_SESSION['brukernavn'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saker Admin - Page</title>
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
    <div class="infoadmincontainer">
        <p class="ppp">Saker Lagt Ut Av Kunder</p>
        <!-- Step 3: Display the data on the website -->
        <table>
            <thead>
                <tr>
                    <?php
                    // Fetch column names and display as table headers
                    $row = mysqli_fetch_assoc($result);
                    foreach ($row as $column_name => $value) {
                        echo "<th>$column_name</th>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                // Rewind the result set pointer back to the beginning
                mysqli_data_seek($result, 0);

                // Fetch and display all rows
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    foreach ($row as $value) {
                        echo "<td>$value</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>


</body>

</html>

<?php
// Step 4: Close the database connection
mysqli_close($connection);
?>