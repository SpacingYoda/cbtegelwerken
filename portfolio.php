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

    <section class="carousel-section" id="badkamerportfolio">
    <h2>Badkamer Tegelwerk</h2>
    <div class="carousel-container">
        <button class="carousel-button" id="prev">←</button>
        <div class="carousel">
            <img src="img/badkamer/IMG-20241209-WA0025.jpg" alt="Badkamer tegelwerk 1">
            <img src="img/badkamer/IMG-20241209-WA0038.jpg" alt="Badkamer tegelwerk 2">
            <img src="img/badkamer/IMG-20241209-WA0117.jpg" alt="Badkamer tegelwerk 3">
            <img src="img/badkamer/IMG-20241209-WA0154.jpg" alt="Badkamer tegelwerk 4">
            <img src="img/badkamer/IMG-20241209-WA0188.jpg" alt="Badkamer tegelwerk 5">
            <img src="img/badkamer/IMG-20241209-WA0134.jpg" alt="Badkamer tegelwerk 6">
            <img src="img/badkamer/IMG-20241209-WA0075.jpg" alt="Badkamer tegelwerk 7">
            <img src="img/badkamer/IMG-20241209-WA0014.jpg" alt="Badkamer tegelwerk 8">
            <img src="img/badkamer/IMG-20241209-WA0078.jpg" alt="Badkamer tegelwerk 9">
            <img src="img/badkamer/IMG-20241209-WA0180.jpg" alt="Badkamer tegelwerk 10">
            <img src="img/badkamer/IMG-20241209-WA0120.jpg" alt="Badkamer tegelwerk 11">
            <img src="img/badkamer/IMG-20241209-WA0128.jpg" alt="Badkamer tegelwerk 12">
        </div>
        <button class="carousel-button" id="next">→</button>
    </div>
</section>

<section class="carousel-section" id="vloerportfolio">
    <h2>Muurbekleding</h2>
    <div class="carousel-container">
        <button class="carousel-button" id="prev">←</button>
        <div class="carousel">
            <img src="img/vloer/IMG-20241209-WA0166.jpg" alt="vloer tegelwerk 1">
            <img src="img/vloer/IMG-20241209-WA0099.jpg" alt="vloer tegelwerk 2">
            <img src="img/vloer/IMG-20241209-WA0097.jpg" alt="vloer tegelwerk 3">
            <img src="img/vloer/IMG-20241209-WA0081.jpg" alt="vloer tegelwerk 4">
            <img src="img/vloer/IMG-20241209-WA0116.jpg" alt="vloer tegelwerk 5">
            <img src="img/vloer/IMG-20241209-WA0095.jpg" alt="vloer tegelwerk 6">
        </div>
        <button class="carousel-button" id="next">→</button>
    </div>
</section>
<section class="carousel-section" id="keukenportfolio">
    <h2>Keuken&Wand Tegelwerk</h2>
    <div class="carousel-container">
        <button class="carousel-button" id="prev">←</button>
        <div class="carousel">
            <img src="img/keuken/IMG-20241209-WA0110.jpg" alt="Keuken en muur tegelwerk 1">
            <img src="img/wand/IMG-20241209-WA0118.jpg" alt="Keuken en muur tegelwerk 1">
            <img src="img/wand/IMG-20241209-WA0131.jpg" alt="Keuken en muur tegelwerk 1">
            <img src="img/wand/IMG-20241209-WA0109.jpg" alt="Keuken en muur tegelwerk 1">
            <img src="img/keuken/IMG-20241209-WA0150.jpg" alt="Keuken en muur tegelwerk 1">
            <img src="img/wand/IMG-20241209-WA0148.jpg" alt="Keuken en muur tegelwerk 1">
            <img src="img/wand/IMG-20241206-WA0004.jpg" alt="Keuken en muur tegelwerk 1">
        </div>
        <button class="carousel-button" id="next">→</button>
    </div>
</section>
<script>
function initializeCarousel(carouselContainer) {
    const carousel = carouselContainer.querySelector('.carousel');
    const prevButton = carouselContainer.querySelector('#prev');
    const nextButton = carouselContainer.querySelector('#next');
    const images = carousel.querySelectorAll('img');

    let currentIndex = 0;

    // Klonen van afbeeldingen voor een oneindig scroll-effect
    const cloneFirst = images[0].cloneNode(true);
    const cloneLast = images[images.length - 1].cloneNode(true);

    carousel.appendChild(cloneFirst); // Voeg de eerste afbeelding toe aan het einde
    carousel.insertBefore(cloneLast, images[0]); // Voeg de laatste afbeelding toe aan het begin

    const totalImages = carousel.querySelectorAll('img'); // Update de totale afbeeldingen
    const imageWidth = images[0].clientWidth;

    // Stel de beginpositie in (na de kloning)
    carousel.style.transform = `translateX(${-imageWidth}px)`;

    // Scroll naar de volgende afbeelding
    function scrollNext() {
        currentIndex++;
        carousel.style.transition = 'transform 0.5s ease-in-out';
        carousel.style.transform = `translateX(${-(currentIndex + 1) * imageWidth}px)`;

        // Reset de carrouselpositie bij het einde
        if (currentIndex >= images.length) {
            setTimeout(() => {
                carousel.style.transition = 'none';
                carousel.style.transform = `translateX(${-imageWidth}px)`;
                currentIndex = 0;
            }, 500);
        }
    }

    // Scroll naar de vorige afbeelding
    function scrollPrev() {
        currentIndex--;
        carousel.style.transition = 'transform 0.5s ease-in-out';
        carousel.style.transform = `translateX(${-(currentIndex + 1) * imageWidth}px)`;

        // Reset de carrouselpositie bij het begin
        if (currentIndex < 0) {
            setTimeout(() => {
                carousel.style.transition = 'none';
                carousel.style.transform = `translateX(${-(images.length) * imageWidth}px)`;
                currentIndex = images.length - 1;
            }, 500);
        }
    }

    // Update de positie van de carrousel
    function updateCarousel() {
        const offset = -(currentIndex + 1) * imageWidth;
        carousel.style.transform = `translateX(${offset}px)`;
    }

    // Voeg eventlisteners toe aan de knoppen
    nextButton.addEventListener('click', () => {
        scrollNext();
        resetAutoScroll();
    });

    prevButton.addEventListener('click', () => {
        scrollPrev();
        resetAutoScroll();
    });

    // Automatisch scrollen
    let autoScrollInterval = setInterval(scrollNext, 3000); // Elke 3 seconden

    // Reset de automatische scroll-timer bij handmatige interactie
    function resetAutoScroll() {
        clearInterval(autoScrollInterval); // Stop de huidige timer
        autoScrollInterval = setInterval(scrollNext, 3000); // Start opnieuw
    }
}

// Initialiseer alle carrousels
document.querySelectorAll('.carousel-container').forEach((carouselContainer) => {
    initializeCarousel(carouselContainer);
});

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
