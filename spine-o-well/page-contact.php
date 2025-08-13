<?php
/**
 * Template Name: Contact Us
 * The template for displaying the contact page
 *
 * @package Spine-O-Well
 */

get_header();
?>

	<main id="primary" class="site-main">
        <div class="container">
            <header class="entry-header">
                <h1 class="entry-title">Contact Us</h1>
            </header><!-- .entry-header -->
            <div class="contact-grid">
                <div class="contact-info">
                    <h2>Get in Touch</h2>
                    <p>We'd love to hear from you. Whether you have a question about our products, need assistance, or just want to talk about sleep, we're here for you.</p>

                    <h3>Our Office</h3>
                    <p>123 Eco-Friendly Lane<br>Comfort City, ST 12345</p>

                    <h3>Email Us</h3>
                    <p>contact@spineowell.com</p>

                    <h3>Call Us</h3>
                    <p>+1 (800) 555-SLEEP</p>
                </div>
                <div class="contact-form">
                    <h2>Send a Message</h2>
                    <?php
                    // This is where the contact form shortcode will go.
                    // We recommend using the Contact Form 7 plugin.
                    // Example: echo do_shortcode('[contact-form-7 id="your-id" title="Contact form 1"]');
                    echo '<div class="form-placeholder">Please install the Contact Form 7 plugin and paste your form shortcode here.</div>';
                    ?>
                </div>
            </div>
        </div><!-- .container -->
	</main><!-- #primary -->

<?php
get_footer();
