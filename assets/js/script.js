import { verificacaoInicial, trocarTema } from "./dark-mode.js";
import mask from "./mask.js";

verificacaoInicial();

//menu dropdown
const dropdown = document.getElementById("dropdown");
const menudropdown = document.getElementById("menudropdown");

dropdown.addEventListener("click", () => {
  if (menudropdown.classList.contains("hidden")) {
    menudropdown.classList.remove("hidden");
    return;
  }
  menudropdown.classList.add("hidden");
});

//dark-mode
const btn = document.getElementById("dark-btn");
btn.addEventListener("click", () => {
  trocarTema();
});

//mask
document.querySelectorAll(".mask").forEach((input) => {
  const field = input.dataset.mask;

  input.addEventListener("input", (e) => {
    e.target.value = mask[field](e.target.value);
  });
});
