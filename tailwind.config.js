/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: "class",
    theme: {
        container: {
            center: true,
            padding: "16px",
        },
        extend: {
            colors: {
                primary: "#1d4ed8",
                dark: "#0f172a",
            },
            screens: {
                "2xl": "1320px",
            },
        },
    },
    plugins: [],
};
