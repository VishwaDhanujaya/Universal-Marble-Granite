<?php
// Project Card Component
// Expects: $image, $title, $description, $delay
// Optional: $year (string), $tags (array of strings)
$year = isset($year) ? $year : null;
$tags = isset($tags) ? $tags : [];
?>
<div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-500 border border-neutral-100/10">
    <!-- Sliding accent top border -->
    <div class="absolute top-0 left-0 w-full h-[4px] bg-brand-accent-light transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 z-20"></div>
    
    <div class="aspect-[4/3] overflow-hidden w-full relative">
        <img src="<?= htmlspecialchars($image) ?>" alt="<?= htmlspecialchars($title) ?>" loading="lazy" class="w-full h-full object-cover transform group-hover:scale-[1.03] transition-transform duration-700">
    </div>
    <!-- Hover Overlay -->
    <div class="absolute inset-0 bg-brand-dark/85 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6 md:p-8 z-10">
        <?php if ($year || !empty($tags)): ?>
        <div class="flex items-center gap-3 mb-3 translate-y-4 group-hover:translate-y-0 transition-transform duration-500 delay-75">
            <?php if ($year): ?>
            <span class="text-brand-accent-light text-xs font-bold uppercase tracking-widest"><?= htmlspecialchars($year) ?></span>
            <?php endif; ?>
            <?php if ($year && !empty($tags)): ?>
            <span class="w-6 h-px bg-brand-accent-light/40"></span>
            <?php endif; ?>
            <?php foreach ($tags as $tag): ?>
            <span class="text-gray-400 text-xs uppercase tracking-wider"><?= htmlspecialchars($tag) ?></span>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <h3 class="text-xl font-display font-bold text-white mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-500 delay-100"><?= htmlspecialchars($title) ?></h3>
        <?php if ($description): ?>
        <p class="text-gray-300 text-sm mb-4 translate-y-4 group-hover:translate-y-0 transition-transform duration-500 delay-200 font-sans leading-relaxed line-clamp-3"><?= htmlspecialchars($description) ?></p>
        <?php endif; ?>
        <div class="translate-y-4 group-hover:translate-y-0 transition-transform duration-500 delay-300">
            <span class="inline-block text-brand-accent-light uppercase tracking-widest text-xs font-bold hover:text-white transition-colors">
                View Project &rarr;
            </span>
        </div>
    </div>
</div>
