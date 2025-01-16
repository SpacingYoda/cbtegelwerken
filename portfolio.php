<?php include('header.php'); ?>

<?php include('footer.php'); ?>
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

<?php include('footer.php'); ?> 

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tegelzetter Website</title>
    <link rel="stylesheet" href="style.css">
    
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
<body>
    <div class="carousel-container">
        <h1>Badkamers</h1>
        <div class="carousel-slide">
            <img src="img/badkamer/IMG-20241209-WA0025.jpg" alt="Afbeelding 1">
            <img src="img/badkamer/IMG-20241209-WA0038.jpg" alt="Afbeelding 2">
            <img src="img/badkamer/IMG-20241209-WA0046.jpg" alt="Afbeelding 3">
            <img src="img/badkamer/IMG-20241209-WA0026.jpg" alt="Afbeelding 4">
            <img src="img/badkamer/IMG-20241209-WA0120.jpg" alt="Afbeelding 5">
            <img src="img/badkamer/IMG-20241209-WA0117.jpg" alt="Afbeelding 6">
            <img src="img/badkamer/IMG-20241209-WA0154.jpg" alt="Afbeelding 7">
            <img src="img/badkamer/IMG-20241209-WA0078.jpg" alt="Afbeelding 8">
            <img src="img/badkamer/IMG-20241209-WA0014.jpg" alt="Afbeelding 9">
        </div>
        <button class="prev" onclick="moveSlide(-1)">❮</button>
        <button class="next" onclick="moveSlide(1)">❯</button>
    </div>
    <script src="script.js"></script>
    <footer>
        <p>© CB Tegelwerken, 2025</p>
    </footer>
</body>
</html>
<script>
// script.js
let slideIndex = 0;

function moveSlide(n) {
    const slides = document.querySelectorAll('.carousel-slide img');
    const totalSlides = slides.length;
    slideIndex = (slideIndex + n + totalSlides) % totalSlides;
    document.querySelector('.carousel-slide').style.transform = `translateX(${-slideIndex * 100}%)`;
}

// Automatically move to the next slide every 3 seconds
setInterval(() => {
    moveSlide(1);
}, 3000);
Additional
</script>
