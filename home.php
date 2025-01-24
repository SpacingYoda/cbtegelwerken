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

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tegelzetter Website</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    
    <?php include('header.php'); ?>
    
    <main>
    <section class="diensten">
        <a href="http://localhost/project10/cbtegelwerken/portfolio.php#vloerportfolio" class="dienst-link">
            <div class="dienst" style="background-image: url('img/vloer/IMG-20241209-WA0166.jpg');">
                <h3>Vloertegels</h3>
                <p>In elke ruimte een perfect resultaat</p>
            </div>
        </a>
        <a href="http://localhost/project10/cbtegelwerken/portfolio.php#keukenportfolio" class="dienst-link">
            <div class="dienst" style="background-image: url('img/wand/IMG-20241206-WA0004.jpg');">
                <h3>Muurbekleding</h3>
                <p>Alle soorten tegels, zo gedaan</p>
            </div>
        </a>
        <a href="http://localhost/project10/cbtegelwerken/portfolio.php#badkamerportfolio" class="dienst-link">
            <div class="dienst" style="background-image: url('img/badkamer/IMG-20241209-WA0154.jpg');">
                <h3>Badkamertegels</h3>
                <p>30 jaar ervaring</p>
            </div>
        </a>
        <a href="http://localhost/project10/cbtegelwerken/portfolio.php#keukenportfolio" class="dienst-link">
            <div class="dienst" style="background-image: url('img/keuken/IMG-20241209-WA0110.jpg');">
                <h3>Keukentegels</h3>
                <p>Met aandacht naar uw wensen</p>
            </div>
        </a>
    </section>
</main>

    <section class="contact-block">
    <div class="text">
        <h2>Maak een afspraak</h2>
        <p>En ervaar de perfectie in jouw eigen huis.</p>
        <a href="contact.php" class="contact-button">Contact</a>
    </div>
    <div class="content-block">
        <div class="image image1" style="background-image: url('img/badkamer/IMG-20241209-WA0078.jpg');"></div>
        <div class="image image2" style="background-image: url('img/badkamer/IMG-20241209-WA0128.jpg');"></div>
        <div class="image image3" style="background-image: url('img/keuken/IMG-20241209-WA0150.jpg');"></div>
    </div>
    </section>


</main>

<?php include('footer.php'); ?> 

</html>

