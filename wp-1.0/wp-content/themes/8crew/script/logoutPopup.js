document.addEventListener('DOMContentLoaded', () => {
	const logoutButton = document.getElementById('logout');
	const popup = document.querySelector('.popup');
	const logoutPopup = document.querySelector('.popup__logout');
	const accountPopup = document.querySelector('.header-account__popup');
	const accountProfile = document.querySelector('.header-account__profile');
	const closeLogout = document.getElementById('close-logout');
	try {
		logoutButton.addEventListener('click', () => {
			document.body.classList.add('fixed');
			popup.classList.add('open');
			logoutPopup.classList.add('open');
			accountPopup.classList.remove('open');
			accountProfile.classList.remove('open');
		});
	
		closeLogout.addEventListener('click', () => {
			document.body.classList.remove('fixed');
			popup.classList.remove('open');
			logoutPopup.classList.remove('open');
		});
	} catch (e) {

	}
});