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
                    400: "#f8f5f1",
                    800:"#F3EBE2"
                },
                secondary: {
                    100: "#898fa3",
                    200: "#575c6b",
                    400: "#976f5d",
                },

                accent: {
                    400: "#d9b000",
                    600: "#b59100",
                },

                bgPrimary: "#f8f5f1",
                bgSecondary: "#ffffff",

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
