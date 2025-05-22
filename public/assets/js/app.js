/**
 * File app.js.
 *
 * Optimized for scroll-based animations, language detection, background image handling, and side menu toggling.
 */

document.addEventListener('DOMContentLoaded', () => {

    // ===========================
    // Scroll-based animations
    // ===========================
    const observerOptions = {
        threshold: 0.1, // Trigger animation when 10% of the element is in view
    };

    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
                observer.unobserve(entry.target); // Stop observing after animation is triggered
            }
        });
    };

    const elementsToAnimate = document.querySelectorAll('[data-animate="fade-up"]');
    if (elementsToAnimate.length > 0) {
        const observer = new IntersectionObserver(observerCallback, observerOptions);
        elementsToAnimate.forEach(element => observer.observe(element));
    }

    // ===========================
    // Language detection and updating anchor URLs
    // ===========================
    const lang = document.documentElement.lang || 'nl'; // Default to 'nl' if no lang is specified
    const languageCode = lang.split('-')[0]; // Extract the primary language code

    document.querySelectorAll('a[href]').forEach(anchor => {
        try {
            const url = new URL(anchor.href, window.location.origin);
            const currentLang = url.searchParams.get('lang')?.split('-')[0];

            if (currentLang && currentLang !== languageCode) {
                url.searchParams.set('lang', languageCode);
                anchor.href = url.toString();
            }
        } catch (error) {
            console.warn(`Invalid URL: ${anchor.href}`, error);
        }
    });

    // ===========================
    // Set background images
    // ===========================
    document.querySelectorAll('[data-background]').forEach(element => {
        const backgroundImage = element.dataset.background;
        if (backgroundImage) {
            element.style.backgroundImage = `url(${backgroundImage})`;
        }
    });

    // ===========================
    // Side menu toggle
    // ===========================
    const toggleClass = (className) => document.body.classList.toggle(className);

    const sideToggle = document.querySelector('.sideToggle');
    const overlay = document.querySelector('.overlay');

    if (sideToggle) {
        sideToggle.addEventListener('click', () => {
            toggleClass('side-active');
        });
    }

    if (overlay) {
        overlay.addEventListener('click', () => {
            document.body.classList.remove('side-active');
        });
    }

});
