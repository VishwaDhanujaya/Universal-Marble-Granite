<?php
$pageTitle = 'Our Products';
include '../includes/header.php';

// Finalized Granite & Marble Product Catalog
$products = [
    // Marble Tiles (9 items)
    ['name' => 'Dark Emperador', 'category' => 'Marble', 'description' => '', 'image' => '/universalgranite/assets/images/products/marble/dark-emperador.jpg'],
    ['name' => 'Makarana White', 'category' => 'Marble', 'description' => '', 'image' => '/universalgranite/assets/images/products/marble/makarana-white.jpg'],
    ['name' => 'Minagrex Marble', 'category' => 'Marble', 'description' => '', 'image' => '/universalgranite/assets/images/products/marble/minagrex-marble.jpg'],
    ['name' => 'Dark Emprado', 'category' => 'Marble', 'description' => '', 'image' => '/universalgranite/assets/images/products/marble/dark-emprado.jpg'],
    ['name' => 'Trani Fiorito', 'category' => 'Marble', 'description' => '', 'image' => '/universalgranite/assets/images/products/marble/trani-fiorito.jpg'],
    ['name' => 'Brechm Marble', 'category' => 'Marble', 'description' => '', 'image' => '/universalgranite/assets/images/products/marble/brechm-marble.jpg'],
    ['name' => 'Sannita', 'category' => 'Marble', 'description' => '', 'image' => '/universalgranite/assets/images/products/marble/sannita.jpg'],
    ['name' => 'Alaska Red', 'category' => 'Marble', 'description' => '', 'image' => '/universalgranite/assets/images/products/marble/alaska-red.jpg'],
    ['name' => 'Alaska White', 'category' => 'Marble', 'description' => '', 'image' => '/universalgranite/assets/images/products/marble/alaska-white.jpg'],

    // Granite Tiles (33 items)
    ['name' => 'Sand Stone', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/sand-stone.jpg'],
    ['name' => 'Light Emperador', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/light-emperador.jpg'],
    ['name' => 'Black Pearl', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/black-pearl.jpg'],
    ['name' => 'Multi Beige', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/multi-beige.jpg'],
    ['name' => 'G-20 Black', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/g-20-black.jpg'],
    ['name' => 'Madana Palli White', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/madana-pali-white.jpg'],
    ['name' => 'Andromedia White', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/andromedia-white.jpg'],
    ['name' => 'Madura Ivory', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/madura-ivory.jpg'],
    ['name' => 'Lavender Blue', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/lavender-blue.jpg'],
    ['name' => 'Sofia Beige', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/sofia-beige.jpg'],
    ['name' => 'Prexious', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/prexious.jpg'],
    ['name' => 'Brecia Aurora', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/brecia-aurora.jpg'],
    ['name' => 'Black Fantasy', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/black-fantasy.jpg'],
    ['name' => 'Bash Paradeso', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/bash-paradeso.jpg'],
    ['name' => 'Myra Beige', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/myra-beige.jpg'],
    ['name' => 'Rosy Pink', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/rosy-pink.jpg'],
    ['name' => 'P.White', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/p.white.jpg'],
    ['name' => 'English Tike', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/english-tike.jpg'],
    ['name' => 'Indian Juprana', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/indian-juprana.jpg'],
    ['name' => 'Brown Pearl', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/brown-pearl.jpg'],
    ['name' => 'Flamed Granite', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/flamed-granite.jpg'],
    ['name' => 'Colombo Jubarna', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/colombo-jubarna.jpg'],
    ['name' => 'Black Galaxy', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/black-galaxy.jpg'],
    ['name' => 'Absolute Black', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/absolute-black.jpg'],
    ['name' => 'Steel Grey', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/steel-grey.jpg'],
    ['name' => 'Tan Brown', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/tan-brown.jpg'],
    ['name' => 'Wiscon White', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/wiscon-white.jpg'],
    ['name' => 'Kuppam Green', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/kuppam-green.jpg'],
    ['name' => 'Rajasthan White', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/rajasthan-white.jpg'],
    ['name' => 'Red Multi', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/red-multi.jpg'],
    ['name' => 'Ruby Red', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/ruby-red.jpg'],
    ['name' => 'Siva Gold', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/siva-gold.jpg'],
    ['name' => 'Paradiso', 'category' => 'Granite', 'description' => '', 'image' => '/universalgranite/assets/images/products/granite/paradiso.jpg'],
];

// Prepend dynamic base path to all product images
foreach ($products as &$product) {
    $product['image'] = $base_path . str_replace('/universalgranite', '', $product['image']);
}
unset($product);

// Separate products in PHP to count them on the filter tabs
$graniteProducts = array_filter($products, function($p) {
    return $p['category'] === 'Granite';
});
$marbleProducts = array_filter($products, function($p) {
    return $p['category'] === 'Marble';
});
?>

<!-- Page Header -->
<section class="relative pt-28 pb-16 lg:pt-36 lg:pb-20 bg-brand-dark overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-neutral-900 via-brand-dark to-black opacity-95 z-0"></div>
    <div class="container-custom relative z-10 text-center space-y-4">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-white uppercase tracking-wider animate-slide-up">
            Our Collection
        </h1>
        <p class="text-gray-400 font-sans max-w-2xl mx-auto text-sm md:text-base leading-relaxed tracking-wide opacity-90">
            Explore our extensive range of premium granite and marble sourced from the best quarries around the world.
        </p>
    </div>
</section>

<!-- Product Catalog Section (Alpine.js Filter & Pagination) -->
<section class="py-16 bg-brand-light" x-data="{
    products: <?= htmlspecialchars(json_encode(array_values($products)), ENT_QUOTES, 'UTF-8') ?>,
    filter: 'All',
    currentPage: 1,
    itemsPerPage: 12,
    get filteredProducts() {
        if (this.filter === 'All') return this.products;
        return this.products.filter(p => p.category === this.filter);
    },
    get paginatedProducts() {
        const start = (this.currentPage - 1) * this.itemsPerPage;
        const end = start + this.itemsPerPage;
        return this.filteredProducts.slice(start, end);
    },
    get totalPages() {
        return Math.ceil(this.filteredProducts.length / this.itemsPerPage);
    },
    setFilter(val) {
        this.filter = val;
        this.currentPage = 1;
    }
}">
    <div class="container-custom">
        <!-- Category Filter Tabs Wrapper (Sticky on Scroll) -->
        <div class="sticky top-[72px] z-30 bg-brand-light/95 backdrop-blur-md py-4 mb-12 -mx-4 px-4 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8 border-b border-gray-200/30 transition-all duration-300 relative w-full">
            <!-- Fade masks for mobile horizontal scroll scrollbar-less indicator -->
            <div class="absolute left-0 top-4 bottom-4 w-12 bg-gradient-to-r from-brand-light to-transparent z-10 pointer-events-none md:hidden"></div>
            <div class="absolute right-0 top-4 bottom-4 w-12 bg-gradient-to-l from-brand-light to-transparent z-10 pointer-events-none md:hidden"></div>
            
            <div class="flex overflow-x-auto no-scrollbar justify-start md:justify-center items-center gap-4 pb-2 md:pb-0 px-4 md:px-0 snap-x snap-mandatory scroll-smooth scroll-px-4">
                <button @click="setFilter('All'); $el.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' })" 
                        :class="filter === 'All' ? 'bg-brand-accent text-white border-brand-accent shadow-md ring-2 ring-brand-accent-light/20' : 'bg-white text-brand-dark border-gray-200 hover:border-brand-accent hover:text-brand-accent'"
                        class="shrink-0 snap-start px-8 py-3 border rounded-full font-semibold uppercase tracking-wider text-xs transition-all duration-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-brand-accent-light/40">
                    All (<?= count($products) ?>)
                </button>
                <button @click="setFilter('Granite'); $el.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' })" 
                        :class="filter === 'Granite' ? 'bg-brand-accent text-white border-brand-accent shadow-md ring-2 ring-brand-accent-light/20' : 'bg-white text-brand-dark border-gray-200 hover:border-brand-accent hover:text-brand-accent'"
                        class="shrink-0 snap-start px-8 py-3 border rounded-full font-semibold uppercase tracking-wider text-xs transition-all duration-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-brand-accent-light/40">
                    Granite (<?= count($graniteProducts) ?>)
                </button>
                <button @click="setFilter('Marble'); $el.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' })" 
                        :class="filter === 'Marble' ? 'bg-brand-accent text-white border-brand-accent shadow-md ring-2 ring-brand-accent-light/20' : 'bg-white text-brand-dark border-gray-200 hover:border-brand-accent hover:text-brand-accent'"
                        class="shrink-0 snap-start px-8 py-3 border rounded-full font-semibold uppercase tracking-wider text-xs transition-all duration-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-brand-accent-light/40">
                    Marble (<?= count($marbleProducts) ?>)
                </button>
            </div>
        </div>

        <!-- 4-Column Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 min-h-[400px]">
            <template x-for="prod in paginatedProducts" :key="prod.name">
                <div class="w-full"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95">
                    <div class="group relative overflow-hidden bg-white shadow-md hover:shadow-2xl hover:-translate-y-1 transition-all duration-500 rounded-lg border border-gray-200/60 flex flex-col h-full">
                        <!-- Sliding accent top border -->
                        <div class="absolute top-0 left-0 w-full h-[4px] bg-brand-accent transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 z-20"></div>
                        
                        <div class="overflow-hidden aspect-square w-full bg-neutral-50 relative">
                            <img :src="prod.image" :alt="prod.name" loading="lazy" class="w-full h-full object-cover transform group-hover:scale-[1.03] transition-transform duration-700">
                            <div class="absolute inset-0 bg-brand-dark/0 group-hover:bg-brand-dark/5 transition-colors duration-700 z-10 mix-blend-overlay"></div>
                        </div>
                        <div class="p-5 flex flex-col flex-grow justify-center text-center">
                            <span class="text-[10px] font-bold text-brand-accent uppercase tracking-widest mb-2 block" x-text="prod.category"></span>
                            <h3 class="text-base font-display font-semibold text-brand-dark group-hover:text-brand-accent transition-colors duration-300 leading-snug" x-text="prod.name"></h3>
                        </div>
                    </div>
                </div>
            </template>
        </div>

        <!-- Pagination Controls -->
        <div x-show="totalPages > 1" class="flex justify-center items-center gap-2 mt-16">
            <!-- Prev Button -->
            <button @click="currentPage > 1 ? currentPage-- : null; window.scrollTo({top: 400, behavior: 'smooth'});"
                    :disabled="currentPage === 1"
                    :class="currentPage === 1 ? 'opacity-40 cursor-not-allowed text-gray-400 bg-gray-100 border-gray-200' : 'bg-white text-brand-dark border-gray-200 hover:bg-brand-accent hover:text-white hover:border-brand-accent hover:shadow-md hover:ring-2 hover:ring-brand-accent-light/30'"
                    class="px-5 py-2.5 border rounded-md font-semibold uppercase tracking-wider text-xs transition-all duration-300 flex items-center gap-1.5 focus:outline-none focus:ring-2 focus:ring-brand-accent-light/40">
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                Prev
            </button>
            
            <!-- Page Numbers -->
            <div class="flex items-center gap-2">
                <template x-for="p in totalPages" :key="p">
                    <button @click="currentPage = p; window.scrollTo({top: 400, behavior: 'smooth'});"
                            :class="currentPage === p ? 'bg-brand-accent text-white border-brand-accent shadow-md ring-2 ring-brand-accent-light/30' : 'bg-white text-brand-dark border-gray-200 hover:border-brand-accent hover:text-white hover:border-brand-accent hover:shadow-md'"
                            class="w-10 h-10 border rounded-md font-semibold text-xs transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-brand-accent-light/40"
                            x-text="p">
                    </button>
                </template>
            </div>
            
            <!-- Next Button -->
            <button @click="currentPage < totalPages ? currentPage++ : null; window.scrollTo({top: 400, behavior: 'smooth'});"
                    :disabled="currentPage === totalPages"
                    :class="currentPage === totalPages ? 'opacity-40 cursor-not-allowed text-gray-400 bg-gray-100 border-gray-200' : 'bg-white text-brand-dark border-gray-200 hover:bg-brand-accent hover:text-white hover:border-brand-accent hover:shadow-md hover:ring-2 hover:ring-brand-accent-light/30'"
                    class="px-5 py-2.5 border rounded-md font-semibold uppercase tracking-wider text-xs transition-all duration-300 flex items-center gap-1.5 focus:outline-none focus:ring-2 focus:ring-brand-accent-light/40">
                Next
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
