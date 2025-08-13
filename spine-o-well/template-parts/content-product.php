<?php
/**
 * Template part for displaying product content in archive-product.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Spine-O-Well
 */

?>

<div class="product-card">
	<div class="product-image">
		<a href="<?php the_permalink(); ?>">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large' ); ?>
			<?php else : ?>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-placeholder.png" alt="<?php the_title_attribute(); ?>">
			<?php endif; ?>
		</a>
	</div>
	<div class="product-content">
		<h3 class="product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<div class="product-excerpt">
			<?php the_excerpt(); ?>
		</div>
		<a href="<?php the_permalink(); ?>" class="btn btn-secondary">Learn More</a>
	</div>
</div>
