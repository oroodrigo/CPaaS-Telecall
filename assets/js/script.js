import { verificacaoInicial, trocarTema } from "./dark-mode.js";
import mask from "./mask.js";
import toggleMenu from "./menu-mobile.js";
import showHide from "./show-hide.js";

verificacaoInicial();

//menu dropdown
const dropdown = document.getElementById("dropdown");
const menudropdown = document.getElementById("menudropdown");
menudropdown.style.transition = "max-height 1s ease";

dropdown.addEventListener("click", () => {
  if (menudropdown.classList.contains("aberto")) {
    menudropdown.classList.remove("aberto");
    menudropdown.style.maxHeight = "0px";
    return;
  }
  menudropdown.classList.add("aberto");
  menudropdown.style.maxHeight = "250px";
});

//dark-mode
const darkBtn = document.getElementById("dark-btn");
darkBtn.addEventListener("click", () => {
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

// change login/logout
const loginBtn = document.getElementById("login-btn");
const logoutBtn = document.getElementById("logout-btn");

let loginState = JSON.parse(sessionStorage.getItem("isLogged")) || "false";

logoutBtn.addEventListener("click", async () => {
  const req = await fetch("../server/sair.php", {
    headers: {
      "Content-Type": "application/json",
    },
  });

  const res = await req.json();

  if (res.success) {
    sessionStorage.setItem("isLogged", JSON.stringify(false));
    loginState = sessionStorage.getItem("isLogged");
    trocarLoginButton(loginState);
  }
});

function trocarLoginButton(loginState) {
  if (loginState == "false") {
    loginBtn.classList.remove("hidden");
    loginBtn.classList.add("block");

    logoutBtn.classList.remove("block");
    logoutBtn.classList.add("hidden");
  } else {
    logoutBtn.classList.remove("hidden");
    logoutBtn.classList.add("block");

    loginBtn.classList.remove("block");
    loginBtn.classList.add("hidden");
  }
}

trocarLoginButton(loginState);
