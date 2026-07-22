import './bootstrap';

const root = document.documentElement;
const toggleButton = document.getElementById('themeToggle');
const moonIcon = document.getElementById('themeIconMoon');
const sunIcon = document.getElementById('themeIconSun');
const storageKey = 'jokiin-theme';

if (toggleButton && moonIcon && sunIcon) {
	const applyTheme = (theme) => {
		const nextTheme = theme === 'light' ? 'light' : 'dark';

		root.classList.toggle('theme-light', nextTheme === 'light');
		root.classList.toggle('theme-dark', nextTheme === 'dark');
		moonIcon.classList.toggle('hidden', nextTheme === 'light');
		sunIcon.classList.toggle('hidden', nextTheme === 'dark');
		toggleButton.setAttribute(
			'aria-label',
			nextTheme === 'dark' ? 'Switch to light theme' : 'Switch to dark theme',
		);

		localStorage.setItem(storageKey, nextTheme);
	};

	const savedTheme = localStorage.getItem(storageKey);
	const prefersLight = window.matchMedia('(prefers-color-scheme: light)').matches;

	applyTheme(savedTheme || (prefersLight ? 'light' : 'dark'));

	toggleButton.addEventListener('click', () => {
		applyTheme(root.classList.contains('theme-light') ? 'dark' : 'light');
	});
}
