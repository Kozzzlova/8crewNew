<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
</head>

<body>
<div class="wrapper">


<div class="header-label">
    <div class="container">
        <div class="header-label__container">
			<?php if( get_field('header_info', alao_current_lang() ) ) { ?>
            <span class='header-label__text'><?php the_field('header_info', alao_current_lang() ); ?></span>
			<?php } ?>

			<?php $langs_array = pll_the_languages( array( 'dropdown' => 1, 'raw' => 1 ) ); ?>
			<?php if ($langs_array) : ?>
				<div class='header-label__language'>
					<?php foreach ($langs_array as $lang) : ?>
						<a href="<?php echo $lang['url']; ?>" class="header-label__button <?php if( $lang['slug'] == alao_current_lang() ) { echo ' active'; } ?>">
							<?php echo $lang['slug']; ?>
						</a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
        </div>

    </div>
</div>
<header class="header">

    <div class="container">
        <div class="header__main">
            <div class="header__navbar">
                <div class="header__logo">
                    <a href='<?php bloginfo('url'); ?>/' class="logo">
						<?php $image = get_field('logo', alao_current_lang() );
						if( $image['id'] ) {echo wp_get_attachment_image( $image['id'], 'full' ); } ?>
                    </a>
                </div>

                <nav class="header__nav">
					<?php wp_nav_menu('menu_class=header__menu&theme_location=tnav&container=false'); ?>
                </nav>

            </div>
            <div class="header__search">
                <form class="search-form" action="<?php bloginfo('url'); ?>/" method="POST">

                    <button type='submit' class='search-form__button'>
                        <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill="none">
                            <use xlink:href="#search"></use>
                        </svg>
                    </button>
                    <input type="text" name="s" class='search-form__input' id="s" value="<?php echo get_search_query(); ?>">
					<input type="hidden" name="post_type" value="product">
					<!--                    <button type='button' class="search-form__close">-->
<!--                        <svg width='24' height='24' viewBox="0 0 24 24" fill="none">-->
<!--                            <use xlink:href="#close-circle"></use>-->
<!--                        </svg>-->
<!--                    </button>-->

                </form>

            </div>

            <div class="header__menu">
                    <a class='icon-link' href="#">
                        <svg class="icon" width='24' height='24' viewBox="0 0 24 24">

                            <use xlink:href="#basket"></use>
                        </svg>
                    </a>
                    <a class='icon-link' href="<?php bloginfo('url'); ?>/favorites/">
                        <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill="none">
                            <use xlink:href="#like"></use>
                        </svg>
                    </a>

<!--					--><?php //if( is_user_logged_in() ) { ?>
<!--                    <a id="header-login" href="--><?php //bloginfo('url'); ?><!--/my-account/">-->
<!--                        <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill="none">-->
<!--                            <use xlink:href="#person"></use>-->
<!--                        </svg>-->
<!--                    </a>-->
<!--					--><?php //} else { ?>
<!--					<button role="button" aria-label="Login" class='icon-link header__login'>-->
<!--						<svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill="none">-->
<!--							<use xlink:href="#person"></use>-->
<!--						</svg>-->
<!--					</button>-->
<!--					--><?php //} ?>

					<div class="header-account">
						<span id="header-login" class='icon-link'>
							<svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<use xlink:href="#person"></use>
							</svg>
						</span>
						<div class="header-account__popup">
							<?php if( is_user_logged_in() ) { ?>
							<div class="header-account__profile">
								<a href="profilePage" class="header-account__button"><?php pll_e('Мої дані'); ?></a>
								<a href="ordersPage" class="header-account__button"><?php pll_e('Мої замовлення'); ?></a>
								<button class="header-account__button logout" id="logout" type="button"><?php pll_e('Вийти'); ?></button>
							</div>
							<?php } else { ?>
							<div class="header-account__login">
								<button class="header-account__button" data-target="popup-login" type="button"><?php pll_e('Увійти'); ?></button>
								<button class="header-account__button" data-target="popup-register" type="button"><?php pll_e('Зареєструватися'); ?></button>
							</div>
							<?php } ?>
						</div>
					</div>
            </div>

            <nav class="header__nav-mobile">
				<?php wp_nav_menu('menu_class=header__menu&theme_location=tnav&container=false'); ?>
            </nav>
        </div>

    </div>
    <div class="search-form__body">
<!--        <div class="search-form__suggestions">-->
<!---->
<!--            <a class="search-form__option" href="#">-->
<!--                <span>-->
<!--                    <mark>Air</mark>-->
<!--                    Jordan-->
<!--                </span>-->
<!--                <svg width='16' height='16' viewBox="0 0 16 16" fill="none">-->
<!--                    <use xlink:href="#arrow"></use>-->
<!--                </svg>-->
<!--            </a>-->
<!---->
<!--        </div>-->
        <div class="search-form__items"></div>
    </div>


	<div class="dropdown">
        <button type='button' class="dropdown__close">
            <svg class="icon" width='24' height='24' viewBox="0 0 24 24" fill="none">
                <use href='#close-circle'></use>
            </svg>
        </button>

		<div class="dropdown__lists">
			<div class="dropdown__block">
				<div class="dropdown__title"><?php pll_e('Каталог'); ?></div>
				<?php wp_nav_menu('menu_class=dropdown__list&theme_location=mod1nav&container=false'); ?>
			</div>
			<div class="dropdown__block">
				<div class="dropdown__title"><?php pll_e('Бренди'); ?></div>
				<?php wp_nav_menu('menu_class=dropdown__list&theme_location=mod2nav&container=false'); ?>
			</div>
        </div>
		<?php $post_objects = get_field('modal_bestseller_list', alao_current_lang() );
		if( $post_objects ): ?>
        <div class="dropdown__bestsellers">
            <div class="dropdown__title"><?php pll_e('Бестселери'); ?></div>
            <div class="dropdown__products">
                <div class="dropdown__grid">
					<?php foreach( $post_objects as $post): setup_postdata($post); ?>
						<?php wc_get_template_part( 'content', 'product' ); ?>
					<?php endforeach;
					wp_reset_postdata(); ?>
                </div>
                <a href='<?php bloginfo('url'); ?>/shop/' class="dropdown__button"><?php pll_e('Показати більше'); ?></a>

            </div>
        </div>
		<?php endif; ?>
    </div>
</header>