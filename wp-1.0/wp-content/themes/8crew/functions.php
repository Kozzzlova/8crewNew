<?php 
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wp_shortlink_wp_head');
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action( 'wp_head', 'feed_links_extra', 3);
remove_action( 'wp_head', 'feed_links', 2 );
remove_action('wp_head','rel_canonical');
remove_action( 'wp_head', 'index_rel_link' );



// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// delete type=''
add_filter('style_loader_tag', 'clean_style_tag');
function clean_style_tag($src) {
    return str_replace("type='text/css'", '', $src);
}
add_filter('script_loader_tag', 'clean_script_tag');
function clean_script_tag($src) {
    return str_replace("type='text/javascript'", '', $src);
}

// remove gutteberg
add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
function wps_deregister_styles() {
    wp_dequeue_style( 'wp-block-library' );
}


// Разрешение загрузки SVG файлов
function svg_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	$mimes['svgz'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'svg_mime_types');




// Регистрация меню
function register_my_menus(){
    register_nav_menus( array(
    	'tnav' => 'Header',
		'fnav-first' => 'Footer First',
		'fnav-second' => 'Footer Second',
		'mod1nav' => 'Модалка Перше',
		'mod2nav' => 'Модалка Бренди'
	) );
} add_action( 'init', 'register_my_menus' );






add_theme_support( 'post-thumbnails' );



// Длина цитаты
function custom_excerpt_length() {
     $length = 40;
     return $length;
}
add_filter('excerpt_length', 'custom_excerpt_length');


if (file_exists(TEMPLATEPATH.'/template-parts/func-polylang.php')) {
	require(TEMPLATEPATH.'/template-parts/func-polylang.php');
}


function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

//
//add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);
//function add_my_currency_symbol( $currency_symbol, $currency ) {
//	switch( $currency ) {
//		case 'UAH': $currency_symbol = 'грн'; break;
//	}
//	return $currency_symbol;
//}
//




function my_custom_scripts() {
	$version = current_time('YmdHis');
	//wp_enqueue_script('aos', get_template_directory_uri() . '/script/AOS.js', '', $version, true);
	wp_enqueue_script('headerDropdown', get_template_directory_uri() . '/script/headerDropdown.js', '', $version, true);
	wp_enqueue_script('searchMobile', get_template_directory_uri() . '/script/searchMobile.js', '', $version, true);
	wp_enqueue_script('searchDropdown', get_template_directory_uri() . '/script/searchDropdown.js', '', $version, true);
	wp_enqueue_script('breadcrumps', get_template_directory_uri() . '/script/breadcrumps.js', '', $version, true);
	wp_enqueue_script('8crew-accordion', get_template_directory_uri() . '/script/accordion.js', '', $version, true);
	wp_enqueue_script('sizeModal', get_template_directory_uri() . '/script/sizeModal.js', '', $version, true);
	wp_enqueue_script('loginPopup', get_template_directory_uri() . '/script/loginPopup.js', '', $version, true);
	wp_enqueue_script('logoutPopup', get_template_directory_uri() . '/script/logoutPopup.js', '', $version, true);
	wp_enqueue_script('likeButtonsHandler', get_template_directory_uri() . '/script/likeButtonsHandler.js', '', $version, true);
	wp_enqueue_script('basketButtonsHandler', get_template_directory_uri() . '/script/basketButtonsHandler.js', '', $version, true);
	wp_enqueue_script('characteristicsOptionsHandler', get_template_directory_uri() . '/script/characteristicsOptionsHandler.js', '', $version, true);
	wp_enqueue_script('main', get_template_directory_uri() . '/script/jquery.main.js', '', $version, true);
	wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/script/swiper-bundle.js', '', $version, true);
	//wp_enqueue_script('swiper', get_template_directory_uri() . '/script/swiper.js', '', $version, true);
	wp_enqueue_script('swiper', get_template_directory_uri() . '/script/swiper.js', array('swiper-bundle'), $version, true);
	//wp_enqueue_script('aos', get_template_directory_uri() . '/script/custom.js', '', $version, true);
}
add_action('wp_enqueue_scripts', 'my_custom_scripts');




if (function_exists('acf_add_options_page')) {
	// Main Theme Settings Page
	//acf_add_options_page();

	$parent = acf_add_options_page(array(
		'page_title' => 'Archive General Settings',
		'menu_title' => 'Archive Settings',
		'redirect' => 'Archive Settings',
	));

	$languages = array();

	$langs_array = pll_the_languages( array( 'dropdown' => 1, 'raw' => 1 ) );
	foreach ($langs_array as $lang) :
		$languages[] = $lang['slug'];
	endforeach;

	//
	// Language Specific Options
	// Translatable options specific languages. e.g., social profiles links
	//
	foreach ($languages as $lang) {
		acf_add_options_sub_page(array(
			'page_title' => 'Options (' . strtoupper($lang) . ')',
			'menu_title' => __('Options (' . strtoupper($lang) . ')', 'text-domain'),
			'menu_slug' => "options-${lang}",
			'post_id' => $lang,
			'parent' => $parent['menu_slug']
		));
	}
}



// получить диапазон размеров
function get_min_max_variation_size($product_id, $attribute = 'pa_size') {
	$product = wc_get_product($product_id);

	if (!$product || !$product->is_type('variable')) {
		return false;
	}

	$variations = $product->get_available_variations();
	$sizes = [];

	foreach ($variations as $variation) {
		if (isset($variation['attributes']["attribute_$attribute"])) {
			$sizes[] = $variation['attributes']["attribute_$attribute"];
		}
	}

	// Убираем дубликаты и сортируем размеры
	$sizes = array_unique($sizes);
	natsort($sizes); // Натуральная сортировка

	return reset($sizes) . '-' . end($sizes);
}




// получить минимальную цену вариации
function get_min_variation_price($product_id) {
	$product = wc_get_product($product_id);
	if (!$product || !$product->is_type('variable')) {
		return false;
	}
	$variations = $product->get_available_variations();
	$prices = [];
	foreach ($variations as $variation) {
		if (isset($variation['display_price'])) {
			$prices[] = $variation['display_price']; // Цена с учетом скидки
		}
	}
	if (!empty($prices)) {
		return min($prices);
	}
	return false;
}

function get_min_variation_price_cached($product_id) {
	$cache_key = 'min_variation_price_' . $product_id;
	$cached_price = get_transient($cache_key);
	if ($cached_price !== false) {
		return $cached_price;
	}
	$min_price = get_min_variation_price($product_id);
	if ($min_price !== false) {
		set_transient($cache_key, $min_price, HOUR_IN_SECONDS); // Кэш на 1 час
	}
	return $min_price;
}





function handle_custom_registration_ajax() {
	check_ajax_referer('custom_registration_action', 'nonce');

	$response = ['status' => 'error', 'message' => ''];

	$first_name = sanitize_text_field($_POST['first_name']);
	$last_name = sanitize_text_field($_POST['last_name']);
	$email = sanitize_email($_POST['email']);
	$phone = sanitize_text_field($_POST['phone']);
	$password = $_POST['password'];

	// Валидация полей
	if (empty($first_name) || empty($last_name) || empty($email) || empty($phone) || empty($password)) {
		$response['message'] = __('Усі поля обовʼязкові для заповнення.', 'woocommerce');
		wp_send_json($response);
	}

	if (!is_email($email)) {
		$response['message'] = __('Введіть дійсну email-адресу.', 'woocommerce');
		wp_send_json($response);
	}

	if (email_exists($email)) {
		$response['message'] = __('Ця email-адреса вже зареєстрована.', 'woocommerce');
		wp_send_json($response);
	}

	// Создание пользователя
	$user_id = wp_create_user($email, $password, $email);
	if (!is_wp_error($user_id)) {
		wp_update_user([
			'ID' => $user_id,
			'first_name' => $first_name,
			'last_name' => $last_name,
		]);

		update_user_meta($user_id, 'phone', $phone);
		$response['status'] = 'success';
		$response['message'] = __('Реєстрація пройшла успішно!', 'woocommerce');
	} else {
		$response['message'] = $user_id->get_error_message();
	}

	wp_send_json($response);
}
add_action('wp_ajax_nopriv_custom_registration', 'handle_custom_registration_ajax');
add_action('wp_ajax_custom_registration', 'handle_custom_registration_ajax');





// search on popup
add_action('wp_footer', 'ajax_search_script');
function ajax_search_script() {
	?>
	<script>
		jQuery(document).ready(function($){
			$('.search-form__input').keyup(function(){
				var query = $(this).val();
				if(query.length > 2){
					$.ajax({
						url: '<?php echo site_url(); ?>/wp-admin/admin-ajax.php',
						type: 'POST',
						data: { action: 'woocommerce_ajax_search', query: query },
						success:function(data){
							$('.search-form__items').html(data);
						}
					});
				} else {
					$('.search-form__items').html('');
				}
			});
		});
	</script>
	<?php
}

add_action('wp_ajax_woocommerce_ajax_search', 'woocommerce_ajax_search');
add_action('wp_ajax_nopriv_woocommerce_ajax_search', 'woocommerce_ajax_search');

function woocommerce_ajax_search() {
	$query = sanitize_text_field($_POST['query']);
	$args = array(
		'post_type' => 'product',
		'posts_per_page' => 5,
		's' => $query
	);
	$products = new WP_Query($args);
	if ($products->have_posts()) {
		while ($products->have_posts()) {
			$products->the_post();
			echo '<a href="'.get_permalink().'" class="search-item">
				<span class="search-item__img">' .  get_the_post_thumbnail() . '</span>
				<div class="search-item__info">
					<div class="search-item__title">' . get_the_title() . '</div>
					<div class="search-item__price">' . pll__('від') . get_min_variation_price_cached(get_the_ID() ) . " " . get_woocommerce_currency_symbol() . '</div>
				</div>
			</a>';
		 }
	} else {
		echo '<div>Ничего не найдено</div>';
	}
	wp_die();
}




function change_woocommerce_products_per_page( $cols ) {
	return 15; // Количество товаров на странице
}
add_filter( 'loop_shop_per_page', 'change_woocommerce_products_per_page', 20 );
