/** @type {import('tailwindcss').Config} */
export default {
	content: [
		"./resources/**/*.blade.php",
		"./resources/**/*.js",
		"./resources/**/*.vue",
	],
	// prettier-ignore
	theme: {
        container: {
            center: true,
            padding: '48px'
        },
		extend: {
            fontFamily: {
                code: ['Source Code Pro', 'sans-serif'],
                comm: ['Commissioner', 'sans-serif'],
            },
			colors: {
                light: '#f8fafc',
				primary: '#0f172a',
                secondary: '#475569'
			},
            screens: {
                '2xl': '1336px',
                'xl': '1080px',
                'lg': '924px',
                'md': '663px',
            }
		},
	},
	plugins: [],
};