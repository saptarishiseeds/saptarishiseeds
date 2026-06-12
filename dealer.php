<?php
define('ACCESS_ALLOWED', true);

$pageTitle = "Become a Dealer | Saptarishi Seeds Partner Program";
$metaDescription = "Join Saptarishi Seeds as a dealer or distributor. Grow your business with high-quality agricultural seeds and strong market demand.";
$metaKeywords = "Saptarishi Seeds dealer, seed distributor India, agriculture dealership, become seed dealer";
$canonical = "https://saptarishiseeds.in/dealer";

include './components/header.php';
?>

<!-- HERO -->
<section class="dealer-hero">
    <div class="container">
        <h1>Become a Dealer</h1>
        <p>Partner with Saptarishi Seeds and grow your business with trusted agricultural products.</p>
    </div>
</section>

<!-- DEALER CONTENT -->
<section class="dealer-section">
    <div class="container">

        <h2>Why Partner With Us</h2>
        <p>
            Saptarishi Seeds offers a strong opportunity for dealers and distributors to expand their business
            with high-quality agricultural seeds. Our products are trusted by farmers and designed for better
            yield, making them easy to sell and scale in the market.
        </p>

        <ul>
            <li>High-demand agricultural seed products</li>
            <li>Attractive dealer margins</li>
            <li>Strong brand trust and farmer network</li>
            <li>Marketing and product support</li>
        </ul>

        <h2>Dealer Registration</h2>
        <p>
            Fill out the form below to become an authorized dealer of Saptarishi Seeds. Our team will contact
            you with further details.
        </p>

        <!-- DEALER FORM -->
        <div class="dealer-form">
            <form method="post" action="">

                <div class="form-box">
                    <label>Full Name</label>
                    <input type="text" name="name" required>
                </div>

                <div class="form-box">
                    <label>Phone *</label>
                    <input type="tel" name="phone" required>
                </div>

                <div class="form-box">
                    <label>Email</label>
                    <input type="email" name="email">
                </div>

                <div class="form-box">
                    <label>City / Location</label>
                    <input type="text" name="city" required>
                </div>

                <div class="form-box">
                    <label>Business Details</label>
                    <textarea name="message" rows="4" placeholder="Tell us about your business"></textarea>
                </div>

                <button type="submit">Apply Now</button>

            </form>
        </div>

    </div>
</section>

<?php include './components/footer.php'; ?>