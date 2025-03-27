const dropdown = document.querySelector('.dropdown');
const handler = document.querySelector('.dropdown-handler');
const mobileHandler = document.querySelector('.dropdown-mobile-handler');
const closeBtn = document.querySelector('.dropdown__close');

if( handler ) {
	handler.addEventListener('click', (e) => {
		e.preventDefault();
		if (dropdown.classList.contains('open')) {
			dropdown.classList.remove('open');
		} else {
			dropdown.classList.add('open');
		}
	});
}

if( mobileHandler ) {
	mobileHandler.addEventListener('click', (e) => {
		e.preventDefault();
		if (dropdown.classList.contains('open')) {
			dropdown.classList.remove('open');
		} else {
			dropdown.classList.add('open');
		}
	});
}

if( closeBtn ) {
	closeBtn.addEventListener('click', () => {
		dropdown.classList.remove('open');
	});
}

if( dropdown ) {
	dropdown.addEventListener('mouseleave', () => {
		dropdown.classList.remove('open');
	});
}
