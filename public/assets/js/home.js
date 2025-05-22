/**
 * File home.js.
 *
 * Handles all the required interactions.
 */

document.addEventListener('DOMContentLoaded', function () {

    // Initialize FAQ functionality
    initFAQs();

    // Initialize slider functionality
    initSlider();


});

/**
 * Initializes the FAQ accordion functionality. 
 * Adds click event listeners to FAQ headers, expands/collapses content, 
 * and ensures the first FAQ is opened by default.
 */
function initFAQs() {
    const faqHeaders = document.querySelectorAll('.iqb-faq-list h3');
    const faqLists = document.querySelectorAll('.iqb-faq-list');

    // Ensure there is at least one FAQ item
    if (faqLists.length > 0) {
        const firstFaq = faqLists[0];
        const firstPanel = firstFaq.querySelector('.iqb-faqs-content');
        if (firstPanel) {
            // Open the first FAQ by default
            firstFaq.classList.add('active');
            firstPanel.style.maxHeight = firstPanel.scrollHeight + "px";
        }
    }

    // Add event listeners for FAQ headers
    faqHeaders.forEach((header) => {
        header.addEventListener('click', function () {
            const parent = this.parentElement;
            const panel = parent.querySelector('.iqb-faqs-content');
            const isActive = parent.classList.contains('active');

            if (isActive) {
                // Collapse if already active
                parent.classList.remove('active');
                panel.style.maxHeight = null;
            } else {
                // Close all other FAQs and open the clicked one
                closeAllFAQs(faqLists);
                parent.classList.add('active');
                if (panel) {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            }
        });
    });
}

/**
 * Closes all FAQ items by removing the 'active' class and collapsing the content.
 * @param {NodeList} faqLists - The list of FAQ elements.
 */
function closeAllFAQs(faqLists) {
    faqLists.forEach((faq) => {
        faq.classList.remove('active');
        const faqPanel = faq.querySelector('.iqb-faqs-content');
        if (faqPanel) {
            faqPanel.style.maxHeight = null;
        }
    });
}

/**
 * Initializes the slider functionality for testimonials. 
 * Handles sliding, dots creation, and swipe/drag events for responsiveness.
 */
function initSlider() {
    const slider = document.querySelector('.iqb-testimonials-body');
    const items = document.querySelectorAll('.iqb-testimonials-item');
    const dotsContainer = document.querySelector('.slider-dots');
    let currentIndex = 0;
    let visibleItems = getVisibleItems();
    let totalItems = Math.ceil(items.length / visibleItems);

    if (!slider || items.length === 0) return; // If no slider or items exist, exit

    // Variables for swipe/dragging functionality
    let startX = 0;
    let currentTranslate = 0;
    let previousTranslate = 0;
    let dragging = false;

    // Create navigation dots only if there are more than 3 items
    if (dotsContainer && items.length > 3) {
        createDots();
    } else {
        console.error('Dots container element (.slider-dots) not found or less than 3 items.');
    }

    // Go to the first slide
    goToSlide(0);

    /**
     * Creates the navigation dots for the slider and assigns click events to them.
     * Dots are created only if total items exceed 3.
     */
    function createDots() {
        dotsContainer.innerHTML = ''; // Clear existing dots
        totalItems = Math.ceil(items.length / getVisibleItems()); // Recalculate total slides
        for (let i = 0; i < totalItems; i++) {
            const dot = document.createElement('span');
            dot.addEventListener('click', () => goToSlide(i));
            dotsContainer.appendChild(dot);
        }
        updateActiveDot(); // Highlight the active dot
    }

    /**
     * Moves the slider to the given index.
     * @param {number} index - The slide index to navigate to.
     */
    function goToSlide(index) {
        slider.style.transition = 'transform 0.5s ease'; // Enable smooth transition
        slider.style.transform = `translateX(-${index * (100 / visibleItems)}%)`; // Move slider
        currentIndex = index;
        previousTranslate = -(index * (100 / visibleItems));
        updateActiveDot(); // Update the dots to reflect the active slide
    }

    /**
     * Updates the active dot to match the current slide.
     */
    function updateActiveDot() {
        const dots = dotsContainer.querySelectorAll('span');
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === currentIndex); // Highlight current dot
        });
    }

    /**
     * Determines the number of visible items based on the window width.
     * @returns {number} - The number of visible items.
     */
    function getVisibleItems() {
        if (window.innerWidth <= 768) return 1; // Mobile view: 1 item
        if (window.innerWidth <= 1024) return 2; // Tablet view: 2 items
        return 3; // Desktop view: 3 items
    }

    // Add swipe/drag event listeners for both touch and mouse events
    slider.addEventListener('touchstart', (e) => startDrag(e.touches[0].clientX));
    slider.addEventListener('touchmove', (e) => moveDrag(e.touches[0].clientX), { passive: true });
    slider.addEventListener('touchend', endDrag);

    slider.addEventListener('mousedown', (e) => startDrag(e.clientX));
    slider.addEventListener('mousemove', (e) => moveDrag(e.clientX));
    slider.addEventListener('mouseup', endDrag);
    slider.addEventListener('mouseleave', endDrag);

    // Prevent text selection during dragging
    slider.addEventListener('mousedown', (e) => e.preventDefault());

    // Recalculate visible items on window resize
    window.addEventListener('resize', debounce(() => {
        const newVisibleItems = getVisibleItems();
        if (newVisibleItems !== visibleItems) {
            visibleItems = newVisibleItems;
            if (items.length > 3) {
                createDots();
            }
            slider.style.transition = 'none'; // Disable transition during resize
            goToSlide(currentIndex); // Maintain current slide position
        }
    }, 250)); // Debounce resize event to prevent excessive calls

    /**
     * Starts the drag/swipe event by recording the initial touch/mouse position.
     * @param {number} clientX - The X coordinate of the touch or mouse event.
     */
    function startDrag(clientX) {
        startX = clientX;
        dragging = true;
        slider.style.transition = 'none'; // Disable transition during dragging
    }

    /**
     * Handles the drag/swipe movement by calculating the translate value.
     * @param {number} clientX - The current X coordinate during dragging.
     */
    function moveDrag(clientX) {
        if (!dragging) return;
        const swipeAmount = clientX - startX;
        currentTranslate = previousTranslate + (swipeAmount / slider.offsetWidth) * 100;
        slider.style.transform = `translateX(${currentTranslate}%)`; // Apply dragging effect
    }

    /**
     * Ends the drag/swipe event and determines whether to switch slides based on the threshold.
     */
    function endDrag() {
        dragging = false;
        const threshold = 20; // Minimum swipe distance to trigger slide change
        if (currentTranslate - previousTranslate < -threshold && currentIndex < totalItems - 1) {
            // Swipe left (next slide)
            goToSlide(currentIndex + 1);
        } else if (currentTranslate - previousTranslate > threshold && currentIndex > 0) {
            // Swipe right (previous slide)
            goToSlide(currentIndex - 1);
        } else {
            goToSlide(currentIndex); // Snap back to current slide if not beyond threshold
        }
    }
}

/**
 * Debounces a function to limit how often it is called during rapid events like resize.
 * @param {function} func - The function to debounce.
 * @param {number} wait - The amount of time (in ms) to wait before calling the function.
 * @returns {function} - The debounced function.
 */
function debounce(func, wait) {
    let timeout;
    return function (...args) {
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(this, args), wait);
    };
}
