import '../css/index.css';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

// Custom JS functionality (e.g. smooth scroll, sticky header)
document.addEventListener('DOMContentLoaded', () => {
    // Note: Sticky Header glassmorphism scroll styling is reactively managed by Alpine.js in includes/navbar.php to prevent class mutation conflicts.
});
