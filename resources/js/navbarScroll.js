// Navbar Scroll
window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 10) {
        navbar.classList.add('navbar-scroll');
    } else {
        navbar.classList.remove('navbar-scroll');
    }
});

// Search
const searchBtn = document.getElementById('search-btn');
    const searchModal = document.getElementById('search-modal');
    const closeModal = document.getElementById('close-modal');

    // Open modal on search button click
    searchBtn.addEventListener('click', function() {
        searchModal.classList.remove('hidden');
    });

    // Close modal on close button click
    closeModal.addEventListener('click', function() {
        searchModal.classList.add('hidden');
    });

    // Close modal when clicking outside the modal content
    window.addEventListener('click', function(event) {
        if (event.target === searchModal) {
            searchModal.classList.add('hidden');
        }
    });