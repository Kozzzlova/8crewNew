<?php
//polylang
function alao_current_lang() {
return pll_current_language();
}



add_action('init', function() {
	pll_register_string('wine', 'Від');
	pll_register_string('wine', 'Розмірна сітка');
	pll_register_string('wine', 'Блог');
	pll_register_string('wine', 'Показати усе');
	pll_register_string('wine', 'Показати більше');
	pll_register_string('wine', 'Опис');
	pll_register_string('wine', 'Вам може сподобатись');
	pll_register_string('wine', 'Поиск');
	pll_register_string('wine', 'Закрыть поиск');
	pll_register_string('wine', 'Каталог');
	pll_register_string('wine', 'Бренди');
	pll_register_string('wine', 'Бестселери');

	pll_register_string('wine', 'Мої дані');
	pll_register_string('wine', 'Мої замовлення');
	pll_register_string('wine', 'Вийти');
	pll_register_string('wine', 'Увійти');
	pll_register_string('wine', 'Зареєструватися');

	pll_register_string('wine', 'Сортувати за');
	pll_register_string('wine', 'Ціна');
	pll_register_string('wine', 'Колекція');
	pll_register_string('wine', 'Колір');
	pll_register_string('wine', 'Розмір');
	pll_register_string('wine', 'Фільтри');
	pll_register_string('wine', 'Результати пошуку:');
	pll_register_string('wine', 'товари');

	pll_register_string('wine', 'Каталог');

});

