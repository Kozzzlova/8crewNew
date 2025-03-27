jQuery(document).ready(function ($) {
	$('.variation-button').on('click', function (event) {
		event.preventDefault();
		var attributeName = $(this).data('attribute');
		var attributeValue = $(this).data('value');

		console.log(attributeName);

		// Убираем выделение с других кнопок
		$('.variation-button[data-attribute="' + attributeName + '"]').removeClass('selected');
		$(this).addClass('selected');

		// Устанавливаем значение в скрытый input формы
		$('select[name="' + attributeName + '"]').val(attributeValue).trigger('change');

		// Автоматическое обновление вариации
		$('form.variations_form').trigger('check_variations');
	});




	function validateForm() {
		let isValid = true;
		let errorMessage = '';

		// Очистка предыдущих ошибок
		$('.error-message').remove();

		const firstName = $('#first_name').val().trim();
		const lastName = $('#last_name').val().trim();
		const email = $('#email').val().trim();
		const phone = $('#phone').val().trim();
		const password = $('#reg-password').val();

		// Проверка Імʼя
		if (!firstName) {
			errorMessage = 'Імʼя обовʼязкове для заповнення.';
			$('#first_name').after(`<span class="error-message">${errorMessage}</span>`);
			isValid = false;
		}

		// Проверка Прізвище
		if (!lastName) {
			errorMessage = 'Прізвище обовʼязкове для заповнення.';
			$('#last_name').after(`<span class="error-message">${errorMessage}</span>`);
			isValid = false;
		}

		// Проверка Email
		if (!email) {
			errorMessage = 'Email обовʼязковий для заповнення.';
			$('#email').after(`<span class="error-message">${errorMessage}</span>`);
			isValid = false;
		} else if (!validateEmail(email)) {
			errorMessage = 'Введіть дійсну email-адресу.';
			$('#email').after(`<span class="error-message">${errorMessage}</span>`);
			isValid = false;
		}

		// Проверка Номер телефону
		if (!phone) {
			errorMessage = 'Номер телефону обовʼязковий для заповнення.';
			$('#phone').after(`<span class="error-message">${errorMessage}</span>`);
			isValid = false;
		} else if (!validatePhone(phone)) {
			errorMessage = 'Введіть дійсний номер телефону (наприклад, +380123456789).';
			$('#phone').after(`<span class="error-message">${errorMessage}</span>`);
			isValid = false;
		}

		// Проверка Пароль
		if (!password) {
			errorMessage = 'Пароль обовʼязковий для заповнення.';
			$('#reg-password').after(`<span class="error-message">${errorMessage}</span>`);
			isValid = false;
		} else if (password.length < 6) {
			errorMessage = 'Пароль повинен містити не менше 6 символів.';
			$('#reg-password').after(`<span class="error-message">${errorMessage}</span>`);
			isValid = false;
		}

		return isValid;
	}

	function validateEmail(email) {
		const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
		return re.test(email);
	}

	function validatePhone(phone) {
		const re = /^\+?[0-9]{10,15}$/;
		return re.test(phone);
	}

	$('#custom-register-btn').on('click', function (e) {
		e.preventDefault();

		if (!validateForm()) {
			return;
		}

		const formData = {
			action: 'custom_registration',
			nonce: nonce,
			first_name: $('#first_name').val().trim(),
			last_name: $('#last_name').val().trim(),
			email: $('#email').val().trim(),
			phone: $('#phone').val().trim(),
			password: $('#reg-password').val(),
		};

		$.post(ajax_url, formData, function (response) {
			$('#custom-registration-response').html(`<p>${response.message}</p>`);

			if (response.status === 'success') {
				$('#custom-registration-form').trigger('reset');
			}
		});
	});



});
