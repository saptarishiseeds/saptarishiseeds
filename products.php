<?php
define('ACCESS_ALLOWED', true);

$pageTitle = "Our Products | Saptarishi Seeds - High Quality Agricultural Seeds";
$metaDescription = "Explore high-quality agricultural seeds from Saptarishi Seeds. Designed for better yield, performance, and reliable farming results.";
$metaKeywords = "Saptarishi Seeds products, agriculture seeds India, hybrid seeds, crop seeds";
$canonical = "https://saptarishiseeds.in/products";

include './components/header.php';
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Product",
      "name": "Hybrid Seeds",
      "image": "https://saptarishiseeds.in/assets/images/product1.jpg",
      "description": "High-performance hybrid seeds designed for maximum yield and resistance.",
      "brand": {
        "@type": "Brand",
        "name": "Saptarishi Seeds"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "INR",
        "price": "1000",
        "availability": "https://schema.org/InStock",
        "url": "https://saptarishiseeds.in/products"
      }
    },

    {
      "@type": "Product",
      "name": "Vegetable Seeds",
      "image": "https://saptarishiseeds.in/assets/images/product2.jpg",
      "description": "Premium vegetable seeds ensuring quality produce and strong growth.",
      "brand": {
        "@type": "Brand",
        "name": "Saptarishi Seeds"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "INR",
        "price": "800",
        "availability": "https://schema.org/InStock",
        "url": "https://saptarishiseeds.in/products"
      }
    },

    {
      "@type": "Product",
      "name": "Field Crop Seeds",
      "image": "https://saptarishiseeds.in/assets/images/product3.jpg",
      "description": "Reliable seeds for field crops with consistent performance and productivity.",
      "brand": {
        "@type": "Brand",
        "name": "Saptarishi Seeds"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "INR",
        "price": "1200",
        "availability": "https://schema.org/InStock",
        "url": "https://saptarishiseeds.in/products"
      }
    }

  ]
}
</script>

<!-- HERO -->
<section class="products-hero">
    <div class="container">
        <h1>Our Products</h1>
        <p>High-quality seeds designed for better yield and performance.</p>
    </div>
</section>

<!-- PRODUCTS LIST -->
<section class="products-list">
    <div class="container">

        <h2>Premium Agricultural Seeds</h2>
        <p>
            At Saptarishi Seeds, we offer a wide range of high-quality seeds designed to deliver consistent
            performance, better yield, and strong crop growth across different farming conditions.
        </p>

        <div class="product-grid">

            <!-- Product 1 -->
            <div class="product-card">
                <img src="/assets/images/product1.jpg" alt="Hybrid Crop Seeds">
                <h3>Hybrid Seeds</h3>
                <p>High-performance hybrid seeds designed for maximum yield and resistance.</p>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
                <img src="/assets/images/product2.jpg" alt="Vegetable Seeds India">
                <h3>Vegetable Seeds</h3>
                <p>Premium vegetable seeds ensuring quality produce and strong growth.</p>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <img src="/assets/images/product3.jpg" alt="Field Crop Seeds">
                <h3>Field Crop Seeds</h3>
                <p>Reliable seeds for field crops with consistent performance and productivity.</p>
            </div>

        </div>

        <h2>Why Our Seeds Stand Out</h2>
        <ul>
            <li>Scientifically tested and verified quality</li>
            <li>Better yield and crop performance</li>
            <li>Suitable for diverse farming conditions</li>
            <li>Trusted by farmers across India</li>
        </ul>

        <h2>Get Catalog</h2>
        <p>
            Want detailed information about our products? Click the “Get Catalog” button to receive the
            latest seed catalog and product details.
        </p>

    </div>
</section>

<?php include './components/footer.php'; ?>