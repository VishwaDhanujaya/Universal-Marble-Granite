<?php
$pageTitle = 'Home';
include 'includes/header.php';
?>

<style>
    /* Fine-grain premium dotted background grid for home consistency */
    .luxury-pattern {
        background-image: radial-gradient(#2B5821 1.5px, transparent 1.5px);
        background-size: 16px 16px;
    }
</style>

<!-- Hero Section -->
<!-- Hero Section -->
<section x-data="{ activeSlide: 0, slidesCount: 3, autoplay() { setInterval(() => { this.activeSlide = (this.activeSlide + 1) % this.slidesCount }, 9000) } }" 
         x-init="autoplay()" 
         class="relative h-screen flex items-center justify-center overflow-hidden">
    
    <!-- Background Image Slider Wrapper -->
    <div class="absolute inset-0 z-0">
        <!-- Slide 1: Showroom -->
        <div class="absolute inset-0 transition-all duration-[2000ms] ease-in-out transform"
             :class="activeSlide === 0 ? 'opacity-100 scale-100' : 'opacity-0 scale-105'">
            <img src="<?= $base_path ?>/assets/images/store.webp" alt="Luxury Storefront Showroom" class="w-full h-full object-cover">
        </div>
        
        <!-- Slide 2: Pantries -->
        <div class="absolute inset-0 transition-all duration-[2000ms] ease-in-out transform"
             :class="activeSlide === 1 ? 'opacity-100 scale-100' : 'opacity-0 scale-105'"
             x-cloak>
            <img src="<?= $base_path ?>/assets/images/pantries.webp" alt="Premium Kitchen Pantries" class="w-full h-full object-cover">
        </div>
        
        <!-- Slide 3: Vision -->
        <div class="absolute inset-0 transition-all duration-[2000ms] ease-in-out transform"
             :class="activeSlide === 2 ? 'opacity-100 scale-100' : 'opacity-0 scale-105'"
             x-cloak>
            <img src="<?= $base_path ?>/assets/images/our-vision.webp" alt="Exquisite Natural Stones" class="w-full h-full object-cover">
        </div>

        <!-- Premium balanced dark radial-to-linear hybrid dark overlay to enhance text legibility while showing the storefront -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/35 to-black/75 z-[3]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-black/10 via-black/45 to-black/85 opacity-85 z-[4]"></div>
    </div>
    
    <div class="container-custom relative z-10 text-center px-4 py-8 flex flex-col items-center justify-center min-h-[460px] sm:min-h-[420px] md:min-h-[400px]">
        <!-- Static Top Pill Badge -->
        <span class="inline-block px-4 py-1.5 bg-black/40 backdrop-blur-md text-brand-accent-light font-display font-semibold tracking-[0.25em] uppercase text-xs sm:text-sm rounded-full mb-6 border border-brand-accent-light/30 animate-fade-in drop-shadow-[0_2px_4px_rgba(0,0,0,0.4)]">
            Sri Lanka's No. 1 Natural Stone Supplier
        </span>

        <!-- Dynamic Title & Subject Stack -->
        <div class="relative w-full flex items-center justify-center min-h-[220px] sm:min-h-[180px] md:min-h-[160px]">
            <!-- Slide 1 Text: Welcome -->
            <div class="w-full transition-all duration-1000 ease-out transform space-y-6"
                 :class="activeSlide === 0 ? 'opacity-100 translate-y-0 relative' : 'opacity-0 translate-y-8 absolute pointer-events-none'">
                <h1 class="text-3xl sm:text-5xl md:text-7xl font-display font-bold text-white uppercase tracking-wider leading-none drop-shadow-[0_4px_12px_rgba(0,0,0,0.7)]">
                    Welcome to <span class="text-brand-accent-light">Universal</span> Marble & Granite
                </h1>
                <p class="text-base md:text-xl text-gray-100 max-w-2xl mx-auto font-normal leading-relaxed tracking-wide drop-shadow-[0_2px_6px_rgba(0,0,0,0.6)]">
                    Premium natural stones, marble, and granite sourced from the finest quarries worldwide for Sri Lanka's most luxurious architectural masterpieces.
                </p>
            </div>

            <!-- Slide 2 Text: Largest Selection -->
            <div class="w-full transition-all duration-1000 ease-out transform space-y-6"
                 :class="activeSlide === 1 ? 'opacity-100 translate-y-0 relative' : 'opacity-0 translate-y-8 absolute pointer-events-none'"
                 x-cloak>
                <h1 class="text-3xl sm:text-5xl md:text-7xl font-display font-bold text-white uppercase tracking-wider leading-none drop-shadow-[0_4px_12px_rgba(0,0,0,0.7)]">
                    Largest Selection of <span class="text-brand-accent-light">Stone</span> Products
                </h1>
                <p class="text-base md:text-xl text-gray-100 max-w-2xl mx-auto font-normal leading-relaxed tracking-wide drop-shadow-[0_2px_6px_rgba(0,0,0,0.6)]">
                    Explore over a decade of exquisite handpicked slabs, from rare Italian marbles to pristine Brazilian granites cut to perfection.
                </p>
            </div>

            <!-- Slide 3 Text: Showroom Wattala -->
            <div class="w-full transition-all duration-1000 ease-out transform space-y-6"
                 :class="activeSlide === 2 ? 'opacity-100 translate-y-0 relative' : 'opacity-0 translate-y-8 absolute pointer-events-none'"
                 x-cloak>
                <h1 class="text-3xl sm:text-5xl md:text-7xl font-display font-bold text-white uppercase tracking-wider leading-none drop-shadow-[0_4px_12px_rgba(0,0,0,0.7)]">
                    Visit Our Showroom in <span class="text-brand-accent-light">Wattala</span>, Sri Lanka
                </h1>
                <p class="text-base md:text-xl text-gray-100 max-w-2xl mx-auto font-normal leading-relaxed tracking-wide drop-shadow-[0_2px_6px_rgba(0,0,0,0.6)]">
                    Step into a world of architectural stone possibilities. Meet our natural stone consultants and explore custom granite and marble solutions live.
                </p>
            </div>
        </div>

        <!-- Static Bottom Buttons -->
        <div class="flex flex-col sm:flex-row justify-center gap-4 pt-6 w-full z-10">
            <a href="<?= $base_path ?>/pages/products" class="btn-primary shadow-lg shadow-black/30 hover:shadow-brand-accent/20">Explore Collection</a>
            <a href="<?= $base_path ?>/pages/contact" class="btn-outline border-white text-white bg-black/20 backdrop-blur-sm hover:bg-white hover:text-brand-dark transition-all duration-300">Contact Us</a>
        </div>
    </div>

    <!-- Slider Navigation Arrows -->
    <div class="absolute inset-x-4 sm:inset-x-8 top-1/2 -translate-y-1/2 z-20 flex justify-between pointer-events-none">
        <!-- Prev Button -->
        <button @click="activeSlide = (activeSlide - 1 + slidesCount) % slidesCount" 
                class="w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center rounded-full bg-black/25 backdrop-blur-md border border-white/10 text-white hover:bg-white hover:text-brand-dark transition-all duration-300 pointer-events-auto hover:shadow-lg shadow-black/20 focus:outline-none"
                aria-label="Previous slide">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <!-- Next Button -->
        <button @click="activeSlide = (activeSlide + 1) % slidesCount" 
                class="w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center rounded-full bg-black/25 backdrop-blur-md border border-white/10 text-white hover:bg-white hover:text-brand-dark transition-all duration-300 pointer-events-auto hover:shadow-lg shadow-black/20 focus:outline-none"
                aria-label="Next slide">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>

    <!-- Slider Navigation Indicators -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20 flex space-x-3">
        <button @click="activeSlide = 0" 
                class="h-[3px] transition-all duration-500 rounded-full" 
                :class="activeSlide === 0 ? 'w-8 bg-brand-accent-light' : 'w-3 bg-white/40 hover:bg-white/70'" 
                aria-label="Go to slide 1">
        </button>
        <button @click="activeSlide = 1" 
                class="h-[3px] transition-all duration-500 rounded-full" 
                :class="activeSlide === 1 ? 'w-8 bg-brand-accent-light' : 'w-3 bg-white/40 hover:bg-white/70'" 
                aria-label="Go to slide 2">
        </button>
        <button @click="activeSlide = 2" 
                class="h-[3px] transition-all duration-500 rounded-full" 
                :class="activeSlide === 2 ? 'w-8 bg-brand-accent-light' : 'w-3 bg-white/40 hover:bg-white/70'" 
                aria-label="Go to slide 3">
        </button>
    </div>
</section>

<!-- About Us Section -->
<section class="py-16 md:py-24 lg:py-32 bg-white overflow-hidden">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Text Content -->
            <div class="lg:col-span-7 space-y-8">
                <div class="flex items-center space-x-3">
                    <span class="inline-block px-3 py-1 bg-brand-light text-brand-accent font-display font-semibold tracking-widest uppercase text-[10px] rounded-full">01 / Introduction</span>
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold text-brand-dark leading-tight tracking-tight">
                    About <span class="text-brand-accent">Us</span>
                </h2>
                <div class="space-y-6 text-brand-gray font-sans text-sm sm:text-base leading-relaxed">
                    <p class="font-medium text-brand-dark text-lg sm:text-xl border-l-4 border-brand-accent pl-4">
                        Universal Marble & Granite (Pvt) Ltd is a leading supplier of natural stones to Sri Lanka's top state and private sector projects for over a decade.
                    </p>
                    <p>
                        We are widely known for housing the <span class="font-semibold text-brand-dark">largest collection of stone products</span> in the country, providing our clients with an elite selection of marbles and granites imported from premier sources.
                    </p>
                </div>
                <div class="pt-4">
                    <a href="<?= $base_path ?>/pages/about" class="btn-outline border-brand-dark text-brand-dark hover:bg-brand-dark hover:text-white">Discover Our Story</a>
                </div>
            </div>

            <!-- Image Media with offset luxury borders and dot grid backdrop -->
            <div class="lg:col-span-5 relative group px-4 lg:px-0">
                <!-- Dotted Grid Background -->
                <div class="absolute -top-4 -left-4 w-24 h-24 luxury-pattern opacity-40 z-0"></div>
                <!-- Offset outline frame border -->
                <div class="absolute -bottom-3 -right-3 w-full h-full border border-brand-accent/30 rounded-sm z-0 group-hover:translate-x-1 group-hover:translate-y-1 transition-transform duration-500"></div>
                
                <div class="relative overflow-hidden aspect-[3/2] w-full border border-gray-100 shadow-2xl rounded-sm z-10 bg-white">
                    <img src="<?= $base_path ?>/assets/images/store.webp" alt="Universal Granite Store" loading="lazy" class="w-full h-full object-cover hover:scale-[1.03] transition-transform duration-700">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Our Products Section -->
<section class="relative py-16 md:py-24 lg:py-32 bg-cover bg-center bg-no-repeat overflow-hidden" style="background-image: url('<?= $base_path ?>/assets/images/our-products-bg.webp');">
    <div class="container-custom relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <span class="inline-block px-4 py-1.5 bg-brand-dark/95 text-brand-accent-light font-display font-semibold tracking-widest uppercase text-[10px] sm:text-xs rounded-full shadow-md mb-4 border border-brand-accent/30">
                What We Offer
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold text-white uppercase tracking-wide drop-shadow-[0_4px_12px_rgba(0,0,0,0.85)] mt-2">
                Our Products
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Granite Slabs -->
            <div class="group relative overflow-hidden rounded-2xl shadow-[0_15px_35px_-5px_rgba(0,0,0,0.5)] hover:shadow-[0_30px_60px_-10px_rgba(0,0,0,0.8)] cursor-pointer hover:-translate-y-3 transition-all duration-500 ease-out">
                <!-- Sliding accent top border -->
                <div class="absolute top-0 left-0 w-full h-[4px] bg-brand-accent transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 z-20"></div>
                <div class="overflow-hidden aspect-[16/10] w-full relative">
                    <img src="<?= $base_path ?>/assets/images/granite-slab-home.webp" alt="Granite Slabs" loading="lazy" class="w-full h-full object-cover group-hover:scale-[1.03] transition-transform duration-700">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent flex flex-col justify-end p-8 z-10">
                    <span class="text-brand-accent-light text-xs font-bold uppercase tracking-[0.2em] mb-2">Natural Stone</span>
                    <h3 class="text-3xl font-display font-bold text-white mb-3">Granite Slabs</h3>
                    <p class="text-gray-300 text-sm leading-relaxed mb-6 max-w-sm">Durable, heat-resistant, and beautiful — our granite collection spans from deep blacks to warm earth tones, sourced from the finest quarries.</p>
                    <a href="<?= $base_path ?>/pages/products" class="inline-flex items-center gap-2 text-white border border-white/40 hover:border-brand-accent-light hover:text-brand-accent-light px-6 py-2.5 text-sm font-medium uppercase tracking-wider transition-all duration-300 w-fit">
                        View Collection
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>

            <!-- Marble Tiles -->
            <div class="group relative overflow-hidden rounded-2xl shadow-[0_15px_35px_-5px_rgba(0,0,0,0.5)] hover:shadow-[0_30px_60px_-10px_rgba(0,0,0,0.8)] cursor-pointer hover:-translate-y-3 transition-all duration-500 ease-out">
                <!-- Sliding accent top border -->
                <div class="absolute top-0 left-0 w-full h-[4px] bg-brand-accent transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 z-20"></div>
                <div class="overflow-hidden aspect-[16/10] w-full relative">
                    <img src="<?= $base_path ?>/assets/images/marble-tiles-home.webp" alt="Marble Tiles" loading="lazy" class="w-full h-full object-cover group-hover:scale-[1.03] transition-transform duration-700">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent flex flex-col justify-end p-8 z-10">
                    <span class="text-brand-accent-light text-xs font-bold uppercase tracking-[0.2em] mb-2">Luxury Stone</span>
                    <h3 class="text-3xl font-display font-bold text-white mb-3">Marble Tiles</h3>
                    <p class="text-gray-300 text-sm leading-relaxed mb-6 max-w-sm">Timeless elegance with every vein. Our marble collection brings classical luxury to floors, walls, and countertops of the highest caliber.</p>
                    <a href="<?= $base_path ?>/pages/products" class="inline-flex items-center gap-2 text-white border border-white/40 hover:border-brand-accent-light hover:text-brand-accent-light px-6 py-2.5 text-sm font-medium uppercase tracking-wider transition-all duration-300 w-fit">
                        View Collection
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- From Our Store Selection -->
<?php
$featuredProducts = [
    ['name' => 'Black Pearl', 'category' => 'Granite', 'image' => $base_path . '/assets/images/products/granite/black-pearl.jpg'],
    ['name' => 'Makarana White', 'category' => 'Marble', 'image' => $base_path . '/assets/images/products/marble/makarana-white.jpg'],
    ['name' => 'Dark Emperador', 'category' => 'Marble', 'image' => $base_path . '/assets/images/products/marble/dark-emperador.jpg'],
    ['name' => 'Black Galaxy', 'category' => 'Granite', 'image' => $base_path . '/assets/images/products/granite/black-galaxy.jpg']
];
?>
<section class="py-16 md:py-24 lg:py-32 bg-white overflow-hidden">
    <div class="container-custom">
        
        <div class="text-center max-w-3xl mx-auto mb-20 space-y-4">
            <span class="text-brand-accent font-display font-semibold tracking-widest uppercase text-xs sm:text-sm">Premium Selection</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold text-brand-dark uppercase tracking-wide">
                From Our Showroom
            </h2>
            <p class="text-brand-gray font-sans max-w-xl mx-auto text-sm sm:text-base opacity-90">
                A curated glimpse into our showroom's finest stone products designed to define modern luxury.
            </p>
        </div>

        <!-- 4-Column Grid utilizing shared, lazy-loaded, square tile components -->
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php foreach ($featuredProducts as $prod): ?>
                <div class="w-full">
                    <?php 
                    $image = $prod['image'];
                    $name = $prod['name'];
                    $category = $prod['category'];
                    $description = '';
                    include 'components/product-card.php'; 
                    ?>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-14">
            <a href="<?= $base_path ?>/pages/products" class="btn-primary">View Full Collection</a>
        </div>
    </div>
</section>

<!-- Projects Section (Textured Dark backdrop with slate-dark cards) -->
<section class="py-16 md:py-24 lg:py-32 bg-repeat relative overflow-hidden" style="background-image: url('<?= $base_path ?>/assets/images/project-bg.webp'); background-size: 512px;">
    
    <div class="container-custom relative z-10">
        
        <div class="text-center max-w-3xl mx-auto mb-20 space-y-4">
            <span class="text-brand-accent-light font-display font-semibold tracking-widest uppercase text-xs sm:text-sm">Our Work</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold text-white uppercase tracking-wide">
                Featured Projects
            </h2>
            <p class="text-gray-400 font-sans max-w-xl mx-auto text-sm sm:text-base opacity-90">
                Landmark installations that define our legacy of engineering stone in Sri Lanka's built environment.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

            <!-- Project 1: Arcade Independence Square -->
            <div class="group bg-neutral-900/40 backdrop-blur-md overflow-hidden hover:shadow-2xl hover:border-brand-accent-light/50 border border-neutral-800/80 hover:-translate-y-1 transition-all duration-500 rounded-lg relative">
                <!-- Sliding accent top border -->
                <div class="absolute top-0 left-0 w-full h-[4px] bg-brand-accent-light transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 z-20"></div>
                <div class="overflow-hidden aspect-[16/10] w-full relative">
                    <img src="<?= $base_path ?>/assets/images/projects/arcade-independence.jpg" alt="Arcade Independence Square" loading="lazy" class="w-full h-full object-cover group-hover:scale-[1.03] transition-transform duration-700">
                </div>
                <div class="p-8">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-brand-accent-light text-xs font-bold uppercase tracking-widest">2015</span>
                        <span class="w-8 h-px bg-brand-accent-light/40"></span>
                        <span class="text-gray-500 text-xs uppercase tracking-wider">Commercial</span>
                    </div>
                    <h3 class="text-2xl font-display font-bold text-white mb-4 group-hover:text-brand-accent-light transition-colors duration-300">Arcade Independence Square</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">
                        The Arcade is a plush shopping complex housing top global brands. It is also a symbolic space with renovated historic buildings and coined for its close proximity to the venue of independence declaration.
                    </p>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">
                        The project included decorative and monumental structure manufacture as well as functional area tiling — walls, floors, steps to Lion Square — using Paradiso Granite, Multi Beige Granite in rough and gloss finishes. <span class="text-gray-400 font-medium">342 sq.ft of granite used.</span>
                    </p>
                    <div class="flex items-center gap-2 text-brand-accent-light text-sm font-medium font-display uppercase tracking-wider text-xs">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/></svg>
                        Nawala, Colombo
                    </div>
                </div>
            </div>

            <!-- Project 2: Rock House Army Camp -->
            <div class="group bg-neutral-900/40 backdrop-blur-md overflow-hidden hover:shadow-2xl hover:border-brand-accent-light/50 border border-neutral-800/80 hover:-translate-y-1 transition-all duration-500 rounded-lg relative">
                <!-- Sliding accent top border -->
                <div class="absolute top-0 left-0 w-full h-[4px] bg-brand-accent-light transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 z-20"></div>
                <div class="overflow-hidden aspect-[16/10] w-full relative">
                    <img src="<?= $base_path ?>/assets/images/projects/rock-house-army-camp.jpg" alt="Rock House Army Camp" loading="lazy" class="w-full h-full object-cover group-hover:scale-[1.03] transition-transform duration-700">
                </div>
                <div class="p-8">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-brand-accent-light text-xs font-bold uppercase tracking-widest">2012 / 2013</span>
                        <span class="w-8 h-px bg-brand-accent-light/40"></span>
                        <span class="text-gray-500 text-xs uppercase tracking-wider">Government</span>
                    </div>
                    <h3 class="text-2xl font-display font-bold text-white mb-4 group-hover:text-brand-accent-light transition-colors duration-300">Rock House Army Camp</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">
                        Rock House army camp is a military base located at Modera which serves as the regimental headquarters of the Sri Lanka Armored Corps of the Sri Lanka Army.
                    </p>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">
                        The project covered wall, terrace, lobby, entrance, visitors rooms, kitchen and washroom areas using sand stone and black galaxy granite. <span class="text-gray-400 font-medium">7,785 sq.ft granite &amp; 1,428 sq.ft sand stone — 4,428 tiles total.</span>
                    </p>
                    <div class="flex items-center gap-2 text-brand-accent-light text-sm font-medium font-display uppercase tracking-wider text-xs">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/></svg>
                        Modera, Colombo
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center mt-14">
            <a href="<?= $base_path ?>/pages/projects" class="btn-outline border-white text-white hover:bg-white hover:text-brand-dark">View More Projects</a>
        </div>
    </div>
</section>

<!-- Luxury Contact CTA Section -->
<section class="py-16 md:py-24 bg-white text-center border-t border-gray-100 relative overflow-hidden px-4">
    
    <div class="relative z-10 max-w-3xl mx-auto space-y-6 animate-fade-in text-center">
        <!-- Address -->
        <p class="font-display text-xl sm:text-2xl font-normal tracking-wide text-brand-dark">
            No. 267/1, Nawala Road, Nawala, Sri Lanka.
        </p>
        
        <!-- Elegant brand separator -->
        <div class="w-16 h-[2px] bg-brand-accent mx-auto my-6 opacity-80"></div>
        
        <!-- Large luxury phone link -->
        <p class="font-display text-3xl sm:text-4xl font-bold tracking-widest text-brand-accent hover:text-brand-dark transition-colors duration-300">
            <a href="tel:+94112806603">0112 806 603</a>
        </p>
        
        <!-- Opening Hours -->
        <p class="font-sans text-xs sm:text-sm tracking-widest uppercase text-brand-gray font-semibold">
            – open Monday to Saturday from 9am to 6pm –
        </p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
