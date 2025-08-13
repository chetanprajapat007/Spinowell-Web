<?php
/**
 * The template for displaying the Products archive page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Spine-O-Well
 */

get_header();
?>

	<main id="primary" class="site-main">
        <div class="container">

            <header class="page-header">
                <h1 class="page-title">Our Products</h1>
                <div class="archive-description">
                    <p>Browse our collection of premium, eco-friendly mattresses and sleep accessories.</p>
                </div>
            </header><!-- .page-header -->

            <?php if ( have_posts() ) : ?>

                <div class="product-grid">

                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();

                        /*
                        * I will create a new template part for the product card
                        * to keep the code DRY and reusable.
                        */
                        get_template_part( 'template-parts/content', 'product' );

                    endwhile;
                    ?>

                </div><!-- .product-grid -->

                <?php
                the_posts_navigation();

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>
        </div><!-- .container -->
	</main><!-- #primary -->

<?php
get_footer();
