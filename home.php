<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project10";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";

?>
 <?php include('header.php'); ?>

<?php include('footer.php'); ?> 

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tegelzetter Website</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=TeX+Gyre+Adventor&family=URW+Gothic+L:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
    <div class="logo"> <img src="img/logo.jpg" alt="Logo">
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="diensten.php">Diensten</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li class="login-button"><a href="admin_login.php">Inloggen</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <section class="diensten">
        <div class="dienst" style="background-image: url('img/vloer/IMG-20241209-WA0166.jpg');">
            <h2>Vloertegels</h2>
            <p>In elke ruimte een perfect resultaat</p>
        </div>
        <div class="dienst" style="background-image: url('img/wand/IMG-20241206-WA0004.jpg');">
            <h2>Muurbekleding</h2>
            <p>Alle soorten tegels, zo gedaan</p>
        </div>
        <div class="dienst" style="background-image: url('img/badkamer/IMG-20241209-WA0154.jpg');">
            <h2>Badkamertegels</h2>
            <p>30 jaar ervaring</p>
        </div>
        <div class="dienst" style="background-image: url('img/keuken/IMG-20241209-WA0110.jpg');">
            <h2>Keukentegels</h2>
            <p>Met aandacht naar uw wensen</p>
        </div>
    </section>
    <section class="contact-block">
        <div class="text">
            <h2>Maak een afspraak</h2>
            <p>En ervaar de perfectie in jouw eigen huis.</p>
        </div>
        <div class="image1" style="background-image: url('img/badkamer/IMG-20241209-WA0078.jpg');"></div>
        <div class="image2" style="background-image: url('img/badkamer/IMG-20241209-WA0128.jpg');"></div>
        <div class="image3" style="background-image: url('img/keuken/IMG-20241209-WA0150.jpg');"></div>
    </section>

</main>

    <footer>
        <p>© CB Tegelwerken, 2025</p>
    </footer>
</body>
</html>

