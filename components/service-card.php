<?php
/**
 * Expected variables:
 * $serviceCount (string, e.g. '01')
 * $serviceTitle (string)
 * $serviceImage (string, webp path)
 * $serviceContent (array of strings, each string is a paragraph)
 * $isReversed (boolean, to alternate layout)
 */

$reverseClass = $isReversed ? 'lg:flex-row-reverse' : 'lg:flex-row';
$borderOffsetClass = $isReversed ? '-left-3 lg:right-auto' : '-right-3 lg:left-auto';
$hoverTranslateClass = $isReversed ? 'group-hover:-translate-x-1' : 'group-hover:translate-x-1';
?>
<div class="flex flex-col <?= $reverseClass ?> gap-12 lg:gap-16 items-center group mb-24 last:mb-0 scroll-mt-20">
    <!-- Image Media with offset luxury borders and hover effects -->
    <div class="w-full lg:w-1/2 relative px-4 lg:px-0">
        <!-- Offset outline frame border that responds on hover -->
        <div class="absolute -bottom-3 <?= $borderOffsetClass ?> w-full h-full border border-brand-accent/20 rounded-sm z-0 <?= $hoverTranslateClass ?> group-hover:translate-y-1 transition-transform duration-700"></div>
        
        <div class="relative overflow-hidden border border-neutral-100/80 shadow-2xl rounded-sm z-10 bg-white aspect-[16/10] w-full">
            <img src="<?= $serviceImage ?>" alt="<?= $serviceTitle ?>" class="w-full h-full object-cover transition-all duration-700 transform group-hover:scale-[1.03] group-hover:opacity-95">
            <!-- Subtle gradient overlay on hover for a soft fade effect -->
            <div class="absolute inset-0 bg-brand-dark/0 group-hover:bg-brand-dark/5 transition-colors duration-700 z-20 mix-blend-overlay"></div>
        </div>
    </div>

    <!-- Text Content -->
    <div class="w-full lg:w-1/2 space-y-6 lg:px-4">
        <div class="flex items-center space-x-3">
            <span class="inline-block px-3 py-1 bg-brand-light text-brand-accent font-display font-semibold tracking-widest uppercase text-[10px] rounded-full"><?= $serviceCount ?> / Service</span>
        </div>
        <h2 class="text-3xl sm:text-4xl font-display font-bold text-brand-dark leading-tight tracking-tight group-hover:text-brand-accent transition-colors duration-300">
            <?= $serviceTitle ?>
        </h2>
        <div class="space-y-4 text-brand-gray font-sans text-sm sm:text-base leading-relaxed">
            <?php foreach ($serviceContent as $index => $paragraph): ?>
                <?php if ($index === 0): ?>
                    <p class="font-medium text-brand-dark text-lg border-l-2 border-brand-accent pl-4"><?= $paragraph ?></p>
                <?php else: ?>
                    <p><?= $paragraph ?></p>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
