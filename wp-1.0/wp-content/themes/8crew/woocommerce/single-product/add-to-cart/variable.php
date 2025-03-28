<?php
/**
 * Variable product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/variable.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 6.1.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

$attribute_keys  = array_keys( $attributes );
$variations_json = wp_json_encode( $available_variations );
$variations_attr = function_exists( 'wc_esc_json' ) ? wc_esc_json( $variations_json ) : _wp_specialchars( $variations_json, ENT_QUOTES, 'UTF-8', true );

do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<form class="variations_form cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->get_id() ); ?>" data-product_variations="<?php echo $variations_attr; // WPCS: XSS ok. ?>">
	<?php do_action( 'woocommerce_before_variations_form' ); ?>

	<?php if ( empty( $available_variations ) && false !== $available_variations ) : ?>
		<p class="stock out-of-stock"><?php echo esc_html( apply_filters( 'woocommerce_out_of_stock_message', __( 'This product is currently out of stock and unavailable.', 'woocommerce' ) ) ); ?></p>
	<?php else : ?>
		<table class="variations" cellspacing="0" role="presentation">
			<tbody>

			</tbody>
		</table>



	<?php if (!$product || !$product->is_type('variable')) {
			return;
		}

		// Получаем все вариации
		$variations = $product->get_available_variations();
		$attributes = $product->get_attributes();
		$selected_attributes = $product->get_default_attributes();

		if ($variations) {
			echo '<div class="characteristics">';
			foreach ($attributes as $attribute_name => $attribute) {
				if ($attribute->get_variation()) {
					$options = $attribute->get_options();
					$attribute_label = wc_attribute_label($attribute_name);

					echo '<div class="characteristics__item">
								<div class="characteristics__heading">
									<div class="characteristics__title">' . esc_html($attribute_label) . '</div>';
					if( $attribute_name == 'pa_size') {
						echo '<button type="button" class="characteristics__button size-button">Розмірна сітка</button>';
						}
					echo '</div>';

					echo '<div class="characteristics__options">';
					foreach ($options as $option) {
						// Проверяем, выбран ли атрибут по умолчанию
						$is_selected = isset($selected_attributes[$attribute_name]) && $selected_attributes[$attribute_name] === $option;

						// Получаем читабельное название значения атрибута
						$option_name = $option;

						// Если атрибут таксономический, преобразуем значение
						if ($attribute->is_taxonomy()) {
							$term = get_term_by('id', $option, $attribute_name);
							if ($term) {
								$option_name = $term->name;
							}
						}

						if( $attribute_name == 'pa_size') {
							$type = 'size';
						} else {
							$type = 'palette';
						}

						echo '<button class="variation-button characteristics__element '. $type . ($is_selected ? ' active selected' : '') . '" data-attribute="' . esc_attr($attribute_name) . '" data-value="' . esc_attr($option) . '">';
						echo esc_html($option_name);
						echo '</button>';
					}
					echo '</div>';

					echo '</div>';
				}
			}
		} ?>

		<?php do_action( 'woocommerce_after_variations_table' ); ?>

		<div class="single_variation_wrap">
			<?php
				/**
				 * Hook: woocommerce_before_single_variation.
				 */
				do_action( 'woocommerce_before_single_variation' );

				/**
				 * Hook: woocommerce_single_variation. Used to output the cart button and placeholder for variation data.
				 *
				 * @since 2.4.0
				 * @hooked woocommerce_single_variation - 10 Empty div for variation data.
				 * @hooked woocommerce_single_variation_add_to_cart_button - 20 Qty and cart button.
				 */
				do_action( 'woocommerce_single_variation' );

				/**
				 * Hook: woocommerce_after_single_variation.
				 */
				do_action( 'woocommerce_after_single_variation' );
			?>
		</div>
	<?php endif; ?>

	<?php do_action( 'woocommerce_after_variations_form' ); ?>
</form>

<?php
do_action( 'woocommerce_after_add_to_cart_form' );
