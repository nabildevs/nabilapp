// Navbar Fixed
window.onscroll = function () {
	const header = document.querySelector('header');
	const fixedNav = header.offsetTop;

	header.classList.add('navbar-fixed');

	if (!window.scrollY > fixedNav) {
		header.classList.remove('navbar-fixed');
	}
};

// Hamburger
const hamburger = document.querySelector('#hamburger');
const headMenu = document.querySelector('#head-menu');

hamburger.addEventListener('click', function () {
	hamburger.classList.toggle('hamburger-active');
	headMenu.classList.toggle('hidden');
});
