<?php
/**
 * The template for displaying the homepage
 *
 * @package Spine-O-Well
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<section class="hero-banner">
			<div class="container">
				<div class="hero-content">
					<h1 class="hero-title">Experience True Comfort, Naturally.</h1>
					<p class="hero-subtitle">Discover the perfect balance of orthopedic support and eco-friendly materials for your best sleep ever.</p>
					<a href="#products" class="btn btn-primary">Explore Our Mattresses</a>
				</div>
			</div>
		</section>

		<section id="categories" class="shop-by-category text-center">
			<div class="container">
				<h2 class="section-title">Shop Our Collections</h2>
				<div class="category-grid">
					<div class="category-item">
						<a href="#">
							<div class="category-icon-container">
								<!-- Placeholder for icon -->
							</div>
							<h3 class="category-title">Mattresses</h3>
						</a>
					</div>
					<div class="category-item">
						<a href="#">
							<div class="category-icon-container">
								<!-- Placeholder for icon -->
							</div>
							<h3 class="category-title">Pillows</h3>
						</a>
					</div>
					<div class="category-item">
						<a href="#">
							<div class="category-icon-container">
								<!-- Placeholder for icon -->
							</div>
							<h3 class="category-title">Beds</h3>
						</a>
					</div>
					<div class="category-item">
						<a href="#">
							<div class="category-icon-container">
								<!-- Placeholder for icon -->
							</div>
							<h3 class="category-title">Accessories</h3>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section id="products" class="popular-products">
			<div class="container">
				<h2 class="section-title text-center">Our Popular Mattresses</h2>
				<div class="product-grid">
					<div class="product-card">
						<div class="product-image">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-1.png" alt="Ortho-Comfort Mattress">
						</div>
						<div class="product-content">
							<h3 class="product-title">Ortho-Comfort Mattress</h3>
							<p class="product-description">Engineered for perfect spinal alignment and pressure relief. Made with 100% organic latex.</p>
							<a href="#" class="btn btn-secondary">Learn More</a>
						</div>
					</div>
					<div class="product-card">
						<div class="product-image">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-2.jpg" alt="Eco-Luxe Hybrid Mattress">
						</div>
						<div class="product-content">
							<h3 class="product-title">Eco-Luxe Hybrid Mattress</h3>
							<p class="product-description">A perfect blend of responsive springs and natural, cooling foam for a weightless feel.</p>
							<a href="#" class="btn btn-secondary">Learn More</a>
						</div>
					</div>
					<div class="product-card">
						<div class="product-image">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-3.png" alt="Serene Sleep Mattress">
						</div>
						<div class="product-content">
							<h3 class="product-title">Serene Sleep Mattress</h3>
							<p class="product-description">Minimalist design meets maximum comfort. Breathable materials for a cool night's sleep.</p>
							<a href="#" class="btn btn-secondary">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="about" class="about-company">
			<div class="container">
				<div class="about-grid">
					<div class="about-image">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-1.png" alt="Family enjoying a Spine-O-Well mattress">
					</div>
					<div class="about-content">
						<h2 class="section-title">60+ Years of Trusted Comfort Solutions</h2>
						<p>For over 60 years, we’ve delivered quality sleep solutions to families across the nation. With innovation, science, and trust at our core, we provide premium sleep solutions tailored to your every need, using sustainable, eco-friendly materials.</p>
						<div class="benefits-grid">
							<div class="benefit-item">
								<div class="benefit-icon"><!-- Placeholder for icon --></div>
								<p>10,000+ Happy Families</p>
							</div>
							<div class="benefit-item">
								<div class="benefit-icon"><!-- Placeholder for icon --></div>
								<p>Eco-Friendly Materials</p>
							</div>
							<div class="benefit-item">
								<div class="benefit-icon"><!-- Placeholder for icon --></div>
								<p>Free Delivery</p>
							</div>
							<div class="benefit-item">
								<div class="benefit-icon"><!-- Placeholder for icon --></div>
								<p>10-Year Warranty</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="testimonials" class="testimonial-section text-center">
			<div class="container">
				<h2 class="section-title">From Extraordinary People Like You</h2>
				<div class="testimonial-grid">
					<div class="testimonial-card">
						<div class="testimonial-author">
							<div class="author-initial">L</div>
							<div class="author-details">
								<p class="author-name">Lovely Saini</p>
								<div class="author-rating">★★★★★</div>
							</div>
						</div>
						<div class="testimonial-text">
							<p>"The Spine-O-Well mattress is very good and very comfortable. The brand's sleep is nothing to say about your product. I feel very comfortable and sleep is good on these mattresses."</p>
						</div>
					</div>
					<div class="testimonial-card">
						<div class="testimonial-author">
							<div class="author-initial">S</div>
							<div class="author-details">
								<p class="author-name">Sainath B</p>
								<div class="author-rating">★★★★★</div>
							</div>
						</div>
						<div class="testimonial-text">
							<p>"Pain relief. Expected dimensions received. Feels better when we sleep on it. Easy to use & clean. Received in good condition. I would definitely recommend anyone looking to buy."</p>
						</div>
					</div>
					<div class="testimonial-card">
						<div class="testimonial-author">
							<div class="author-initial">A</div>
							<div class="author-details">
								<p class="author-name">Amit Kumar</p>
								<div class="author-rating">★★★★★</div>
							</div>
						</div>
						<div class="testimonial-text">
							<p>"After thorough analysis regarding my requirement and options available to go for and confusion over online order of mattress like product, and then services of Amazon. Everything went smoothly."</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="cta" class="call-to-action text-center">
			<div class="container">
				<h2 class="section-title">Still Need Help in Deciding?</h2>
				<div class="cta-grid">
					<div class="cta-item">
						<div class="cta-image-placeholder"></div>
						<h3>Visit Our Store</h3>
						<a href="#" class="btn btn-primary">Find a Store</a>
					</div>
					<div class="cta-item">
						<div class="cta-image-placeholder"></div>
						<h3>Talk to an Expert</h3>
						<a href="#" class="btn btn-primary">Call Us</a>
					</div>
					<div class="cta-item">
						<div class="cta-image-placeholder"></div>
						<h3>Get a Virtual Demo</h3>
						<a href="#" class="btn btn-primary">Shop Live</a>
					</div>
				</div>
			</div>
		</section>

		<section id="store-locator" class="store-locator text-center">
			<div class="container">
				<div class="section-header">
					<h2 class="section-title">Find a Store Near You</h2>
					<a href="#" class="btn btn-secondary">View All Stores</a>
				</div>
				<div class="store-grid">
					<div class="store-card">
						<div class="store-icon-placeholder"></div>
						<h3 class="store-city">New York</h3>
						<p class="store-count">3 Stores</p>
					</div>
					<div class="store-card">
						<div class="store-icon-placeholder"></div>
						<h3 class="store-city">Los Angeles</h3>
						<p class="store-count">2 Stores</p>
					</div>
					<div class="store-card">
						<div class="store-icon-placeholder"></div>
						<h3 class="store-city">Chicago</h3>
						<p class="store-count">2 Stores</p>
					</div>
					<div class="store-card">
						<div class="store-icon-placeholder"></div>
						<h3 class="store-city">San Francisco</h3>
						<p class="store-count">1 Store</p>
					</div>
				</div>
			</div>
		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
