<?php
$pageTitle = 'Our Projects';
include '../includes/header.php';

$projects = [
    [
        'title'       => 'Arcade Independence Square',
        'year'        => '2015',
        'tags'        => ['Granite Tiles'],
        'description' => 'The Arcade is a plush shopping complex housing top global brands. It is also a symbolic space with renovated historic buildings, coined for its close proximity to the venue of independence declaration. The project included decorative and monumental structure manufacture as well as functional area tiling — walls, floors, and steps to Lion Square — using Paradiso Granite and Multi Beige Granite in rough and gloss finishes.',
        'image'       => '/universalgranite/assets/images/gallery/arcade-independence-square-architectural-granite-tiling.jpg'
    ],
    [
        'title'       => 'Rock House Army Camp – Modera',
        'year'        => '2012 / 2013',
        'tags'        => ['Granite Tiles'],
        'description' => 'Rock House army camp is a military base located at Modera which serves as the regimental headquarters of the Sri Lanka Armored Corps of the Sri Lanka Army. The project covered wall, terrace, lobby, entrance, visitors rooms, kitchen and washroom areas using sand stone and black galaxy granite — 7,785 sq.ft granite & 1,428 sq.ft sand stone, totalling 4,428 tiles.',
        'image'       => '/universalgranite/assets/images/gallery/rock-house-army-camp-visitor-area-granite-flooring.jpg'
    ],
    [
        'title'       => 'Diyathalawa Army Camp',
        'year'        => '2014',
        'tags'        => ['Granite Tiles'],
        'description' => 'The Diyathalawa Army Camp is Sri Lanka Army\'s military training base in the Uva province, housing military cadets and special task forces for all levels of training. Several granite works at the camp have been completed including a wall monument for soldiers and the decorative torch structure at the camp entrance.',
        'image'       => '/universalgranite/assets/images/gallery/commercial-complex-reception-foyer-granite-steps.jpg'
    ],
    [
        'title'       => 'Yala Hilton Project',
        'year'        => '2016',
        'tags'        => ['Granite Tiles', 'Marble Tiles'],
        'description' => 'Yala Hilton Hotel is a 7-acre resort developed by the Melwa Group in the southern tourist belt of Sri Lanka, hosting 28 villa accommodations catering to high-end tourists. Universal Marble & Granite was extensively involved in this project featuring granite and marble in many functional and decorative installations throughout the resort.',
        'image'       => '/universalgranite/assets/images/gallery/polished-madura-ivory-granite-lobby-tiling.jpg'
    ],
    [
        'title'       => 'Club Waskaduwa Beach Resort & Spa',
        'year'        => '2015',
        'tags'        => ['Granite Tiles', 'Marble Tiles'],
        'description' => 'Luxury marble and granite installations across the resort lobby, poolside areas, and private suites of Club Waskaduwa Beach Resort & Spa, delivering a seamless natural stone experience throughout the property.',
        'image'       => '/universalgranite/assets/images/gallery/yala-resort-lobby-sandstone-and-granite-installation.jpg'
    ],
    [
        'title'       => 'Hilton Resident Project – Union Place',
        'year'        => '2017',
        'tags'        => ['Uncategorized'],
        'description' => 'Extensive use of Universal Marble & Granite for functional and decorative installations across this prestigious Hilton residential project at Union Place, Colombo.',
        'image'       => '/universalgranite/assets/images/gallery/grand-dining-hall-luxury-marble-flooring.jpg'
    ],
    [
        'title'       => 'Hotel Euro Lanka',
        'year'        => '2013',
        'tags'        => ['Uncategorized'],
        'description' => 'Elegant front desk, foyer, and lobby styling with premium imported marble for Hotel Euro Lanka, creating a lasting first impression for guests.',
        'image'       => '/universalgranite/assets/images/gallery/hotel-euro-lanka-foyer-marble-installation.jpg'
    ],
    [
        'title'       => 'Cafe Colombo – One Galle Face',
        'year'        => '2017',
        'tags'        => ['Uncategorized'],
        'description' => 'Premium granite countertops and flooring for Cafe Colombo at the iconic One Galle Face mixed-development, delivering a high-end contemporary dining environment.',
        'image'       => '/universalgranite/assets/images/gallery/cafe-colombo-commercial-pantry-granite-countertops.jpg'
    ],
    [
        'title'       => 'Sri Lanka Navy Headquarters',
        'year'        => '2014',
        'tags'        => ['Uncategorized'],
        'description' => 'Durable granite flooring and premium wall cladding for the Sri Lanka Navy Headquarters, combining function and formal aesthetics for a high-profile government institution.',
        'image'       => '/universalgranite/assets/images/gallery/polished-steel-grey-granite-wall-surface-panel.jpg'
    ],
    [
        'title'       => 'SMS Holdings',
        'year'        => '2016',
        'tags'        => ['Granite Tiles'],
        'description' => 'Staircase and outdoor granite works at Athulkotte for SMS Holdings — covering stair treads, outdoor walkways, and decorative border elements using premium natural granite.',
        'image'       => '/universalgranite/assets/images/gallery/luxury-circular-granite-steps-staircase.jpg'
    ],
    [
        'title'       => 'Bambalapitiya Pillayar Temple',
        'year'        => '2013',
        'tags'        => ['Uncategorized'],
        'description' => 'Decorative stone installations and ornamental column work for the Bambalapitiya Pillayar Temple, crafted with precision to honour the heritage and spiritual character of the space.',
        'image'       => '/universalgranite/assets/images/gallery/historic-monument-and-ornamental-carved-stone-columns.png'
    ],
    [
        'title'       => 'Bambalapitiya Kathiresan Temple',
        'year'        => '2014',
        'tags'        => ['Uncategorized'],
        'description' => 'Premium granite tiling and decorative border stone installations for the Bambalapitiya Kathiresan Temple, enhancing the ceremonial forecourt and interior flooring.',
        'image'       => '/universalgranite/assets/images/gallery/foyer-tiling-with-sofia-beige-granite-decorative-borders.png'
    ],
];

// Calculate category counts
$countAll = count($projects);
$countGranite = count(array_filter($projects, function($p) {
    return in_array('Granite Tiles', $p['tags']);
}));
$countMarble = count(array_filter($projects, function($p) {
    return in_array('Marble Tiles', $p['tags']);
}));
$countUncategorized = count(array_filter($projects, function($p) {
    return in_array('Uncategorized', $p['tags']);
}));
?>

<!-- Page Header -->
<section class="relative pt-28 pb-16 lg:pt-36 lg:pb-20 bg-brand-dark overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-neutral-900 via-brand-dark to-black opacity-95 z-0"></div>
    <div class="container-custom relative z-10 text-center space-y-4">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-white uppercase tracking-wider animate-slide-up">
            Our Projects
        </h1>
        <p class="text-gray-400 font-sans max-w-2xl mx-auto text-sm md:text-base leading-relaxed tracking-wide opacity-90">
            Showcasing a decade of architectural brilliance and premium stone installations across Sri Lanka.
        </p>
    </div>
</section>

<!-- Projects Grid Section with Alpine.js Filtering -->
<section class="py-16 bg-brand-light" x-data="{ activeFilter: 'All' }">
    <div class="container-custom">
        <!-- Category Filter Tabs -->
        <div class="flex flex-wrap justify-center items-center gap-4 mb-12">
            <button @click="activeFilter = 'All'" 
                    :class="activeFilter === 'All' ? 'bg-brand-accent text-white border-brand-accent shadow-md ring-2 ring-brand-accent-light/20' : 'bg-white text-brand-dark border-gray-200 hover:border-brand-accent hover:text-brand-accent'"
                    class="px-8 py-3 border rounded-full font-semibold uppercase tracking-wider text-xs transition-all duration-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-brand-accent-light/40">
                View all (<?= $countAll ?>)
            </button>
            <button @click="activeFilter = 'Granite Tiles'" 
                    :class="activeFilter === 'Granite Tiles' ? 'bg-brand-accent text-white border-brand-accent shadow-md ring-2 ring-brand-accent-light/20' : 'bg-white text-brand-dark border-gray-200 hover:border-brand-accent hover:text-brand-accent'"
                    class="px-8 py-3 border rounded-full font-semibold uppercase tracking-wider text-xs transition-all duration-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-brand-accent-light/40">
                Granite Tiles (<?= $countGranite ?>)
            </button>
            <button @click="activeFilter = 'Marble Tiles'" 
                    :class="activeFilter === 'Marble Tiles' ? 'bg-brand-accent text-white border-brand-accent shadow-md ring-2 ring-brand-accent-light/20' : 'bg-white text-brand-dark border-gray-200 hover:border-brand-accent hover:text-brand-accent'"
                    class="px-8 py-3 border rounded-full font-semibold uppercase tracking-wider text-xs transition-all duration-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-brand-accent-light/40">
                Marble Tiles (<?= $countMarble ?>)
            </button>
            <button @click="activeFilter = 'Uncategorized'" 
                    :class="activeFilter === 'Uncategorized' ? 'bg-brand-accent text-white border-brand-accent shadow-md ring-2 ring-brand-accent-light/20' : 'bg-white text-brand-dark border-gray-200 hover:border-brand-accent hover:text-brand-accent'"
                    class="px-8 py-3 border rounded-full font-semibold uppercase tracking-wider text-xs transition-all duration-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-brand-accent-light/40">
                Uncategorized (<?= $countUncategorized ?>)
            </button>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php 
            $delay = 0;
            foreach($projects as $project): 
                $image = $project['image'];
                $title = $project['title'];
                $description = $project['description'];
                $year = $project['year'];
                $tags = $project['tags'];
                $tagsJson = htmlspecialchars(json_encode($tags), ENT_QUOTES, 'UTF-8');
            ?>
                <div x-show="activeFilter === 'All' || <?= $tagsJson ?>.includes(activeFilter)"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100">
                    <?php 
                    include '../components/project-card.php'; 
                    $delay += 100;
                    ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

