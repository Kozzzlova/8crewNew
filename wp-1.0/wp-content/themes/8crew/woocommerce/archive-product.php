<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
$term = get_queried_object();
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
//do_action( 'woocommerce_before_main_content' ); ?>


	<main class="main">
		<div class="container">
			<section class="catalog">
				<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<nav class="breadcrumps">','</nav>' );
				} ?>

				<?php if( ! is_search() ) { ?>
				<div class="catalog__header">
					<div class="catalog__image">
						<div class="catalog__heading hidden">
							<div class="catalog__title heading-4"><?php single_cat_title(); ?></div>
							<p class='catalog__amount'><?php echo $term->count; ?> <?php pll_e('товари'); ?></p>
						</div>
						<?php $image = get_field('prod_cat_img_1', 'term_' . $term->term_id);
						if( $image['id'] ) {echo wp_get_attachment_image( $image['id'], 'full' ); } ?>
					</div>
					<div class="catalog__image">
						<div class="catalog__heading">
							<div class="catalog__title heading-4"><?php single_cat_title(); ?></div>
							<p class='catalog__amount'><?php echo $term->count; ?> <?php pll_e('товари'); ?></p>
						</div>
						<?php $image = get_field('prod_cat_img_2', 'term_' . $term->term_id);
						if( $image['id'] ) {echo wp_get_attachment_image( $image['id'], 'full' ); } ?>
					</div>
					<div class="catalog__image column">
						<?php $image = get_field('prod_cat_img_3', 'term_' . $term->term_id);
						if( $image['id'] ) {echo wp_get_attachment_image( $image['id'], 'full' ); } ?>

						<?php $image = get_field('prod_cat_img_4', 'term_' . $term->term_id);
						if( $image['id'] ) {echo wp_get_attachment_image( $image['id'], 'full' ); } ?>
					</div>
				</div>
				<?php } else { ?>
					<div class="search__title heading-4"><?php pll_e('Результаты поиска:'); ?> "<?php echo get_search_query(); ?>"</div>
				<?php } ?>


				<?php if ( woocommerce_product_loop() ) { ?>
				<section class='catalog__content'>
					<?php if( ! is_search() ) { ?>
					<div class="catalog__options">
						<button type='button' class="catalog__filter-btn">
							<img src="<?php bloginfo('template_directory'); ?>/icon/options.svg" alt="Options icon">
							<span><?php pll_e('Фільтри'); ?></span>
						</button>
						<div class="catalog__filter">
							<div class="select">
								<button type='button' class="select__button">
									<span><?php pll_e('Розмір'); ?></span> <img src="<?php bloginfo('template_directory'); ?>/public/icon/arrow-black.svg" alt="Arrow">
								</button>

							</div>
							<div class='select'>
								<button type='button' class="select__button">
									<span><?php pll_e('Колір'); ?></span> <img src="<?php bloginfo('template_directory'); ?>/public/icon/arrow-black.svg" alt="Arrow">
								</button>
							</div>
							<div class='select'>
								<button class="select__button">
									<span><?php pll_e('Колекція'); ?></span> <img src="<?php bloginfo('template_directory'); ?>/public/icon/arrow-black.svg" alt="Arrow">
								</button>
							</div>
							<div class='select'>
								<button type='button' class="select__button">
									<span><?php pll_e('Ціна'); ?></span> <img src="<?php bloginfo('template_directory'); ?>/public/icon/arrow-black.svg" alt="Arrow">
								</button>
							</div>
						</div>
						<div class="catalog__sort">
							<div class='select'>
								<button type='button' class="select__button">
									<span><?php pll_e('Сортувати за'); ?></span> <img src="<?php bloginfo('template_directory'); ?>/public/icon/arrow-black.svg" alt="Arrow">
								</button>
							</div>
						</div>
					</div>
					<?php } ?>


					<section class="catalog__grid">
						<?php if ( wc_get_loop_prop( 'total' ) ) {
							while ( have_posts() ) {
								the_post();
								do_action( 'woocommerce_shop_loop' );
								wc_get_template_part( 'content', 'product' );
							}
						} ?>
					</section>

					<?php
					echo '<div class="catalog__pagination pagination">';
					woocommerce_pagination();
//					$args = array(
//						'base'      => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
//						'total'     => $wp_query->max_num_pages,
//						'current'   => max(1, get_query_var('paged')),
//						'format'    => '/page/%#%',
//						'prev_next' => false,
//					);
//					echo paginate_links($args);
					echo '</div>';
					?>
				</section>
				<?php } else {
					/**
					 * Hook: woocommerce_no_products_found.
					 *
					 * @hooked wc_no_products_found - 10
					 */
					do_action( 'woocommerce_no_products_found' );
				} ?>

			</section>
		</div>
	</main>


<?php

get_footer( 'shop' );
