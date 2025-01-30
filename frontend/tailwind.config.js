import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Dosis", "sans-serif"],
            },
            colors: {
                primary: "#6C983E",
                secondary: "#EBF3E7",
                accent: "#E5FC98",
                "dark-accent": "#1D4C43",
            },
        },
        container: {
            padding: {
                DEFAULT: "2rem",
                sm: "5rem",
                lg: "7rem",
                xl: "9rem",
                "2xl": "10rem",
            },
            center: true,
        },
    },

    plugins: [forms],
};
