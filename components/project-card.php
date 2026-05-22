<?php
// Project Card Component
// Expects: $image, $title, $description, $delay
// Optional: $year (string), $tags (array of strings)
$year = isset($year) ? $year : null;
$tags = isset($tags) ? $tags : [];
?>
<div class="group relative overflow-hidden bg-white shadow-md hover:shadow-2xl hover:-translate-y-1 transition-all duration-500 rounded-lg border border-gray-200/60 flex flex-col h-full">
    <!-- Sliding accent top border -->
    <div class="absolute top-0 left-0 w-full h-[4px] bg-brand-accent transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 z-20"></div>
    
    <div class="aspect-[4/3] overflow-hidden w-full relative">
        <img src="<?= htmlspecialchars($image) ?>" alt="<?= htmlspecialchars($title) ?>" loading="lazy" class="w-full h-full object-cover transform group-hover:scale-[1.03] transition-transform duration-700">
        <div class="absolute inset-0 bg-brand-dark/0 group-hover:bg-brand-dark/5 transition-colors duration-700 z-10 mix-blend-overlay"></div>
    </div>
    
    <div class="p-6 md:p-8 flex flex-col flex-grow">
        <?php if ($year || !empty($tags)): ?>
        <div class="flex items-center gap-3 mb-3">
            <?php if ($year): ?>
            <span class="text-brand-accent text-xs font-bold uppercase tracking-widest"><?= htmlspecialchars($year) ?></span>
            <?php endif; ?>
            <?php if ($year && !empty($tags)): ?>
            <span class="w-6 h-px bg-brand-accent/30"></span>
            <?php endif; ?>
            <?php foreach ($tags as $tag): ?>
            <span class="text-brand-gray text-xs uppercase tracking-wider font-semibold"><?= htmlspecialchars($tag) ?></span>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        
        <h3 class="text-xl font-display font-bold text-brand-dark mb-3 group-hover:text-brand-accent transition-colors duration-300 leading-snug"><?= htmlspecialchars($title) ?></h3>
        
        <?php if ($description): ?>
        <p class="text-brand-gray text-sm font-sans leading-relaxed line-clamp-3 mb-0"><?= htmlspecialchars($description) ?></p>
        <?php endif; ?>
    </div>
</div>
