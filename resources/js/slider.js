document.addEventListener('DOMContentLoaded', function() {
    console.log('Slider script loaded');
    const slides = document.querySelectorAll('.slide');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    let currentIndex = 0;
    const totalSlides = slides.length;
    console.log('Slides found:', slides.length);
    console.log('Prev button:', prevButton);
    console.log('Next button:', nextButton);

    function updateSlider() {
        slides.forEach((slide, index) => {
            slide.style.display = index === currentIndex ? 'block' : 'none';
        });
    }

    prevButton.addEventListener('click', function() {
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : totalSlides - 1;
        console.log('Prev clicked, new index:', currentIndex);
        updateSlider();
    });

    nextButton.addEventListener('click', function() {
        currentIndex = (currentIndex < totalSlides - 1) ? currentIndex + 1 : 0;
        console.log('Next clicked, new index:', currentIndex);
        updateSlider();
    });
});
