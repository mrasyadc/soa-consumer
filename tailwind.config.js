/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            sans: [
                "Inter var, sans-serif"
            ]
        },
        extend: {},
    },
    plugins: [
        // require('@tailwindcss/aspect-ratio')
        require('@tailwindcss/forms'),
    ],
};
