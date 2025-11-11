<style>
    /* Scroll to Top Button */
    .scroll-top-btn {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        background-color: var(--main-color);
        color: white;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 1000;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }

    .scroll-top-btn.show {
        opacity: 1;
        visibility: visible;
    }

    .scroll-top-btn:hover {
        background-color: var(--hover-color);
        transform: translateY(-3px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
    }

    .scroll-top-btn:active {
        transform: translateY(-1px);
    }
</style>

<!-- Scroll to Top Button -->
<button id="scrollTopBtn" class="scroll-top-btn" aria-label="Scroll to top">
    <i class="fas fa-arrow-up"></i>
</button>

<script>
    // Get the button
    const scrollTopBtn = document.getElementById('scrollTopBtn');

    // Show button when user scrolls down 300px from top
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            scrollTopBtn.classList.add('show');
        } else {
            scrollTopBtn.classList.remove('show');
        }
    });

    // Scroll to top when button is clicked
    scrollTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>