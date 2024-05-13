'use strict';


let currentSlide = 0;
const slides = document.querySelectorAll('.carousel-item');

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
    for (let slide of slides) {
        slide.classList.remove('active');
    }
    slides[currentSlide].classList.add('active');
}

function moveSlide(direction) {
    showSlide(currentSlide + direction);
}

document.addEventListener('DOMContentLoaded', () => {
    showSlide(0); // Inicia o carrossel na primeira imagem
});
