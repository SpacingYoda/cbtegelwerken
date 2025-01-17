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
        <div class="logo">
            <img src="img/logo.jpg" alt="Logo">
        </div>
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

    <div class="carousel-container" id="carousel1">
        <div class="title">Badkamers</div>
        <div class="carousel-slide">
            <img src="img/badkamer/IMG-20241209-WA0025.jpg" alt="Afbeelding 1" loading="lazy">
            <img src="img/badkamer/IMG-20241209-WA0038.jpg" alt="Afbeelding 2" loading="lazy">
            <img src="img/badkamer/IMG-20241209-WA0046.jpg" alt="Afbeelding 3" loading="lazy">
            <img src="img/badkamer/IMG-20241209-WA0026.jpg" alt="Afbeelding 4" loading="lazy">
            <img src="img/badkamer/IMG-20241209-WA0120.jpg" alt="Afbeelding 5" loading="lazy">
            <img src="img/badkamer/IMG-20241209-WA0117.jpg" alt="Afbeelding 6" loading="lazy">
            <img src="img/badkamer/IMG-20241209-WA0154.jpg" alt="Afbeelding 7" loading="lazy">
            <img src="img/badkamer/IMG-20241209-WA0078.jpg" alt="Afbeelding 8" loading="lazy">
            <img src="img/badkamer/IMG-20241209-WA0014.jpg" alt="Afbeelding 9" loading="lazy">
            <img src="img/badkamer/IMG-20241209-WA0075.jpg" alt="Afbeelding 10" loading="lazy">
        </div>
        <button class="prev" onclick="moveSlide('carousel1', -1)">❮</button>
        <button class="next" onclick="moveSlide('carousel1', 1)">❯</button>
    </div>

    <div class="carousel-container" id="carousel2">
        <div class="title">Wanden & Restrooms</div>
        <div class="carousel-slide">
            <img src="img/wand/IMG-20241206-WA0004.jpg" alt="Afbeelding 1" loading="lazy">
            <img src="img/wand/IMG-20241209-WA0109.jpg" alt="Afbeelding 2" loading="lazy">
            <img src="img/wand/IMG-20241209-WA0109.jpg" alt="Afbeelding 3" loading="lazy">
            <img src="img/wand/IMG-20241209-WA0148.jpg" alt="Afbeelding 4" loading="lazy">
            <img src="img/wand/IMG-20241209-WA0165.jpg" alt="Afbeelding 5" loading="lazy">
            <img src="img/wand/IMG-20241209-WA0131.jpg" alt="Afbeelding 6" loading="lazy">
            <img src="img/wand/IMG-20241209-WA0136.jpg" alt="Afbeelding 7" loading="lazy">
            <img src="img/wand/IMG-20241209-WA0146.jpg" alt="Afbeelding 8" loading="lazy">
        </div>
        <button class="prev" onclick="moveSlide('carousel2', -1)">❮</button>
        <button class="next" onclick="moveSlide('carousel2', 1)">❯</button>
    </div>

    <footer>
        <p>© CB Tegelwerken, 2025</p>
    </footer>

    <script src="script.js">// script.js
const slideIndexes = {
    carousel1: 0,
    carousel2: 0
};

function moveSlide(carouselId, n) {
    const carousel = document.querySelector(`#${carouselId} .carousel-slide`);
    const slides = carousel.querySelectorAll('img');
    const totalSlides = slides.length;
    slideIndexes[carouselId] = (slideIndexes[carouselId] + n + totalSlides) % totalSlides;

    carousel.style.transform = `translateX(${-slideIndexes[carouselId] * 100}%)`;
}
</script>
</body>
</html>
