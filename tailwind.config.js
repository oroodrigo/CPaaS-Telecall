/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["index.html", "./pages/*.html"],
  theme: {
    fontFamily: {
      "Poppins" : ["Poppins", "sans-serif"]
    },
    extend: {
      colors: {
        telecall :{
          azul: "#0e4e7c",
          vemelho: "#ca1c3a",
          "vemelho-hover": "#99121f"
        }
      }
    },
  },
  plugins: [],
};
