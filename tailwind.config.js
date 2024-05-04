/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#e5e7eb",
                button: "#3b82f6",
                buttonhover: "#1d4ed8",
                dark2: "#374151",
                dark: "#1F2937",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
