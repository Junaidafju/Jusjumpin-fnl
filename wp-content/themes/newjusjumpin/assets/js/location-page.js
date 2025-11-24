/**
 * Location Page Interactive Elements
 * Hero Slider and FAQ Accordion functionality
 */

(function() {
    'use strict';

    // Initialize on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    function init() {
        initHeroSlider();
        initFAQAccordion();
    }

    /**
     * Hero Slider Functionality
     */
    function initHeroSlider() {
        const slides = document.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('.slider-dots .dot');
        
        if (slides.length === 0) return;

        let currentSlide = 0;
        const slideInterval = 4000; // 4 seconds per slide
        let autoPlayTimer;

        // Show specific slide
        function showSlide(index) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));

            if (index >= slides.length) {
                currentSlide = 0;
            } else if (index < 0) {
                currentSlide = slides.length - 1;
            } else {
                currentSlide = index;
            }

            slides[currentSlide].classList.add('active');
            if (dots[currentSlide]) {
                dots[currentSlide].classList.add('active');
            }
        }

        // Next slide
        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        // Previous slide
        function prevSlide() {
            showSlide(currentSlide - 1);
        }

        // Start auto-play
        function startAutoPlay() {
            stopAutoPlay();
            autoPlayTimer = setInterval(nextSlide, slideInterval);
        }

        // Stop auto-play
        function stopAutoPlay() {
            if (autoPlayTimer) {
                clearInterval(autoPlayTimer);
                autoPlayTimer = null;
            }
        }

        // Dot click handlers
        dots.forEach((dot, index) => {
            dot.addEventListener('click', function() {
                showSlide(index);
                startAutoPlay();
            });
        });

        // Pause on hover
        const sliderWrapper = document.querySelector('.location-hero-slider');
        if (sliderWrapper) {
            sliderWrapper.addEventListener('mouseenter', stopAutoPlay);
            sliderWrapper.addEventListener('mouseleave', startAutoPlay);
        }

        // Touch/Swipe support for mobile
        let touchStartX = 0;
        let touchEndX = 0;

        if (sliderWrapper) {
            sliderWrapper.addEventListener('touchstart', function(e) {
                touchStartX = e.changedTouches[0].screenX;
                stopAutoPlay();
            }, { passive: true });

            sliderWrapper.addEventListener('touchend', function(e) {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
                startAutoPlay();
            }, { passive: true });
        }

        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;

            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    nextSlide(); // Swiped left
                } else {
                    prevSlide(); // Swiped right
                }
            }
        }

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowLeft') {
                prevSlide();
                startAutoPlay();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
                startAutoPlay();
            }
        });

        // Pause when tab is not visible
        document.addEventListener('visibilitychange', function() {
            if (document.hidden) {
                stopAutoPlay();
            } else {
                startAutoPlay();
            }
        });

        // Initialize
        showSlide(0);
        startAutoPlay();
    }

    /**
     * FAQ Accordion Functionality
     */
    function initFAQAccordion() {
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            
            if (question) {
                question.addEventListener('click', function() {
                    // Close all other items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item && otherItem.classList.contains('active')) {
                            otherItem.classList.remove('active');
                        }
                    });

                    // Toggle current item
                    item.classList.toggle('active');
                });
            }
        });
    }

})();
