<?php
if (!defined('ACCESS_ALLOWED')) {
    die('Direct access not allowed');
}

// ✅ Fallbacks
$pageTitle = $pageTitle ?? 'Saptarishi Seeds | High Quality Agricultural Seeds in India';
$metaDescription = $metaDescription ?? 'Saptarishi Seeds provides high-quality agricultural seeds in India for better yield and performance.';
$metaKeywords = $metaKeywords ?? 'Saptarishi Seeds, agriculture seeds, hybrid seeds India';
$canonical = $canonical ?? 'https://saptarishiseeds.in/';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo $pageTitle; ?></title>

    <!-- SEO -->
    <meta name="description" content="<?php echo $metaDescription; ?>">
    <meta name="keywords" content="<?php echo $metaKeywords; ?>">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Saptarishi Seeds">
    <meta name="theme-color" content="#0f172a">

    <link rel="canonical" href="<?php echo $canonical; ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $metaDescription; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $canonical; ?>">
    <meta property="og:image" content="https://saptarishiseeds.in/assets/images/og-image.jpg">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $pageTitle; ?>">
    <meta name="twitter:description" content="<?php echo $metaDescription; ?>">
    <meta name="twitter:image" content="https://saptarishiseeds.in/assets/images/og-image.jpg">

    <!-- ✅ Schema (correct placement) -->
    <?php if ($canonical === 'https://saptarishiseeds.in/about-us'): ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "AboutPage",
      "name": "About Saptarishi Seeds",
      "url": "https://saptarishiseeds.in/about-us",
      "description": "Learn about Saptarishi Seeds, a trusted agricultural seeds company in India focused on quality and innovation."
    }
    </script>
    <?php endif; ?>

    <!-- Favicon -->
<link rel="icon" href="/assets/favicon/favicon.png">

<link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">

<link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">

<link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">

<link rel="manifest" href="/assets/favicon/site.webmanifest">

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   
</head>
<body>

<header class="header">
    <div class="container">
        <div class="header-inner">
            
            <!-- Logo -->
            <div class="logo">
                <a href="/">
                    <img src="/assets/images/saptarishiseed-logo.png" alt="Saptarishi Seeds - Agricultural Seeds Company India">
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="menu-btn">
                <i class="fa-solid fa-bars-staggered"></i>
            </button>

            <!-- Menu -->
            <div class="header-menu">
                <nav class="navbar">
                    <?php
$currentPage = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
?>
    

<ul class="nav-list">
    <li class="nav-item">
<a href="/" class="nav-link <?php if($currentPage == '' || $currentPage == 'index.php') echo 'active'; ?>">Home</a>
    </li>

    <li class="nav-item">
<a href="/products" class="nav-link <?php if($currentPage == 'products') echo 'active'; ?>">Products</a>    </li>

    <li class="nav-item">
        <a href="/about-us" class="nav-link <?php if($currentPage == 'about-us') echo 'active'; ?>">About Us</a>
    </li>

    <li class="nav-item">
       <a href="/contact-us" class="nav-link <?php if($currentPage == 'contact-us') echo 'active'; ?>">Contact Us</a>
    </li>
</ul>
                </nav>

                <div class="header-cta">
                    <button id="openCatalog" class="btn btn-primary">Get Catalog</button>
                </div>
            </div>

        </div>
    </div>
</header>

<!-- Catalog Popup -->
<div class="catalog-popup" id="catalogPopup">
    <div class="catalog-popup-wrapper">

        <span class="popup-close" id="closeCatalog">
            <i class="fa-solid fa-xmark"></i>
        </span>

        <div class="catalog-popup-header">
            <h2 class="catalog-popup-title">Download Catalog</h2>
            <p class="catalog-popup-into">Get latest seeds details</p>
        </div>

        <form id="catalogForm" method="post" action="">

            <div class="form-box">
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter your name" required>
            </div>

            <div class="form-box">
                <label>Phone *</label>
                <input type="tel" name="phone" placeholder="Enter your phone number" required>
            </div>

            <div class="form-box">
                <label>Email (optional)</label>
                <input type="email" name="email" placeholder="Enter your email">
            </div>

            <div class="form-box">
                <label>City</label>
                <input type="text" name="city" placeholder="Enter your city">
            </div>

            <div class="form-check">
                <input type="checkbox" name="whatsapp" checked>
                <label>I agree to be contacted on WhatsApp</label>
            </div>

            <button type="submit">Get Free Catalog</button>

            <p class="form-note">We respect your privacy</p>

        </form>

    </div>
</div>