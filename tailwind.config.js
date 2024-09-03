/** @type {import('tailwindcss').Config} */
export default {
	content: [
		'./resources/**/*.blade.php',
		'./resources/**/*.js',
		'./resources/**/*.vue',
	],
	theme: {
		container: {
			center: true,
			padding: '48px',
		},
		extend: {
			fontFamily: {
				code: ['Source Code Pro', 'sans-serif'],
				comm: ['Commissioner', 'sans-serif'],
			},
			colors: {
				light: '#f8fafc',
				semilight: '#e2e8f0',
				primary: '#0f172a',
				secondary: '#475569',
			},
			//prettier-ignore
			screens: {
                '2xl': '1336px',
                'xl': '1080px',
                'lg': '924px',
                'md': '663px',
            },
		},
	},
	plugins: [],
};
