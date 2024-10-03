// Navbar Scroll
window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 10) {
        navbar.classList.add('navbar-scroll');
    } else {
        navbar.classList.remove('navbar-scroll');
    }
});

document.querySelectorAll('.flip-btn').forEach(button => {
    button.addEventListener('click', function(e) {
        e.preventDefault();
        const targetCard = this.closest('.flip-card-inner');
        targetCard.classList.toggle('rotate-y-180');
    });
});