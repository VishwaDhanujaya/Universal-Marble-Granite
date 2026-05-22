<?php
$pageTitle = 'Gallery';
include '../includes/header.php';

// Highly descriptive, human-readable gallery list from actual local assets in assets/images/gallery/
$gallery = [
    ['src' => $base_path . '/assets/images/gallery/universal-head-office-showroom-nawala.png', 'alt' => 'Universal Head Office Showroom Nawala'],
    ['src' => $base_path . '/assets/images/gallery/hotel-euro-lanka-foyer-marble-installation.jpg', 'alt' => 'Hotel Euro Lanka Foyer Marble Installation'],
    ['src' => $base_path . '/assets/images/gallery/polished-classic-marble-flooring-panel.jpg', 'alt' => 'Polished Classic Marble Flooring Panel'],
    ['src' => $base_path . '/assets/images/gallery/luxury-circular-granite-steps-staircase.jpg', 'alt' => 'Luxury Circular Granite Steps & Staircase'],
    ['src' => $base_path . '/assets/images/gallery/premium-black-galaxy-granite-kitchen-island-countertop.jpg', 'alt' => 'Premium Black Galaxy Granite Kitchen Island Countertop'],
    ['src' => $base_path . '/assets/images/gallery/bookmatched-marble-feature-accent-wall-cladding.jpg', 'alt' => 'Bookmatched Marble Feature Accent Wall Cladding'],
    ['src' => $base_path . '/assets/images/gallery/polished-madura-ivory-granite-lobby-tiling.jpg', 'alt' => 'Polished Madura Ivory Granite Lobby Tiling'],
    ['src' => $base_path . '/assets/images/gallery/contemporary-living-area-premium-marble-tiling.jpg', 'alt' => 'Contemporary Living Area Premium Marble Tiling'],
    ['src' => $base_path . '/assets/images/gallery/grand-dining-hall-luxury-marble-flooring.jpg', 'alt' => 'Grand Dining Hall Luxury Marble Flooring'],
    ['src' => $base_path . '/assets/images/gallery/premium-raw-stone-slab-yard-stockyard-collection.jpg', 'alt' => 'Premium Raw Stone Slab Yard Stockyard Collection'],
    ['src' => $base_path . '/assets/images/gallery/exclusive-high-gloss-granite-slab-showroom-showcase.jpg', 'alt' => 'Exclusive High-Gloss Granite Slab Showroom Showcase'],
    ['src' => $base_path . '/assets/images/gallery/bespoke-bathware-vanity-top-in-trani-fiorito.jpg', 'alt' => 'Bespoke Bathware Vanity Top in Trani Fiorito'],
    ['src' => $base_path . '/assets/images/gallery/polished-steel-grey-granite-wall-surface-panel.jpg', 'alt' => 'Polished Steel Grey Granite Wall Surface Panel'],
    ['src' => $base_path . '/assets/images/gallery/exclusive-absolute-black-granite-slab-display.jpg', 'alt' => 'Exclusive Absolute Black Granite Slab Display'],
    ['src' => $base_path . '/assets/images/gallery/custom-cut-madana-palli-white-granite-kitchen-countertop.jpg', 'alt' => 'Custom Cut Madana Palli White Granite Kitchen Countertop'],
    ['src' => $base_path . '/assets/images/gallery/executive-office-foyer-premium-marble-installation.jpg', 'alt' => 'Executive Office Foyer Premium Marble Installation'],
    ['src' => $base_path . '/assets/images/gallery/bespoke-double-vanity-tops-in-luxury-slabs.jpg', 'alt' => 'Bespoke Double Vanity Tops in Luxury Slabs'],
    ['src' => $base_path . '/assets/images/gallery/bespoke-ponds-and-natural-garden-stone-waterfall-feature.png', 'alt' => 'Bespoke Ponds and Natural Garden Stone Waterfall Feature'],
    ['src' => $base_path . '/assets/images/gallery/arcade-independence-square-architectural-granite-tiling.jpg', 'alt' => 'Arcade Independence Square Architectural Granite Tiling'],
    ['src' => $base_path . '/assets/images/gallery/rock-house-army-camp-visitor-area-granite-flooring.jpg', 'alt' => 'Rock House Army Camp Visitor Area Granite Flooring'],
    ['src' => $base_path . '/assets/images/gallery/luxury-slabs-and-carved-stone-bathware-vanity.png', 'alt' => 'Luxury Slabs and Carved Stone Bathware vanity'],
    ['src' => $base_path . '/assets/images/gallery/elegant-living-room-accent-wall-cladding-panel.png', 'alt' => 'Elegant Living Room Accent Wall Cladding Panel'],
    ['src' => $base_path . '/assets/images/gallery/cafe-colombo-commercial-pantry-granite-countertops.jpg', 'alt' => 'Cafe Colombo Commercial Pantry Granite Countertops'],
    ['src' => $base_path . '/assets/images/gallery/grand-hotel-lobby-bookmatched-marble-panel-cladding.png', 'alt' => 'Grand Hotel Lobby Bookmatched Marble Panel Cladding'],
    ['src' => $base_path . '/assets/images/gallery/foyer-tiling-with-sofia-beige-granite-decorative-borders.png', 'alt' => 'Foyer Tiling with Sofia Beige Granite Decorative Borders'],
    ['src' => $base_path . '/assets/images/gallery/commercial-complex-reception-foyer-granite-steps.jpg', 'alt' => 'Commercial Complex Reception Foyer Granite Steps'],
    ['src' => $base_path . '/assets/images/gallery/historic-monument-and-ornamental-carved-stone-columns.png', 'alt' => 'Historic Monument and Ornamental Carved Stone Columns'],
    ['src' => $base_path . '/assets/images/gallery/yala-resort-lobby-sandstone-and-granite-installation.jpg', 'alt' => 'Yala Resort Lobby Sandstone and Granite Installation']
];
?>

<!-- Page Header -->
<section class="relative pt-28 pb-16 lg:pt-36 lg:pb-20 bg-brand-dark overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-neutral-900 via-brand-dark to-black opacity-95 z-0"></div>
    <div class="container-custom relative z-10 text-center space-y-4">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-white uppercase tracking-wider animate-slide-up">
            Our Gallery
        </h1>
        <p class="text-gray-400 font-sans max-w-2xl mx-auto text-sm md:text-base leading-relaxed tracking-wide opacity-90 animate-fade-in">
            A comprehensive look at our landmark corporate, commercial, and residential installations across Sri Lanka.
        </p>
    </div>
</section>

<!-- Gallery Section with Masonry Grid & Lightbox -->
<section class="section-padding bg-brand-light" x-data="{ 
    lightboxOpen: false, 
    currentIndex: 0, 
    items: <?= htmlspecialchars(json_encode($gallery), ENT_QUOTES, 'UTF-8') ?>,
    get currentImage() { return this.items[this.currentIndex]?.src || ''; },
    get currentAlt() { return this.items[this.currentIndex]?.alt || ''; },
    next() { this.currentIndex = (this.currentIndex + 1) % this.items.length; },
    prev() { this.currentIndex = (this.currentIndex - 1 + this.items.length) % this.items.length; }
}">
    <div class="container-custom">

        <!-- Masonry Grid for Dynamic Image Proportions (4 Columns) -->
        <div class="columns-1 sm:columns-2 md:columns-3 lg:columns-4 gap-6 space-y-6">
            <?php foreach($gallery as $index => $item): ?>
                <div class="break-inside-avoid relative group overflow-hidden cursor-pointer rounded-lg shadow-sm hover:shadow-2xl transition-all duration-500 bg-white border border-neutral-100"
                     @click="lightboxOpen = true; currentIndex = <?= $index ?>">
                    <img src="<?= $item['src'] ?>" alt="<?= htmlspecialchars($item['alt']) ?>" loading="lazy" class="w-full h-auto object-cover transform group-hover:scale-[1.03] transition-transform duration-700">
                    
                    <!-- Hover Premium Text Overlay -->
                    <div class="absolute inset-0 bg-brand-dark/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center p-6 text-center">
                        <svg class="w-8 h-8 text-brand-accent-light mb-3 transform scale-75 group-hover:scale-100 transition-transform duration-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg>
                        <span class="text-white text-sm font-display font-medium tracking-wide leading-relaxed px-2"><?= htmlspecialchars($item['alt']) ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Lightbox Modal -->
    <div x-show="lightboxOpen" style="display: none;"
         class="fixed inset-0 z-[100] flex items-center justify-center bg-black/95 p-4 md:p-10"
         @keydown.escape.window="lightboxOpen = false"
         @keydown.right.window="if (lightboxOpen) next()"
         @keydown.left.window="if (lightboxOpen) prev()"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">
        
        <!-- Close Button -->
        <button @click="lightboxOpen = false" class="absolute top-6 right-6 text-white hover:text-brand-accent-light focus:outline-none transition-colors z-[110]" aria-label="Close Lightbox">
            <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        
        <!-- Navigation Buttons -->
        <button @click="prev()" class="absolute left-4 md:left-8 text-white/75 hover:text-white bg-neutral-900/60 hover:bg-neutral-900/80 p-3 rounded-full transition-all focus:outline-none z-[110]" aria-label="Previous Image">
            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        
        <!-- Lightbox Content -->
        <div class="relative z-[105] max-w-5xl w-full" @click.outside="lightboxOpen = false">
            <img :src="currentImage" :alt="currentAlt" class="max-w-full max-h-[85vh] object-contain shadow-2xl mx-auto rounded-sm">
            <p class="text-center text-gray-300 font-display font-medium text-base mt-5 tracking-wide" x-text="currentAlt"></p>
        </div>

        <button @click="next()" class="absolute right-4 md:right-8 text-white/75 hover:text-white bg-neutral-900/60 hover:bg-neutral-900/80 p-3 rounded-full transition-all focus:outline-none z-[110]" aria-label="Next Image">
            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
