import '../css/index.css';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

// Custom JS functionality (e.g. smooth scroll, sticky header)
document.addEventListener('DOMContentLoaded', () => {
    // Sticky Header functionality
    const header = document.getElementById('main-header');
    
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('glass', 'shadow-sm');
                header.classList.remove('bg-transparent');
            } else {
                header.classList.remove('glass', 'shadow-sm');
                header.classList.add('bg-transparent');
            }
        });
    }
});
