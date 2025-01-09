/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './resources/**/*.html', // Jika ada file HTML statis
        './resources/**/*.jsx', // Jika Anda menggunakan React
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}
