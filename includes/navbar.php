<?php
$current_page = basename($_SERVER['PHP_SELF']);
$nav_items = [
    'Home' => 'index.php',
    'About Us' => 'about.php',
    'Products' => 'products.php',
    'Projects' => 'projects.php',
    'Services' => 'services.php',
    'Gallery' => 'gallery.php',
    'Contact' => 'contact.php'
];
?>
<header id="main-header" x-data="{ mobileMenuOpen: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)" :class="{'bg-white shadow-md py-4': scrolled, 'bg-transparent py-6': !scrolled}" class="fixed w-full top-0 z-50 transition-all duration-300">
    <div class="container-custom flex justify-between items-center">
        <!-- Logo -->
        <a href="/universalgranite/" class="flex items-center space-x-3 z-50 relative group">
            <img src="/universalgranite/assets/images/logo.png" alt="Universal Marble & Granite Logo" class="h-10 w-auto object-contain transition-transform duration-300 group-hover:scale-105">
            <span :class="{'text-brand-dark': scrolled, 'text-white': !scrolled}" class="text-xl md:text-2xl font-display font-bold uppercase tracking-wide transition-colors duration-300 group-hover:opacity-80">
                Universal <span :class="{'text-brand-accent': scrolled, 'text-brand-accent-light': !scrolled}" class="transition-colors duration-300">Marble & Granite</span>
            </span>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex space-x-8 items-center">
            <?php foreach ($nav_items as $name => $url): ?>
                <?php 
                $is_active = $current_page == $url || ($current_page == 'index.php' && $url == '/');
                // Adjust paths for inner pages and pretty URLs
                $link_url = ($url == 'index.php') ? '/universalgranite/' : '/universalgranite/pages/' . str_replace('.php', '', $url);
                ?>
                <a href="<?= $link_url ?>" 
                   :class="scrolled ? '<?= $is_active ? 'text-brand-accent font-semibold' : 'text-brand-dark hover:text-brand-accent' ?>' : '<?= $is_active ? 'text-brand-accent-light font-semibold' : 'text-white hover:text-brand-accent-light' ?>'"
                   class="font-medium text-sm tracking-wide uppercase transition-colors duration-300">
                    <?= $name ?>
                </a>
            <?php endforeach; ?>
        </nav>

        <!-- Mobile Menu Button -->
        <button @click="mobileMenuOpen = !mobileMenuOpen" :class="{'text-brand-dark': scrolled || mobileMenuOpen, 'text-white': !scrolled && !mobileMenuOpen}" class="lg:hidden z-50 relative focus:outline-none transition-colors duration-300">
            <svg x-show="!mobileMenuOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            <svg x-show="mobileMenuOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>

        <!-- Mobile Menu Overlay -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-x-full"
             x-transition:enter-end="opacity-100 translate-x-0"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 translate-x-0"
             x-transition:leave-end="opacity-0 translate-x-full"
             class="fixed inset-0 bg-brand-light z-40 flex flex-col justify-center items-center" style="display: none;">
            
            <nav class="flex flex-col space-y-6 text-center w-full px-6">
                <?php foreach ($nav_items as $name => $url): ?>
                    <?php 
                    $is_active = $current_page == $url || ($current_page == 'index.php' && $url == '/');
                    $link_url = ($url == 'index.php') ? '/universalgranite/' : '/universalgranite/pages/' . str_replace('.php', '', $url);
                    ?>
                    <a href="<?= $link_url ?>" 
                       class="font-display text-2xl font-semibold uppercase tracking-widest transition-colors hover:text-brand-accent border-b border-gray-200 pb-2
                       <?= $is_active ? 'text-brand-accent' : 'text-brand-dark' ?>">
                        <?= $name ?>
                    </a>
                <?php endforeach; ?>
            </nav>
        </div>
    </div>
</header>
