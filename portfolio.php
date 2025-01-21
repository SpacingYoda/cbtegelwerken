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
    <section class="carousel-section">
    <h2>Bekijk ons werk</h2>
    <div class="carousel-container">
        <button id="prev" class="carousel-button">←</button>
        <div class="carousel">
            <img src="img/badkamer/IMG-20241209-WA0078.jpg" alt="Badkamer tegelwerk 1">
            <img src="img/badkamer/IMG-20241209-WA0128.jpg" alt="Badkamer tegelwerk 2">
            <img src="img/keuken/IMG-20241209-WA0150.jpg" alt="Keuken tegelwerk">
            <img src="img/badkamer/IMG-20241209-WA0100.jpg" alt="Badkamer tegelwerk 3">
            <img src="img/keuken/IMG-20241209-WA0180.jpg" alt="Keuken tegelwerk 2">
        </div>
        <button id="next" class="carousel-button">→</button>
    </div>
</section>
<script>
const carousel = document.querySelector('.carousel');
const images = document.querySelectorAll('.carousel img');
const prevButton = document.getElementById('prev');
const nextButton = document.getElementById('next');

const imageWidth = images[0].clientWidth; // Get the width of one image
let currentIndex = 0; // Track the current image index

// Clone images for seamless looping
images.forEach((img) => {
    const clone = img.cloneNode(true);
    carousel.appendChild(clone);
});

// Function to scroll the carousel
function scrollCarousel() {
    currentIndex++;
    carousel.style.transform = `translateX(-${currentIndex * imageWidth}px)`;
    carousel.style.transition = 'transform 0.5s ease-in-out';

    // Reset to the start if we reach the end
    if (currentIndex >= images.length) {
        setTimeout(() => {
            carousel.style.transition = 'none'; // Disable transition
            currentIndex = 0; // Reset to the start
            carousel.style.transform = `translateX(0px)`;
        }, 500); // Match the transition duration
    }
}

// Function to handle previous and next button clicks
function handleButtonClick(direction) {
    // Disable transition temporarily for seamless looping
    if (direction === 'prev' && currentIndex === 0) {
        carousel.style.transition = 'none';
        currentIndex = images.length; // Jump to the cloned last image
        carousel.style.transform = `translateX(-${currentIndex * imageWidth}px)`;
    }

    if (direction === 'next' && currentIndex === images.length - 1) {
        carousel.style.transition = 'none';
        currentIndex = -1; // Jump to the cloned first image
        carousel.style.transform = `translateX(0px)`;
    }

    setTimeout(() => {
        // Update index and scroll with transition
        carousel.style.transition = 'transform 0.5s ease-in-out';
        currentIndex += direction === 'prev' ? -1 : 1;
        carousel.style.transform = `translateX(-${currentIndex * imageWidth}px)`;
    }, 20); // Small delay to allow transition
}

// Button event listeners
prevButton.addEventListener('click', () => handleButtonClick('prev'));
nextButton.addEventListener('click', () => handleButtonClick('next'));

// Automatic scrolling
setInterval(scrollCarousel, 3000); // Scroll every 3 seconds

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
