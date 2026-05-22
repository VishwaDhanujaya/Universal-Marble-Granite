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
    
    <div class="relative z-10 max-w-3xl mx-auto space-y-8 animate-fade-in">
        <span class="text-brand-accent-light font-display font-semibold tracking-widest uppercase text-xs sm:text-sm">Get in Touch</span>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold text-white uppercase tracking-wider">
            Ready to Transform Your Space?
        </h2>
        <p class="text-gray-400 font-sans max-w-xl mx-auto text-sm sm:text-base leading-relaxed opacity-90">
            Get in touch with our natural stone experts today to discuss your architectural requirements and receive tailored stone solutions.
        </p>
        <div class="pt-4">
            <a href="<?= $base_path ?>/pages/contact" class="btn-primary">
                Contact Our Experts
            </a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
