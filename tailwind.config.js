/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["index.html", "./pages/*.html"],
  darkMode: "class",
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
          "azul-hover": "#083759",
          vemelho: "#ca1c3a",
          "vemelho-hover": "#99121f",
        },
        dark: {
          bg: "#0a1b2e",
          container: "#94A3B8",
          text: "#fff",
          input: {
            border: "#1E40AF",
            bg: "#E4E8ED",
          },
        },
      },
    },
  },
  plugins: [],
};
