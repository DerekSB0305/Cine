document.addEventListener('DOMContentLoaded', () => {
    const slides = document.getElementById('carousel-slides');
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');

    let currentIndex = 0;

    const updateCarousel = () => {
        slides.style.transform = `translateX(-${currentIndex * 100}%)`;
    };

    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % slides.children.length;
        updateCarousel();
    });

    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + slides.children.length) % slides.children.length;
        updateCarousel();
    });
});