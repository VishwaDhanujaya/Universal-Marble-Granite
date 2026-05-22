<?php
$pageTitle = 'Our Services';
include '../includes/header.php';
?>

<!-- Page Header -->
<section class="relative pt-28 pb-16 lg:pt-36 lg:pb-20 bg-brand-dark overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-neutral-900 via-brand-dark to-black opacity-95 z-0"></div>
    <div class="container-custom relative z-10 text-center space-y-4">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-white uppercase tracking-wider animate-slide-up">
            Our Services
        </h1>
        <p class="text-gray-400 font-sans max-w-2xl mx-auto text-sm md:text-base leading-relaxed tracking-wide opacity-90">
            Expert stone processing and luxury installation services for residential, commercial, and government environments.
        </p>
    </div>
</section>

<!-- Services Details List -->
<section class="py-16 md:py-24 lg:py-32 bg-white overflow-hidden">
    <div class="container-custom">
        
        <?php
        $services = [
            [
                'count' => '01',
                'title' => 'Flooring',
                'image' => '/universalgranite/assets/images/flooring.webp',
                'content' => [
                    "The company has undertaken many flooring projects for hotels, private sector corporate premises, as well as government office complexes.",
                    "The high quality granite and marbles from Universal Marble & Granite has adorned many luxury spaces in and around Colombo including luxury residencies. Some of the flooring projects include flat surfaces as well as steps and stairways and slanted disability access areas."
                ]
            ],
            [
                'count' => '02',
                'title' => 'Walls',
                'image' => '/universalgranite/assets/images/walls.webp',
                'content' => [
                    "The company specializes in elegant wall installations using granite and marble inclusive of decorative elements. The range of colours and textures available at Universal Marble & Granite gives walls a unique feature adding elegance to the premises.",
                    "Many military messes and bases, as well as hotels and resorts have incorporated natural stone based walling options from Universal Marble & Granite."
                ]
            ],
            [
                'count' => '03',
                'title' => 'Pantries',
                'image' => '/universalgranite/assets/images/pantries.webp',
                'content' => [
                    "Granite and marbles is a popular preference for kitchen and pantries for their durability and low maintenance.",
                    "Universal Marble & Granite has installed numerous pantry and kitchen tops for residents which are specially treated to ensure heat and stain resistance for a longer period of time."
                ]
            ],
            [
                'count' => '04',
                'title' => 'Bathware',
                'image' => '/universalgranite/assets/images/bathware.webp',
                'content' => [
                    "Many of Sri Lankan hotel and resort vanity tops are manufactured and installed by Universal Marble & Granite. The wide variety of colours available in both marble and granite as well as the production capabilities of the processing facility has made the company a sought after supplier of natural stone based vanity tops and bath requirements for large leisure sector projects.",
                    "In addition, the company has also installed vanity tops for government and private sector office complexes as well as luxury residencies."
                ]
            ],
            [
                'count' => '05',
                'title' => 'Decorative',
                'image' => '/universalgranite/assets/images/decorative.webp',
                'content' => [
                    "Universal Marble & Granite’s skilled craftsmen have manufactured and installed many decorative infrastructures such as ponds and waterfalls, statues and monuments in several military bases, hotels and government sector premises.",
                    "The company is capable of manufacturing and customizing any type of center pieces, monuments and any other types of decorative products of the client choice."
                ]
            ]
        ];

        // Prepend dynamic base path to all service images
        foreach ($services as &$service) {
            $service['image'] = $base_path . str_replace('/universalgranite', '', $service['image']);
        }
        unset($service);

        foreach ($services as $index => $service) {
            $serviceCount = $service['count'];
            $serviceTitle = $service['title'];
            $serviceImage = $service['image'];
            $serviceContent = $service['content'];
            $isReversed = ($index % 2 !== 0); // Alternate every other row
            
            include '../components/service-card.php';
        }
        ?>

    </div>
</section>

<!-- Luxury Contact CTA Section -->
<section class="py-16 md:py-24 bg-brand-dark text-center relative overflow-hidden px-4">
    <!-- Sophisticated golden accent overlay matching the About Us CTA layout -->
    <div class="absolute inset-0 bg-gradient-to-tr from-brand-dark via-neutral-900 to-black opacity-90 z-0"></div>
    
    <div class="relative z-10 max-w-5xl mx-auto space-y-10 animate-fade-in">
        <div class="text-center space-y-4">
            <span class="text-brand-accent-light font-display font-semibold tracking-widest uppercase text-xs sm:text-sm">Visit Our Showroom</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold text-white uppercase tracking-wider">
                Find Us in Nawala
            </h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-4">
            <!-- Address Card -->
            <div class="flex flex-col items-center space-y-4 p-6 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm hover:border-brand-accent/50 transition-all duration-300">
                <div class="p-3.5 bg-brand-accent/20 rounded-full text-brand-accent-light">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="font-display font-bold text-white tracking-widest uppercase text-xs sm:text-sm">Location</h3>
                <p class="text-gray-300 font-sans text-sm leading-relaxed text-center">
                    No. 267/1, Nawala Road,<br>Nawala, Sri Lanka.
                </p>
            </div>

            <!-- Phone Card -->
            <a href="tel:+94112806603" class="group flex flex-col items-center space-y-4 p-6 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm hover:border-brand-accent/50 hover:bg-white/10 transition-all duration-300">
                <div class="p-3.5 bg-brand-accent/20 rounded-full text-brand-accent-light group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                </div>
                <h3 class="font-display font-bold text-white tracking-widest uppercase text-xs sm:text-sm">Phone</h3>
                <p class="text-brand-accent-light font-display font-semibold text-lg group-hover:text-white transition-colors duration-300">
                    0112 806 603
                </p>
            </a>

            <!-- Hours Card -->
            <div class="flex flex-col items-center space-y-4 p-6 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm hover:border-brand-accent/50 transition-all duration-300">
                <div class="p-3.5 bg-brand-accent/20 rounded-full text-brand-accent-light">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="font-display font-bold text-white tracking-widest uppercase text-xs sm:text-sm">Opening Hours</h3>
                <p class="text-gray-300 font-sans text-sm leading-relaxed text-center">
                    – open Monday to Saturday –<br>from 9am to 6pm
                </p>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
