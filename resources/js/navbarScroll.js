// Navbar Scroll untuk bagian atas dan bawah
window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar'); // Navbar bagian atas
    const navbar2 = document.getElementById('navbar2'); // Navbar bagian bawah

    if (window.scrollY > 10) {
        navbar.classList.add('navbar-scroll'); // Menambah kelas saat scroll
        navbar2.classList.add('navbar2-scroll'); // Menambah kelas saat scroll untuk navbar bawah
    } else {
        navbar.classList.remove('navbar-scroll'); // Menghapus kelas saat tidak scroll
        navbar2.classList.remove('navbar2-scroll'); // Menghapus kelas saat tidak scroll untuk navbar bawah
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

// 
document.getElementById('flipButton').addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('flipCard').classList.toggle('flipped');
});
