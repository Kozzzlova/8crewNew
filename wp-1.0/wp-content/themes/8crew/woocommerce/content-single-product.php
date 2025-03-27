<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<main class="main">
		<div class="container">
			<?php if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<nav class="breadcrumps">','</nav>' );
			} ?>
			<section class="product">

				<div class="product__images">
					<div class="product__image"><?php echo get_the_post_thumbnail(); ?></div>
					<?php if( have_rows('photo_list') ): ?>
					<?php while( have_rows('photo_list') ): the_row(); ?>
					<div class="product__image"><?php $image = get_sub_field('photo_item');
						if( $image['id'] ) {echo wp_get_attachment_image( $image['id'], 'full' ); } ?></div>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>

				<?php $attachment_ids = $product->get_gallery_image_ids();
				if ($attachment_ids && $product->get_image_id()) { ?>
				<div class="product__images-mobile">
					<div class=" swiper product-swiper">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper product-swiper-wrapper">
							<!-- Slides -->
							<?php
							foreach ($attachment_ids as $attachment_id) {
								$thumbnail_url = wp_get_attachment_image_url($attachment_id, 'thumbnail');
								echo '<div class="swiper-slide product-swiper-slide"><div class="product__image">';
								echo '<img src="' . esc_url($thumbnail_url) . '" alt="' . esc_attr(get_post_meta($attachment_id, '_wp_attachment_image_alt', true)) . '">';
								echo '</div></div>';
							}
							?>
						</div>
					</div>
				</div>
				<?php } ?>

				<div class="product__content">
					<div class="product__about">
						<div class="product__header">
							<h3 class="product__heading heading-3">
								<div class="product__title"><?php the_title(); ?></div>
								<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>

							</h3>
							<div class="product__info">
								<div class="product__price"><?php echo $product->get_price_html(); ?></div>
								<div class="product__id"><?php echo $product->get_sku(); ?></div>
							</div>

						</div>

						<?php echo woocommerce_template_single_add_to_cart(); ?>

					</div>
					<div class="product__description">
						<h5 class="product__text"><?php pll_e('Опис'); ?></h5>
						<?php the_content(); ?>
					</div>

				</div>

			</section>



			<section data-aos="fade-up" class="recommended">
				<h3 class="recommended__title heading-3"><?php pll_e('Вам може сподобатись'); ?></h3>

				<div class="recommended__grid ">
					<?php $args = array( 'posts_per_page' => 3, 'post_type' => 'product', 'post_status' => 'publish' );
					$query = new WP_Query( $args );
					if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post();
						wc_get_template_part( 'content', 'product' );
					} } else {
					// Not found
					} wp_reset_postdata(); ?>
				</div>
				<a type='button' href='<?php bloginfo('url'); ?>/shop/' class="bordered-button"><?php pll_e('Показати більше'); ?></a>

			</section>
		</div>
	</main>


	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	//do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		//do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	//do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
