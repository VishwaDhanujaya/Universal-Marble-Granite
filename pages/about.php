<?php
$pageTitle = 'About Us';
// Update path since this is inside the pages folder
include '../includes/header.php';
?>

<style>
    /* Avoid flash of open accordion tabs on slow connections */
    [x-cloak] { display: none !important; }
    
    /* Fine-grain premium dotted background grid */
    .luxury-pattern {
        background-image: radial-gradient(#2B5821 1.5px, transparent 1.5px);
        background-size: 16px 16px;
    }
</style>

<!-- Page Header -->
<section class="relative pt-28 pb-16 lg:pt-36 lg:pb-20 bg-brand-dark overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-neutral-900 via-brand-dark to-black opacity-95 z-0"></div>
    <div class="container-custom relative z-10 text-center space-y-4">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-white uppercase tracking-wider animate-slide-up">
            About Us
        </h1>
        <p class="text-gray-400 font-sans max-w-2xl mx-auto text-sm md:text-base leading-relaxed tracking-wide opacity-90">
            A decade of supplying exquisite, internationally sourced natural stones for Sri Lanka's landmark architectural achievements.
        </p>
    </div>
</section>

<!-- Section 1: Who We Are (Image Right, Text Left) -->
<section id="who-we-are" class="py-24 lg:py-32 bg-white overflow-hidden scroll-mt-20">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Text Content -->
            <div class="lg:col-span-7 space-y-8 animate-slide-up">
                <div class="flex items-center space-x-3">
                    <span class="inline-block px-3 py-1 bg-brand-light text-brand-accent font-display font-semibold tracking-widest uppercase text-[10px] rounded-full">01 / Heritage</span>
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold text-brand-dark leading-tight tracking-tight">
                    Who We Are
                </h2>
                <div class="space-y-6 text-brand-gray font-sans text-sm sm:text-base leading-relaxed">
                    <p class="font-medium text-brand-dark text-lg sm:text-xl border-l-4 border-brand-accent pl-4">
                        Universal Marble & Granite (Pvt) Ltd is a leading supplier of natural stones to Sri Lanka’s top state and private sector projects for over a decade.
                    </p>
                    <p>
                        The company is well-known to have the <span class="font-semibold text-brand-dark">largest collection of stone products</span> and the widest range of marbles and granites sourced both locally and internationally.
                    </p>
                    <p>
                        A preferred partner for many large scale industrial, leisure sector and government infrastructure projects, Universal Marble & Granite (Pvt) Ltd has won the confidence and trust of leading builders, contractors, fabricators, architects, retailers, interior designers and distributors for the <span class="font-semibold text-brand-dark">high quality and reliability</span> of natural stone and stone products.
                    </p>
                    <p>
                        With natural stones imported from the best sources from around the world, Universal Marble & Granite is able to supply granite, limestone, travertine, marble and other types of natural stones throughout the year.
                    </p>
                </div>
            </div>

            <!-- Image Media with offset luxury borders -->
            <div class="lg:col-span-5 relative group px-4 lg:px-0">
                <!-- Dotted Grid Background -->
                <div class="absolute -top-4 -left-4 w-24 h-24 luxury-pattern opacity-40 z-0"></div>
                <!-- Offset outline frame border -->
                <div class="absolute -bottom-3 -right-3 w-full h-full border border-brand-accent/30 rounded-sm z-0 group-hover:translate-x-1 group-hover:translate-y-1 transition-transform duration-500"></div>
                
                <div class="relative overflow-hidden border border-gray-100 shadow-2xl rounded-sm z-10 bg-white aspect-[3/2]">
                    <img src="/universalgranite/assets/images/store.png" alt="Who We Are - Universal Granite" class="w-full h-full object-cover hover:scale-[1.03] transition-transform duration-700">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Section 2: Our Vision (Image Left, Text Right) -->
<section class="py-24 lg:py-32 bg-[#fafaf9] overflow-hidden">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Image Media with offset luxury borders (Shows first on mobile) -->
            <div class="lg:col-span-5 order-last lg:order-first relative group px-4 lg:px-0">
                <!-- Dotted Grid Background -->
                <div class="absolute -top-4 -right-4 lg:-left-4 lg:right-auto w-24 h-24 luxury-pattern opacity-40 z-0"></div>
                <!-- Offset outline frame border -->
                <div class="absolute -bottom-3 -left-3 lg:-right-3 lg:left-auto w-full h-full border border-brand-accent/30 rounded-sm z-0 group-hover:-translate-x-1 lg:group-hover:translate-x-1 group-hover:translate-y-1 transition-transform duration-500"></div>
                
                <div class="relative overflow-hidden border border-gray-100 shadow-2xl rounded-sm z-10 bg-white aspect-[3/2]">
                    <img src="/universalgranite/assets/images/our-vision.png" alt="Our Vision - Universal Granite" class="w-full h-full object-cover hover:scale-[1.03] transition-transform duration-700">
                </div>
            </div>

            <!-- Text Content -->
            <div class="lg:col-span-7 space-y-8">
                <div class="flex items-center space-x-3">
                    <span class="inline-block px-3 py-1 bg-brand-light text-brand-accent font-display font-semibold tracking-widest uppercase text-[10px] rounded-full">02 / Future</span>
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold text-brand-dark leading-tight tracking-tight">
                    Our Vision
                </h2>
                <div class="space-y-6 text-brand-gray font-sans text-sm sm:text-base leading-relaxed">
                    <p class="font-medium text-brand-dark text-lg sm:text-xl border-l-4 border-brand-accent pl-4 italic">
                        “Our vision is to be a globally respected and recommended natural stone product supplier renowned for premier quality products manufactured in keeping with industry best practices, by a team of committed and qualified professionals, and offering unique and inspiring consumer experiences.”
                    </p>
                    <p>
                        We strive to sustain this vision by nurturing a team of highly committed and qualified professionals who consistently engineer unique, luxurious, and deeply inspiring experiences for our private and commercial clientele alike.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Section 3: Our Mission (Image Right, Text Left) -->
<section class="py-24 lg:py-32 bg-white overflow-hidden">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Text Content -->
            <div class="lg:col-span-7 space-y-8">
                <div class="flex items-center space-x-3">
                    <span class="inline-block px-3 py-1 bg-brand-light text-brand-accent font-display font-semibold tracking-widest uppercase text-[10px] rounded-full">03 / Purpose</span>
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold text-brand-dark leading-tight tracking-tight">
                    Our Mission
                </h2>
                <div class="space-y-6 text-brand-gray font-sans text-sm sm:text-base leading-relaxed">
                    <p class="text-brand-dark font-medium text-lg sm:text-xl">
                        We are committed to provide high quality stone products sourced from the best in the world at the most reasonable price together with world class customer service.
                    </p>
                    <p>
                        In achieving this, we strive to maintain and benchmark highest industry systems and processes, whilst consistently <span class="font-semibold text-brand-dark">creating value for our customers</span>, employees, investors and shareholders on the basis of trust, responsibility, transparency, respect and teamwork.
                    </p>
                </div>
            </div>

            <!-- Image Media with offset luxury borders -->
            <div class="lg:col-span-5 relative group px-4 lg:px-0">
                <!-- Dotted Grid Background -->
                <div class="absolute -top-4 -left-4 w-24 h-24 luxury-pattern opacity-40 z-0"></div>
                <!-- Offset outline frame border -->
                <div class="absolute -bottom-3 -right-3 w-full h-full border border-brand-accent/30 rounded-sm z-0 group-hover:translate-x-1 group-hover:translate-y-1 transition-transform duration-500"></div>
                
                <div class="relative overflow-hidden border border-gray-100 shadow-2xl rounded-sm z-10 bg-white aspect-[3/2]">
                    <img src="/universalgranite/assets/images/our%20mission.png" alt="Our Mission - Universal Granite" class="w-full h-full object-cover hover:scale-[1.03] transition-transform duration-700">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Values Section (Textured Dark Background, Left Image, Right Accordions) -->
<section class="py-24 lg:py-32 bg-brand-dark text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_left,_var(--tw-gradient-stops))] from-neutral-800 via-brand-dark to-black opacity-95 z-0"></div>
    
    <div class="container-custom relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-20 space-y-4">
            <span class="text-brand-accent-light font-display font-semibold tracking-widest uppercase text-xs sm:text-sm">Core Values</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold text-white uppercase tracking-wide">
                What Guides Us
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Left Side: Circular styled Values Graphic with gold outer track -->
            <div class="lg:col-span-5 flex justify-center">
                <div class="relative w-72 h-72 sm:w-96 sm:h-96 rounded-full overflow-hidden border border-brand-accent-light/40 shadow-2xl p-3 bg-neutral-900/60 backdrop-blur-md group">
                    <!-- Subtle spinning border overlay -->
                    <div class="absolute inset-0 border border-dashed border-brand-accent-light/20 rounded-full scale-95 group-hover:rotate-45 transition-transform duration-1000"></div>
                    <img src="/universalgranite/assets/images/values.png" alt="Our Values - Universal Granite" class="w-full h-full object-cover rounded-full hover:scale-[1.03] transition-transform duration-700">
                </div>
            </div>

            <!-- Right Side: Accordion UI powered by Alpine.js -->
            <div class="lg:col-span-7">
                <div x-data="{ active: 1 }" class="space-y-4">
                    
                    <!-- Respect Accordion -->
                    <div class="border border-neutral-800/80 rounded-lg overflow-hidden transition-all duration-300 bg-neutral-900/40 backdrop-blur-md" 
                         :class="active === 1 ? 'border-brand-accent-light/50 shadow-lg shadow-brand-accent-light/5 bg-neutral-900/60' : 'hover:border-neutral-700'">
                        <button @click="active = active === 1 ? null : 1" class="w-full flex items-center justify-between p-5 text-left focus:outline-none group">
                            <div class="flex items-center space-x-4">
                                <span class="p-2.5 rounded-md bg-neutral-800/80 text-brand-accent-light transition-colors group-hover:bg-brand-accent-light group-hover:text-white duration-300">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                                <span class="font-display font-medium text-base sm:text-lg text-white group-hover:text-brand-accent-light transition-colors duration-300">Respect</span>
                            </div>
                            <span class="text-neutral-500 group-hover:text-brand-accent-light transition-colors duration-300">
                                <svg class="w-5 h-5 transform transition-transform duration-300" :class="active === 1 ? 'rotate-180 text-brand-accent-light' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </button>
                        <div x-show="active === 1" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" class="p-5 pt-0 text-gray-400 font-sans leading-relaxed text-sm border-t border-neutral-800/40">
                            Earn the respect of all stakeholders including customers, suppliers, and staff through processes, products and services that are never quality compromised.
                        </div>
                    </div>

                    <!-- Trust Accordion -->
                    <div class="border border-neutral-800/80 rounded-lg overflow-hidden transition-all duration-300 bg-neutral-900/40 backdrop-blur-md" 
                         :class="active === 2 ? 'border-brand-accent-light/50 shadow-lg shadow-brand-accent-light/5 bg-neutral-900/60' : 'hover:border-neutral-700'">
                        <button @click="active = active === 2 ? null : 2" class="w-full flex items-center justify-between p-5 text-left focus:outline-none group">
                            <div class="flex items-center space-x-4">
                                <span class="p-2.5 rounded-md bg-neutral-800/80 text-brand-accent-light transition-colors group-hover:bg-brand-accent-light group-hover:text-white duration-300">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </span>
                                <span class="font-display font-medium text-base sm:text-lg text-white group-hover:text-brand-accent-light transition-colors duration-300">Trust</span>
                            </div>
                            <span class="text-neutral-500 group-hover:text-brand-accent-light transition-colors duration-300">
                                <svg class="w-5 h-5 transform transition-transform duration-300" :class="active === 2 ? 'rotate-180 text-brand-accent-light' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </button>
                        <div x-show="active === 2" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" class="p-5 pt-0 text-gray-400 font-sans leading-relaxed text-sm border-t border-neutral-800/40">
                            We understand that our stakeholders place their trust in us and would always strive to honor their trust through unparalleled quality.
                        </div>
                    </div>

                    <!-- Responsibility Accordion -->
                    <div class="border border-neutral-800/80 rounded-lg overflow-hidden transition-all duration-300 bg-neutral-900/40 backdrop-blur-md" 
                         :class="active === 3 ? 'border-brand-accent-light/50 shadow-lg shadow-brand-accent-light/5 bg-neutral-900/60' : 'hover:border-neutral-700'">
                        <button @click="active = active === 3 ? null : 3" class="w-full flex items-center justify-between p-5 text-left focus:outline-none group">
                            <div class="flex items-center space-x-4">
                                <span class="p-2.5 rounded-md bg-neutral-800/80 text-brand-accent-light transition-colors group-hover:bg-brand-accent-light group-hover:text-white duration-300">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                    </svg>
                                </span>
                                <span class="font-display font-medium text-base sm:text-lg text-white group-hover:text-brand-accent-light transition-colors duration-300">Responsibility</span>
                            </div>
                            <span class="text-neutral-500 group-hover:text-brand-accent-light transition-colors duration-300">
                                <svg class="w-5 h-5 transform transition-transform duration-300" :class="active === 3 ? 'rotate-180 text-brand-accent-light' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </button>
                        <div x-show="active === 3" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" class="p-5 pt-0 text-gray-400 font-sans leading-relaxed text-sm border-t border-neutral-800/40">
                            We take complete responsibility for all products that are manufactured by Universal Marble & Granite which is why we take extra care to source the best natural stones from the world's top grade suppliers.
                        </div>
                    </div>

                    <!-- Reliability Accordion -->
                    <div class="border border-neutral-800/80 rounded-lg overflow-hidden transition-all duration-300 bg-neutral-900/40 backdrop-blur-md" 
                         :class="active === 4 ? 'border-brand-accent-light/50 shadow-lg shadow-brand-accent-light/5 bg-neutral-900/60' : 'hover:border-neutral-700'">
                        <button @click="active = active === 4 ? null : 4" class="w-full flex items-center justify-between p-5 text-left focus:outline-none group">
                            <div class="flex items-center space-x-4">
                                <span class="p-2.5 rounded-md bg-neutral-800/80 text-brand-accent-light transition-colors group-hover:bg-brand-accent-light group-hover:text-white duration-300">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                                <span class="font-display font-medium text-base sm:text-lg text-white group-hover:text-brand-accent-light transition-colors duration-300">Reliability</span>
                            </div>
                            <span class="text-neutral-500 group-hover:text-brand-accent-light transition-colors duration-300">
                                <svg class="w-5 h-5 transform transition-transform duration-300" :class="active === 4 ? 'rotate-180 text-brand-accent-light' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </button>
                        <div x-show="active === 4" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" class="p-5 pt-0 text-gray-400 font-sans leading-relaxed text-sm border-t border-neutral-800/40">
                            We are a reliable supplier of natural stones who value the customer's confidence in the authenticity of our products at all times.
                        </div>
                    </div>

                    <!-- Transparency Accordion -->
                    <div class="border border-neutral-800/80 rounded-lg overflow-hidden transition-all duration-300 bg-neutral-900/40 backdrop-blur-md" 
                         :class="active === 5 ? 'border-brand-accent-light/50 shadow-lg shadow-brand-accent-light/5 bg-neutral-900/60' : 'hover:border-neutral-700'">
                        <button @click="active = active === 5 ? null : 5" class="w-full flex items-center justify-between p-5 text-left focus:outline-none group">
                            <div class="flex items-center space-x-4">
                                <span class="p-2.5 rounded-md bg-neutral-800/80 text-brand-accent-light transition-colors group-hover:bg-brand-accent-light group-hover:text-white duration-300">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </span>
                                <span class="font-display font-medium text-base sm:text-lg text-white group-hover:text-brand-accent-light transition-colors duration-300">Transparency</span>
                            </div>
                            <span class="text-neutral-500 group-hover:text-brand-accent-light transition-colors duration-300">
                                <svg class="w-5 h-5 transform transition-transform duration-300" :class="active === 5 ? 'rotate-180 text-brand-accent-light' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </button>
                        <div x-show="active === 5" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" class="p-5 pt-0 text-gray-400 font-sans leading-relaxed text-sm border-t border-neutral-800/40">
                            We maintain transparency in our processes, our sources, as well as our stone techniques.
                        </div>
                    </div>

                    <!-- Team work Accordion -->
                    <div class="border border-neutral-800/80 rounded-lg overflow-hidden transition-all duration-300 bg-neutral-900/40 backdrop-blur-md" 
                         :class="active === 6 ? 'border-brand-accent-light/50 shadow-lg shadow-brand-accent-light/5 bg-neutral-900/60' : 'hover:border-neutral-700'">
                        <button @click="active = active === 6 ? null : 6" class="w-full flex items-center justify-between p-5 text-left focus:outline-none group">
                            <div class="flex items-center space-x-4">
                                <span class="p-2.5 rounded-md bg-neutral-800/80 text-brand-accent-light transition-colors group-hover:bg-brand-accent-light group-hover:text-white duration-300">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </span>
                                <span class="font-display font-medium text-base sm:text-lg text-white group-hover:text-brand-accent-light transition-colors duration-300">Team work</span>
                            </div>
                            <span class="text-neutral-500 group-hover:text-brand-accent-light transition-colors duration-300">
                                <svg class="w-5 h-5 transform transition-transform duration-300" :class="active === 6 ? 'rotate-180 text-brand-accent-light' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </button>
                        <div x-show="active === 6" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" class="p-5 pt-0 text-gray-400 font-sans leading-relaxed text-sm border-t border-neutral-800/40">
                            We believe in the power of working as a team to achieve our vision and in providing best quality service and products to our clients. Our team is our most valuable resource.
                        </div>
                    </div>

                    <!-- Win win solutions Accordion -->
                    <div class="border border-neutral-800/80 rounded-lg overflow-hidden transition-all duration-300 bg-neutral-900/40 backdrop-blur-md" 
                         :class="active === 7 ? 'border-brand-accent-light/50 shadow-lg shadow-brand-accent-light/5 bg-neutral-900/60' : 'hover:border-neutral-700'">
                        <button @click="active = active === 7 ? null : 7" class="w-full flex items-center justify-between p-5 text-left focus:outline-none group">
                            <div class="flex items-center space-x-4">
                                <span class="p-2.5 rounded-md bg-neutral-800/80 text-brand-accent-light transition-colors group-hover:bg-brand-accent-light group-hover:text-white duration-300">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4m-4-4l4-4" />
                                    </svg>
                                </span>
                                <span class="font-display font-medium text-base sm:text-lg text-white group-hover:text-brand-accent-light transition-colors duration-300">Win win solutions</span>
                            </div>
                            <span class="text-neutral-500 group-hover:text-brand-accent-light transition-colors duration-300">
                                <svg class="w-5 h-5 transform transition-transform duration-300" :class="active === 7 ? 'rotate-180 text-brand-accent-light' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </button>
                        <div x-show="active === 7" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" class="p-5 pt-0 text-gray-400 font-sans leading-relaxed text-sm border-t border-neutral-800/40">
                            We strive towards win-win solutions that satisfy our clients and help achieve our corporate objectives, as a means of ensuring long term relationships with our clientele.
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Our Strengths Section (Clean responsive cards layout with sliding top gold bars & Right vertical asset) -->
<section class="py-24 lg:py-32 bg-[#fafaf9] overflow-hidden">
    <div class="container-custom">
        
        <div class="text-center max-w-3xl mx-auto mb-20 space-y-4">
            <span class="text-brand-accent font-display font-semibold tracking-widest uppercase text-xs sm:text-sm">Why Choose Us</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold text-brand-dark uppercase tracking-wide">
                Our Strengths
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Left Side: Interactive responsive grid of 6 cards with premium hover effect -->
            <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-6">
                
                <!-- Strength 1 -->
                <div class="group p-6 bg-white border border-gray-200/60 rounded-lg hover:border-brand-accent hover:shadow-2xl hover:shadow-brand-accent/5 hover:-translate-y-1.5 transition-all duration-500 relative overflow-hidden">
                    <!-- Sliding Gold Top Accent -->
                    <div class="absolute top-0 left-0 w-full h-[3px] bg-brand-accent transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500"></div>
                    <div class="w-12 h-12 rounded-lg bg-brand-light flex items-center justify-center text-brand-accent group-hover:bg-brand-accent group-hover:text-white transition-all duration-500 mb-5 shadow-sm">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                    </div>
                    <h3 class="font-display font-bold text-base sm:text-lg text-brand-dark mb-2 group-hover:text-brand-accent transition-colors duration-300">
                        Unmatched Selection
                    </h3>
                    <p class="text-xs sm:text-sm text-brand-gray leading-relaxed font-sans">
                        Large variety, colour and texture of granites and marbles sourced globally.
                    </p>
                </div>

                <!-- Strength 2 -->
                <div class="group p-6 bg-white border border-gray-200/60 rounded-lg hover:border-brand-accent hover:shadow-2xl hover:shadow-brand-accent/5 hover:-translate-y-1.5 transition-all duration-500 relative overflow-hidden">
                    <!-- Sliding Gold Top Accent -->
                    <div class="absolute top-0 left-0 w-full h-[3px] bg-brand-accent transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500"></div>
                    <div class="w-12 h-12 rounded-lg bg-brand-light flex items-center justify-center text-brand-accent group-hover:bg-brand-accent group-hover:text-white transition-all duration-500 mb-5 shadow-sm">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="font-display font-bold text-base sm:text-lg text-brand-dark mb-2 group-hover:text-brand-accent transition-colors duration-300">
                        Year-Round Supply
                    </h3>
                    <p class="text-xs sm:text-sm text-brand-gray leading-relaxed font-sans">
                        Consistent availability and year-round stock of world-class natural stones.
                    </p>
                </div>

                <!-- Strength 3 -->
                <div class="group p-6 bg-white border border-gray-200/60 rounded-lg hover:border-brand-accent hover:shadow-2xl hover:shadow-brand-accent/5 hover:-translate-y-1.5 transition-all duration-500 relative overflow-hidden">
                    <!-- Sliding Gold Top Accent -->
                    <div class="absolute top-0 left-0 w-full h-[3px] bg-brand-accent transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500"></div>
                    <div class="w-12 h-12 rounded-lg bg-brand-light flex items-center justify-center text-brand-accent group-hover:bg-brand-accent group-hover:text-white transition-all duration-500 mb-5 shadow-sm">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.121 14.121L19 19m-7-7l7-7-7 7-7-7 7 7zM9 11a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="font-display font-bold text-base sm:text-lg text-brand-dark mb-2 group-hover:text-brand-accent transition-colors duration-300">
                        Master Craftsmen
                    </h3>
                    <p class="text-xs sm:text-sm text-brand-gray leading-relaxed font-sans">
                        Highly skilled natural stone craftsmen executing precise cuts and edge profiles.
                    </p>
                </div>

                <!-- Strength 4 -->
                <div class="group p-6 bg-white border border-gray-200/60 rounded-lg hover:border-brand-accent hover:shadow-2xl hover:shadow-brand-accent/5 hover:-translate-y-1.5 transition-all duration-500 relative overflow-hidden">
                    <!-- Sliding Gold Top Accent -->
                    <div class="absolute top-0 left-0 w-full h-[3px] bg-brand-accent transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500"></div>
                    <div class="w-12 h-12 rounded-lg bg-brand-light flex items-center justify-center text-brand-accent group-hover:bg-brand-accent group-hover:text-white transition-all duration-500 mb-5 shadow-sm">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <h3 class="font-display font-bold text-base sm:text-lg text-brand-dark mb-2 group-hover:text-brand-accent transition-colors duration-300">
                        Guaranteed Quality
                    </h3>
                    <p class="text-xs sm:text-sm text-brand-gray leading-relaxed font-sans">
                        Guaranteed highest quality products through strict standard checks and sourcing.
                    </p>
                </div>

                <!-- Strength 5 -->
                <div class="group p-6 bg-white border border-gray-200/60 rounded-lg hover:border-brand-accent hover:shadow-2xl hover:shadow-brand-accent/5 hover:-translate-y-1.5 transition-all duration-500 relative overflow-hidden">
                    <!-- Sliding Gold Top Accent -->
                    <div class="absolute top-0 left-0 w-full h-[3px] bg-brand-accent transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500"></div>
                    <div class="w-12 h-12 rounded-lg bg-brand-light flex items-center justify-center text-brand-accent group-hover:bg-brand-accent group-hover:text-white transition-all duration-500 mb-5 shadow-sm">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="font-display font-bold text-base sm:text-lg text-brand-dark mb-2 group-hover:text-brand-accent transition-colors duration-300">
                        Direct Factory Sourcing
                    </h3>
                    <p class="text-xs sm:text-sm text-brand-gray leading-relaxed font-sans">
                        Own high-tech factory equipped for customizable sizes and prompt production.
                    </p>
                </div>

                <!-- Strength 6 -->
                <div class="group p-6 bg-white border border-gray-200/60 rounded-lg hover:border-brand-accent hover:shadow-2xl hover:shadow-brand-accent/5 hover:-translate-y-1.5 transition-all duration-500 relative overflow-hidden">
                    <!-- Sliding Gold Top Accent -->
                    <div class="absolute top-0 left-0 w-full h-[3px] bg-brand-accent transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500"></div>
                    <div class="w-12 h-12 rounded-lg bg-brand-light flex items-center justify-center text-brand-accent group-hover:bg-brand-accent group-hover:text-white transition-all duration-500 mb-5 shadow-sm">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 009 11.57V3m12 7a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="font-display font-bold text-base sm:text-lg text-brand-dark mb-2 group-hover:text-brand-accent transition-colors duration-300">
                        Decade of Trust
                    </h3>
                    <p class="text-xs sm:text-sm text-brand-gray leading-relaxed font-sans">
                        Years of solid industry experience handling top state and commercial projects.
                    </p>
                </div>

            </div>

            <!-- Right Side: Clean vertical strength imagery with offset luxury borders -->
            <div class="lg:col-span-5 relative group px-4 lg:px-0">
                <!-- Dotted Grid Background -->
                <div class="absolute -top-4 -right-4 w-24 h-24 luxury-pattern opacity-40 z-0"></div>
                <!-- Offset outline frame border -->
                <div class="absolute -bottom-3 -left-3 w-full h-full border border-brand-accent/30 rounded-sm z-0 group-hover:-translate-x-1 group-hover:translate-y-1 transition-transform duration-500"></div>
                
                <div class="relative overflow-hidden border border-gray-200/60 shadow-2xl rounded-sm z-10 bg-white aspect-[4/5]">
                    <img src="/universalgranite/assets/images/our-strengths.png" alt="Our Strengths - Universal Granite" class="w-full h-full object-cover hover:scale-[1.03] transition-transform duration-700">
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Call to Action Section -->
<section class="py-24 bg-brand-dark text-center relative overflow-hidden px-4">
    <!-- Sophisticated diagonal accent glow -->
    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-tr from-brand-dark via-neutral-900 to-black opacity-90 z-0"></div>
    
    <div class="relative z-10 max-w-3xl mx-auto space-y-8 animate-fade-in">
        <span class="text-brand-accent-light font-display font-semibold tracking-widest uppercase text-xs sm:text-sm">Get in Touch</span>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold text-white uppercase tracking-wider">
            Experience the Luxury Firsthand
        </h2>
        <p class="text-gray-400 font-sans max-w-xl mx-auto text-sm sm:text-base leading-relaxed">
            Visit our showrooms across Nawala, Nugegoda, Wattala, and Jaffna to witness the unmatched brilliance of our raw slabs and tile options.
        </p>
        <div class="pt-4">
            <a href="/universalgranite/pages/contact.php" class="btn-primary">
                Contact Our Experts
            </a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
