<?php
// Dynamically determine the web base path of the project (handles subdirectory or root domain deployment case-insensitively)
$project_root = rtrim(str_replace('\\', '/', dirname(__DIR__)), '/');
$doc_root = rtrim(str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']), '/');

$base_path = '';
if (stripos($project_root, $doc_root) === 0) {
    $base_path = substr($project_root, strlen($doc_root));
}
$base_path = '/' . ltrim($base_path, '/');
if ($base_path === '/') {
    $base_path = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($pageTitle) ? $pageTitle . ' - Universal Marble & Granite' : 'Universal Marble & Granite (Pvt) Ltd | Premium Stone Suppliers' ?></title>
    <meta name="description" content="<?= isset($pageDescription) ? $pageDescription : 'Universal Marble & Granite (Pvt) Ltd is a leading supplier of premium natural stones, marble, and granite in Sri Lanka for luxury architecture and interiors.' ?>">
    
    <!-- Favicon / Title Image -->
    <link rel="icon" type="image/png" href="<?= $base_path ?>/assets/images/logo.png?v=1.0">
    <link rel="shortcut icon" type="image/png" href="<?= $base_path ?>/assets/images/logo.png?v=1.0">
    <link rel="apple-touch-icon" href="<?= $base_path ?>/assets/images/logo.png?v=1.0">

    <!-- Open Graph / SEO Preview Image (Head Title Image) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= isset($pageTitle) ? $pageTitle . ' - Universal Marble & Granite' : 'Universal Marble & Granite (Pvt) Ltd | Premium Stone Suppliers' ?>">
    <meta property="og:description" content="<?= isset($pageDescription) ? $pageDescription : 'Universal Marble & Granite (Pvt) Ltd is a leading supplier of premium natural stones, marble, and granite in Sri Lanka for luxury architecture and interiors.' ?>">
    <meta property="og:image" content="<?= $base_path ?>/assets/images/logo.png">
    <meta property="og:url" content="http://localhost<?= $base_path ?>/<?= basename($_SERVER['PHP_SELF']) ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= isset($pageTitle) ? $pageTitle . ' - Universal Marble & Granite' : 'Universal Marble & Granite (Pvt) Ltd | Premium Stone Suppliers' ?>">
    <meta name="twitter:description" content="<?= isset($pageDescription) ? $pageDescription : 'Universal Marble & Granite (Pvt) Ltd is a leading supplier of premium natural stones, marble, and granite in Sri Lanka for luxury architecture and interiors.' ?>">
    <meta name="twitter:image" content="<?= $base_path ?>/assets/images/logo.png">
    
    <!-- Vite Assets (Development/Production) -->
    <?php
    $vite_dev = false; // Set to false in production
    if ($vite_dev): ?>
        <script type="module" src="http://localhost:3000/@vite/client"></script>
        <script type="module" src="http://localhost:3000/assets/js/main.js"></script>
    <?php else: ?>
        <!-- Production assets will be injected here or read from manifest -->
        <link rel="stylesheet" href="<?= $base_path ?>/dist/assets/index.css">
        <script type="module" src="<?= $base_path ?>/dist/assets/index.js"></script>
    <?php endif; ?>
</head>
<body class="bg-brand-light text-brand-gray antialiased flex flex-col min-h-screen">
    
    <?php include __DIR__ . '/navbar.php'; ?>
    
    <main class="flex-grow">
