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
//if ( get_query_var('post_type') !== 'product' ) {
//	wp_redirect( home_url() ); // Если поиск не по товарам, перенаправляем на главную
//	exit;
//}
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

				<div class="search__title heading-4">Результаты поиска: "<?php echo get_search_query(); ?>"</div>

				<?php if ( have_posts() ) : ?>
				<section class='catalog__content'>

					<section class="products catalog__grid">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php wc_get_template_part( 'content', 'product' ); ?>
					<?php endwhile; ?>
					</section>
					<?php echo '<div class="catalog__pagination pagination">';
					//woocommerce_pagination();
					$args = array(
						'base'      => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
						'total'     => $wp_query->max_num_pages,
						'current'   => max(1, get_query_var('paged')),
						'format'    => '/page/%#%',
						'prev_next' => false,
					);
					echo paginate_links($args);
					echo '</div>'; ?>

				</section>
				<?php else : ?>
					<p>Ничего не найдено.</p>
				<?php endif; ?>

			</section>
		</div>
	</main>


<?php

get_footer( 'shop' );
