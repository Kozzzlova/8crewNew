<div class="popup">

	<div class="popup__body" id="popup-login">
		<button type='button' class="popup__close">
			<svg class="icon">
				<use href="#close-circle"></use>
			</svg>
		</button>
		<div class="popup__title heading-4">Увійти в сервіс</div>
		<form class="woocommerce-form woocommerce-form-login login login-form" method="post">
			<div class="login-form__fields">
				<div class="login-form__field">
					<div class="login-form__label">Email</div>
					<input type="email" class="login-form__input woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" required aria-required="true" placeholder='Ваша адреса пошти'>
				</div>
				<div class="login-form__field">
					<div class="login-form__label">пароль</div>
					<input type="password" class="login-form__input woocommerce-Input woocommerce-Input--text input-text" name="password" id="password" autocomplete="current-password" required aria-required="true" placeholder='Введіть пароль'>
					<a href="#" class="login-form__password-forgot">Забули пароль?</a>
				</div>
			</div>
			<button type='submit' class="login-form__button woocommerce-button woocommerce-form-login__submit<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
		</form>
	</div>




	<?php if ( ! is_user_logged_in()) { ?>
	<div class="popup__body" id="popup-register">
		<button type='button' class="popup__close">
			<svg class="icon">
				<use href="#close-circle"></use>
			</svg>
		</button>
		<div class="popup__title">
			<div class="heading-4">Зареєструватися на сервісі</div>

		</div>
		<form class="woocommerce-form woocommerce-form-login login-form" id="custom-registration-form">
			<div class="login-form__fields">
				<div class="login-form__field">
					<div class="login-form__label">Імʼя</div>
					<input type="text" name="first_name" id="first_name" class="login-form__input" placeholder='Олександр' required>
				</div>
				<div class="login-form__field">
					<div class="login-form__label">Прізвище</div>
					<input type="text" name="last_name" id="last_name" class="login-form__input" placeholder='Олександр' required>
				</div>
				<div class="login-form__field">
					<div class="login-form__label">Email</div>
					<input type="email" name="email" id="email" class="login-form__input" placeholder='Cartoonbelly@gmail.com' required>
				</div>
				<div class="login-form__field">
					<div class="login-form__label">Номер телефону</div>
					<input type="tel" name="phone" id="phone" class="login-form__input" placeholder='+380 099 595 54 55' required>
				</div>
				<div class="login-form__field">
					<div class="login-form__label">Пароль</div>
					<input type="password" name="password" id="reg-password" class="login-form__input" placeholder='***************' required>
				</div>
			</div>
			<button type='button' class="login-form__button" id="custom-register-btn">Зареєструватися</button>
			<?php wp_nonce_field('custom_registration_action', 'custom_registration_nonce'); ?>
		</form>
		<div id="custom-registration-response"></div>
	</div>
	<?php } ?>



	<div class="popup__body" id="popup-confirmation-code">
		<button type="button" class="popup__close">
			<svg class="icon">
				<use href="#close-circle"></use>
			</svg>
		</button>
		<div class="popup__title">
			<div class="heading-4">Введіть код</div>
			<div class="popup__subtitle">Ми вислали код на вашу електронну адресу, введіть його нижче щоб продовжити</div>

		</div>
		<form class="login-form">
			<div class="login-form__fields">
				<div class="login-form__field">
					<div class="login-form__code">
						<input type="number" min="0" max="9" maxlength="1" oninput="this.value = this.value.slice(0, 1)" class=" login-form__cell" placeholder="1">
						<input type="number" min="0" max="9" maxlength="1" oninput="this.value = this.value.slice(0, 1)" class=" login-form__cell" placeholder="2">
						<input type="number" min="0" max="9" maxlength="1" oninput="this.value = this.value.slice(0, 1)" class=" login-form__cell" placeholder="3">
						<input type="number" min="0" max="9" maxlength="1" oninput="this.value = this.value.slice(0, 1)" class=" login-form__cell" placeholder="4">
						<input type="number" min="0" max="9" maxlength="1" oninput="this.value = this.value.slice(0, 1)" class=" login-form__cell" placeholder="5">

					</div>
				</div>
			</div>
			<button type="button" class="login-form__button">Продовжити</button>
		</form>
	</div>



	<div class="popup__body" id="popup-forgot-password">
		<button type="button" class="popup__close">
			<svg class="icon">
				<use href="#close-circle"></use>
			</svg>
		</button>
		<div class="popup__title">
			<div class="heading-4">Введіть свій Email</div>
			<div class="popup-subtitle">Ми вишлемо на вашу пошту код для відновлення</div>
		</div>
		<form class="login-form">
			<div class="login-form__fields">
				<div class="login-form__field">
					<div class="login-form__label">Email</div>
					<input type="email" class="login-form__input" placeholder="Ваша адреса пошти">
				</div>

			</div>
			<button type="button" class="login-form__button">Сбросити пароль</button>
		</form>
	</div>



	<div class="popup__logout" id="popup-logout">
		<span>Ви впевнені що хочете вийти?</span>
		<div class="popup__buttons">
			<button type="button" class="bordered-button popup__button" id="close-logout">Ні</button>
			<button type="button" class="main-button popup__button">Так</button>
		</div>
	</div>


</div>