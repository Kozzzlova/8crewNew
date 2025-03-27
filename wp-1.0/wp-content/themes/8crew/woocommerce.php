<?php get_header(); ?>


<?php if ( is_singular( 'product' ) or is_page('cart') ) {
	woocommerce_content();
}else{
	woocommerce_get_template( 'archive-product.php' );
} ?>


<?php get_footer(); ?>