/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["index.html", "./pages/*.html"],
  theme: {
    screens: {
      xs: "370px",
      sm: "640px",
      md: "768px",
      lg: "1024px",
      xl: "1280px",
      "2xl": "1536px",
    },
    fontFamily: {
      Poppins: ["Poppins", "sans-serif"],
    },
    extend: {
      colors: {
        telecall: {
          azul: "#0e4e7c",
          "azul-hover":"#083759",
          vemelho: "#ca1c3a",
          "vemelho-hover": "#99121f",
        },
      },
    },
  },
  plugins: [],
};
