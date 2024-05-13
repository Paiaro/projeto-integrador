'use strict';


let currentSlide = 0;
const slides = document.querySelectorAll('.carousel-item');
let slideInterval = setInterval(moveSlide, 2000, 1); 

function showSlide(index) {
    if (index >= slides.length) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = slides.length - 1;
    } else {
        currentSlide = index;
    }
    const newTransform = -100 * currentSlide;
    document.getElementById('carouselItems').style.transform = `translateX(${newTransform}%)`;
}

function moveSlide(direction) {
    showSlide(currentSlide + direction);
    resetInterval();
}

function resetInterval() {
    clearInterval(slideInterval);
    slideInterval = setInterval(moveSlide, 2000, 1);
}

document.addEventListener('DOMContentLoaded', () => {
    showSlide(0);
});
