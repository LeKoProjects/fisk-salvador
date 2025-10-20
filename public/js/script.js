// Mobile Menu Toggle
const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
const navMenu = document.getElementById('nav-menu');

mobileMenuToggle.addEventListener('click', () => {
    navMenu.classList.toggle('active');
});

// Banner Slider
const bannerSlides = document.querySelectorAll('.banner-slide');
let currentSlide = 0;

function nextSlide() {
    bannerSlides[currentSlide].classList.remove('active');
    currentSlide = (currentSlide + 1) % bannerSlides.length;
    bannerSlides[currentSlide].classList.add('active');
}

setInterval(nextSlide, 5000);

// Testimonials Slider
const testimonialsContainer = document.getElementById('testimonials-container');
const testimonialDots = document.querySelectorAll('.testimonial-dot');
let currentTestimonial = 0;

function showTestimonial(index) {
    testimonialsContainer.style.transform = `translateX(-${index * 100}%)`;
    testimonialDots.forEach(dot => dot.classList.remove('active'));
    testimonialDots[index].classList.add('active');
}

testimonialDots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        currentTestimonial = index;
        showTestimonial(index);
    });
});

// Auto-rotate testimonials
setInterval(() => {
    currentTestimonial = (currentTestimonial + 1) % testimonialDots.length;
    showTestimonial(currentTestimonial);
}, 5000);

// Smooth Scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Fade In Animation
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, observerOptions);

document.querySelectorAll('.fade-in').forEach(el => {
    observer.observe(el);
});

// Form Submission
document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Mensagem enviada com sucesso! Entraremos em contato em breve.');
    this.reset();
});
