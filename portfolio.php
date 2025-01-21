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

    <section class="carousel-section">
    <h2>Badkamer Tegelwerk</h2>
    <div class="carousel-container" id="carousel-1">
        <button class="carousel-button" id="prev-1">←</button>
        <div class="carousel">
            <img src="img/badkamer/IMG-20241209-WA0078.jpg" alt="Badkamer tegelwerk 1">
            <img src="img/badkamer/IMG-20241209-WA0128.jpg" alt="Badkamer tegelwerk 2">
            <img src="img/badkamer/IMG-20241209-WA0100.jpg" alt="Badkamer tegelwerk 3">
        </div>
        <button class="carousel-button" id="next-1">→</button>
    </div>
</section>

<section class="carousel-section">
    <h2>Keuken Tegelwerk</h2>
    <div class="carousel-container" id="carousel-2">
        <button class="carousel-button" id="prev-2">←</button>
        <div class="carousel">
            <img src="img/keuken/IMG-20241209-WA0150.jpg" alt="Keuken tegelwerk 1">
            <img src="img/keuken/IMG-20241209-WA0180.jpg" alt="Keuken tegelwerk 2">
            <img src="img/keuken/IMG-20241209-WA0130.jpg" alt="Keuken tegelwerk 3">
        </div>
        <button class="carousel-button" id="next-2">→</button>
    </div>
</section>

<section class="carousel-section">
    <h2>Overige Projecten</h2>
    <div class="carousel-container" id="carousel-3">
        <button class="carousel-button" id="prev-3">←</button>
        <div class="carousel">
            <img src="img/overig/IMG-20241209-WA0200.jpg" alt="Project 1">
            <img src="img/overig/IMG-20241209-WA0220.jpg" alt="Project 2">
            <img src="img/overig/IMG-20241209-WA0240.jpg" alt="Project 3">
        </div>
        <button class="carousel-button" id="next-3">→</button>
    </div>
</section>
<script>
// Functie om een enkele carrousel te initialiseren
function initializeCarousel(carouselContainerId, prevButtonId, nextButtonId) {
    const carouselContainer = document.getElementById(carouselContainerId);
    const carousel = carouselContainer.querySelector('.carousel');
    const images = carousel.querySelectorAll('img');
    const prevButton = document.getElementById(prevButtonId);
    const nextButton = document.getElementById(nextButtonId);

    const imageWidth = images[0].clientWidth;
    let currentIndex = 0;

    // Clone images for looping
    images.forEach((img) => {
        const clone = img.cloneNode(true);
        carousel.appendChild(clone);
    });

    // Function to scroll the carousel
    function scrollCarousel(direction) {
        if (direction === 'next') {
            currentIndex++;
        } else {
            currentIndex--;
        }

        carousel.style.transform = `translateX(-${currentIndex * imageWidth}px)`;
        carousel.style.transition = 'transform 0.5s ease-in-out';

        // Reset to start or end if necessary
        if (currentIndex >= images.length) {
            setTimeout(() => {
                carousel.style.transition = 'none';
                currentIndex = 0;
                carousel.style.transform = `translateX(0px)`;
            }, 500);
        }

        if (currentIndex < 0) {
            setTimeout(() => {
                carousel.style.transition = 'none';
                currentIndex = images.length - 1;
                carousel.style.transform = `translateX(-${currentIndex * imageWidth}px)`;
            }, 500);
        }
    }

    // Event listeners for buttons
    prevButton.addEventListener('click', () => scrollCarousel('prev'));
    nextButton.addEventListener('click', () => scrollCarousel('next'));

    // Automatic scrolling
    setInterval(() => scrollCarousel('next'), 3000); // Adjust the interval as needed
}

// Initialiseer meerdere carrousels
initializeCarousel('carousel-1', 'prev-1', 'next-1');
initializeCarousel('carousel-2', 'prev-2', 'next-2');
initializeCarousel('carousel-3', 'prev-3', 'next-3');
</script>
    <main>
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
    
    <footer>
        <p>© CB Tegelwerken, 2025</p>
    </footer>
</body>
</html>
