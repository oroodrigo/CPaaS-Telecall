import { verificacaoInicial, trocarTema } from "./dark-mode.js";

verificacaoInicial();
const btn = document.getElementById("dark-btn");
const dropdown = document.getElementById("dropdown");
const menudropdown = document.getElementById("menudropdown");

dropdown.addEventListener("click", () => {
  if (menudropdown.classList.contains("hidden")) {
    menudropdown.classList.remove("hidden");
    return;
  }
  menudropdown.classList.add("hidden");
});

btn.addEventListener("click", () => {
  trocarTema();
});
