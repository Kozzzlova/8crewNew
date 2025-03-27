<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Check if the product is a valid WooCommerce product and ensure its visibility before proceeding.
if ( ! is_a( $product, WC_Product::class ) || ! $product->is_visible() ) {
	return;
}
?>
<a data-aos="fade-up" href='<?php the_permalink(); ?>' class="product-card" <?php wc_product_class( '', $product ); ?>>
	<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>

	<div class="product-card__image">
		<?php echo get_the_post_thumbnail(); ?>
	</div>
	<div class="product-card__content">
		<div class="product-card__info">
			<h5 class="product-card__title"><?php the_title(); ?></h5>
			<div class="product-card__description">
				<?php if( get_min_max_variation_size( $product->get_ID() ) ) { ?>
				<div class="product-card__size">EU <?php echo get_min_max_variation_size( $product->get_ID() ); ?></div>
				<?php } ?>
				<div class="product-card__price"><?php pll_e('Від'); ?> <?php
					echo get_min_variation_price_cached($product->get_ID() ) . " " . get_woocommerce_currency_symbol(); ?></div>

			</div>

		</div>

		<button type='button' class="product-card__button button-small">
			<svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill='none'>
				<use xlink:href="#basket"></use>
			</svg>
		</button>

	</div>
</a>
