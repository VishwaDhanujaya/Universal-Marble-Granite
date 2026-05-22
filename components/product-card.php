<?php
// Product Card Component
// Expects: $image, $name, $category, $description
?>
<div class="group relative overflow-hidden bg-white shadow-md hover:shadow-2xl hover:-translate-y-1 transition-all duration-500 rounded-lg border border-gray-200/60 flex flex-col h-full">
    <!-- Sliding accent top border -->
    <div class="absolute top-0 left-0 w-full h-[4px] bg-brand-accent transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 z-20"></div>
    
    <div class="overflow-hidden aspect-square w-full bg-neutral-50 relative">
        <img src="<?= htmlspecialchars($image) ?>" alt="<?= htmlspecialchars($name) ?>" loading="lazy" class="w-full h-full object-cover transform group-hover:scale-[1.03] transition-transform duration-700">
        <div class="absolute inset-0 bg-brand-dark/0 group-hover:bg-brand-dark/5 transition-colors duration-700 z-10 mix-blend-overlay"></div>
    </div>
    <div class="p-5 flex flex-col flex-grow justify-center text-center">
        <span class="text-[10px] font-bold text-brand-accent uppercase tracking-widest mb-2 block"><?= htmlspecialchars($category) ?></span>
        <h3 class="text-base font-display font-semibold text-brand-dark group-hover:text-brand-accent transition-colors duration-300 leading-snug"><?= htmlspecialchars($name) ?></h3>
    </div>
</div>
