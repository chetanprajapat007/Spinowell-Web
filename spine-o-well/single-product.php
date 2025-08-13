<?php
/**
 * The template for displaying a single product
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Spine-O-Well
 */

get_header();
?>

	<main id="primary" class="site-main">
        <div class="container">
            <?php
            while ( have_posts() ) :
                the_post();
                ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class( 'product-details-grid' ); ?>>
                    <!-- Left Column: Product Image -->
                    <div class="product-details-image">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'large' ); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-placeholder.png" alt="<?php the_title_attribute(); ?>">
                        <?php endif; ?>
                    </div>

                    <!-- Right Column: Product Information -->
                    <div class="product-details-content">
                        <header class="entry-header">
                            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div><!-- .entry-content -->

                        <div class="product-meta">
                            <h3>Key Features</h3>
                            <ul>
                                <li><!-- Placeholder -->100% Organic Materials</li>
                                <li><!-- Placeholder -->Advanced Orthopedic Support</li>
                                <li><!-- Placeholder -->Breathable and Cooling</li>
                                <li><!-- Placeholder -->10-Year Warranty</li>
                            </ul>

                            <h3>Dimensions</h3>
                            <p><!-- Placeholder -->Available in King, Queen, Double, and Single sizes.</p>

                            <h3>Materials</h3>
                            <p><!-- Placeholder -->Natural Latex, Organic Cotton, High-Resilience Foam.</p>
                        </div>
                    </div>
                </article><!-- #post-<?php the_ID(); ?> -->

                <?php
            endwhile; // End of the loop.
            ?>
        </div><!-- .container -->
	</main><!-- #primary -->

<?php
get_footer();
