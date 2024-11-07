/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            screens: {
                xs: "390px",
                max: "2200px",
            },
            colors: {
                primary: {
                    400: "#013333",
                    600: "#012929",
                },
                accent: {
                    400: "#d9b000",
                    600: "#b59100",
                },

                bgPrimary: "#ffffff",
                bgSecondary: {
                    200: "#F2F2F2",
                    400: "#eeebe6",
                    600: " #cbcbcb",
                    800: " #555",
                },
                bgThird: "#eeebe6",

                fontLight: "#ffffff",
                fontDark: "#555555",
            },
            fontFamily: {
                heading: ["Playfair Display", "serif"],
                text: ["Work Sans", "sans-serif"],
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};