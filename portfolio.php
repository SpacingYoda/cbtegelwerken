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
    <h2>Vloerbekleding</h2>
    <div class="carousel-container">
        <button class="carousel-button" id="prev">←</button>
        <div class="carousel">
            <img src="img/vloer/IMG-20241209-WA0166.jpg" alt="vloer tegelwerk 1">
            <img src="img/vloer/IMG-20241209-WA0099.jpg" alt="vloer tegelwerk 2">
            <img src="img/vloer/IMG-20241209-WA0097.jpg" alt="vloer tegelwerk 3">
            <img src="img/vloer/IMG-20241209-WA0081.jpg" alt="vloer tegelwerk 4">
            <img src="img/vloer/IMG-20241209-WA0116.jpg" alt="vloer tegelwerk 5">
            <img src="img/vloer/IMG-20241209-WA0095.jpg" alt="vloer tegelwerk 6">
            <img src="img/vloer/IMG-20241209-WA0172.jpg" alt="vloer tegelwerk 7">
            <img src="img/vloer/IMG-20241209-WA0169.jpg" alt="vloer tegelwerk 8">
        </div>
        <button class="carousel-button" id="next">→</button>
    </div>
</section>

<section class="carousel-section" id="keukenportfolio">
    <h2>Keuken & Wand Tegelwerk</h2>
    <div class="carousel-container">
        <button class="carousel-button" id="prev">←</button>
        <div class="carousel">
            <img src="img/keuken/IMG-20241209-WA0110.jpg" alt="Keuken en muur tegelwerk 1">
            <img src="img/wand/IMG-20241209-WA0118.jpg" alt="Keuken en muur tegelwerk 2">
            <img src="img/wand/IMG-20241209-WA0131.jpg" alt="Keuken en muur tegelwerk 3">
            <img src="img/wand/IMG-20241209-WA0109.jpg" alt="Keuken en muur tegelwerk 4">
            <img src="img/keuken/IMG-20241209-WA0150.jpg" alt="Keuken en muur tegelwerk 5">
            <img src="img/wand/IMG-20241209-WA0148.jpg" alt="Keuken en muur tegelwerk 6">
            <img src="img/wand/IMG-20241206-WA0004.jpg" alt="Keuken en muur tegelwerk 7">
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

    let currentIndex = 0; // Tracks the currently visible image
    let imageWidth = images[0].clientWidth;

    // Clone the first and last images
    const firstClone = images[0].cloneNode(true);
    const lastClone = images[images.length - 1].cloneNode(true);

    // Append clones
    carousel.appendChild(firstClone); // Add first image clone to the end
    carousel.insertBefore(lastClone, images[0]); // Add last image clone to the start

    const totalImages = carousel.querySelectorAll('img'); // Update image list with clones
    const totalCount = totalImages.length; // Includes clones

    // Set initial transform to account for the starting clone
    carousel.style.transform = `translateX(${-imageWidth}px)`;

    function updateImageWidth() {
        imageWidth = images[0].clientWidth;
        carousel.style.transition = 'none';
        carousel.style.transform = `translateX(${-imageWidth * (currentIndex + 1)}px)`;
    }

    // Scroll to the next image
    function scrollNext() {
        if (currentIndex >= images.length) return; // Prevent over-scrolling
        currentIndex++;
        carousel.style.transition = 'transform 0.5s ease-in-out';
        carousel.style.transform = `translateX(${-imageWidth * (currentIndex + 1)}px)`;

        // Handle the reset from the last clone back to the first image
        if (currentIndex === images.length) {
            setTimeout(() => {
                carousel.style.transition = 'none';
                currentIndex = 0;
                carousel.style.transform = `translateX(${-imageWidth}px)`;
            }, 500); // Matches the transition duration
        }
    }

    // Scroll to the previous image
    function scrollPrev() {
        if (currentIndex <= -1) return; // Prevent over-scrolling
        currentIndex--;
        carousel.style.transition = 'transform 0.5s ease-in-out';
        carousel.style.transform = `translateX(${-imageWidth * (currentIndex + 1)}px)`;

        // Handle the reset from the first clone back to the last image
        if (currentIndex === -1) {
            setTimeout(() => {
                carousel.style.transition = 'none';
                currentIndex = images.length - 1;
                carousel.style.transform = `translateX(${-imageWidth * images.length}px)`;
            }, 500); // Matches the transition duration
        }
    }

    // Auto-scroll
    let autoScrollInterval = setInterval(scrollNext, 3000);

    // Reset auto-scroll when interacting
    function resetAutoScroll() {
        clearInterval(autoScrollInterval);
        autoScrollInterval = setInterval(scrollNext, 3000);
    }

    // Button event listeners
    nextButton.addEventListener('click', () => {
        scrollNext();
        resetAutoScroll();
    });

    prevButton.addEventListener('click', () => {
        scrollPrev();
        resetAutoScroll();
    });

    // Handle window resizing for responsiveness
    window.addEventListener('resize', updateImageWidth);

    // Update width once on initialization
    updateImageWidth();
}

// Initialize all carousels
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
