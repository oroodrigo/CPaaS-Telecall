import { verificacaoInicial, trocarTema } from "./dark-mode.js";
import mask from "./mask.js";
import toggleMenu from "./menu-mobile.js";
import showHide from "./show-hide.js";

verificacaoInicial();

//menu dropdown
const dropdown = document.getElementById("dropdown");
const menudropdown = document.getElementById("menudropdown");
const dropdownIcon = document.getElementById("dropdownIcon");

dropdown.addEventListener("click", () => {
  if (menudropdown.classList.contains("hidden")) {
    dropdownIcon.style.transform = "rotate(180deg)";
    menudropdown.classList.remove("hidden");
    return;
  }
  menudropdown.classList.add("hidden");
  dropdownIcon.style.transform = "rotate(0deg)";
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

//show-hide password
document.querySelectorAll(".show-btn").forEach((element) => {
  element.addEventListener("click", () => {
    showHide(element);
  });
});

//menu-moble
const closeBtn = document.getElementById("close-menu-mobile");
const openBtn = document.getElementById("open-menu-mobile");
const mobileButtons = [closeBtn, openBtn];

mobileButtons.forEach((element) => {
  element.addEventListener("click", () => {
    toggleMenu();
  });
});
