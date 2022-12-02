/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            keyframes: {
                wiggle: {
                    "0% ": { transform: "rotate(-3deg)" },
                    "50%": { transform: "rotate(3deg)" },
                    "100%": { transform: "rotate(0deg)" },
                },
            },
            animation: {
                wiggle: "wiggle 0.2s ease-in ",
            },
        },
        container: {
            padding: "10%",
        },
        screens: {
            "2xl": { max: "1535px" },
            // => @media (max-width: 1535px) { ... }

            xl: { max: "1279px" },
            // => @media (max-width: 1279px) { ... }

            lg: { max: "1023px" },
            // => @media (max-width: 1023px) { ... }

            md: { max: "767px" },
            // => @media (max-width: 767px) { ... }

            sm: { max: "639px" },
            // => @media (max-width: 639px) { ... }
        },
    },
    plugins: [],
};
