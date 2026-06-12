<?php
define('ACCESS_ALLOWED', true);

$pageTitle = "Contact Saptarishi Seeds | Get in Touch for Agricultural Seeds";
$metaDescription = "Contact Saptarishi Seeds for high-quality agricultural seeds. Get support, product details, and farming solutions across India.";
$metaKeywords = "contact Saptarishi Seeds, seed company contact India, agriculture seeds support";
$canonical = "https://saptarishiseeds.in/contact-us";

include './components/header.php';
?>

<!-- HERO -->
<section class="contact-hero">
    <div class="container">
        <h1>Contact Us</h1>
        <p>We’re here to help you with the best seed solutions.</p>
    </div>
</section>

<!-- CONTACT SECTION -->
<section class="contact-section">
    <div class="container">

        <h2>Get in Touch</h2>
        <p>
            Have questions about our seeds or need assistance? Reach out to Saptarishi Seeds for reliable
            support and product information. Our team is ready to help you choose the right seeds for better yield.
        </p>

        <div class="contact-grid">

            <!-- Contact Form -->
            <div class="contact-form">
                <form method="post" action="">

                    <div class="form-box">
                        <label>Name</label>
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
                        <label>Message</label>
                        <textarea name="message" rows="4"></textarea>
                    </div>

                    <button type="submit">Send Message</button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="contact-info">
                <h3>Our Office</h3>
                <p>Saptarishi Seeds</p>
                <p>India</p>

                <h3>Call Us</h3>
                <p><a href="tel:+91XXXXXXXXXX">+91 XXXXX XXXXX</a></p>

                <h3>Email</h3>
                <p><a href="mailto:info@saptarishiseeds.in">info@saptarishiseeds.in</a></p>
            </div>

        </div>

    </div>
</section>

<?php include './components/footer.php'; ?>