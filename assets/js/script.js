import { verificacaoInicial, trocarTema } from "./dark-mode.js";
import mask from "./mask.js";
import toggleMenu from "./menu-mobile.js";
import showHide from "./show-hide.js";

verificacaoInicial();

//menu dropdown
const dropdown = document.getElementById("dropdown");
const menudropdown = document.getElementById("menudropdown");
const dropdownIcon = document.getElementById("dropdownIcon");
menudropdown.style.transition = "max-height 1s ease";
dropdownIcon.style.transition = "all 0.5s ease";

dropdown.addEventListener("click", () => {
  if (menudropdown.classList.contains("aberto")) {
    menudropdown.classList.remove("aberto");
    // dropdownIcon.style.transform = "rotate(90deg)";
    menudropdown.style.maxHeight = "0px";
    return;
  }
  menudropdown.classList.add("aberto");
  menudropdown.style.maxHeight = "200px";
  // dropdownIcon.style.transform = "rotate(0deg)";
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

logoutBtn.addEventListener("click", () => {
  sessionStorage.setItem("isLogged", JSON.stringify(false));
  loginState = sessionStorage.getItem("isLogged");

  trocarLoginButton(loginState);
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

//page acess validity
if (
  loginState == "false" &&
  (window.location.pathname == "/pages/2fa.html" ||
    window.location.pathname == "/pages/google-calls.html" ||
    window.location.pathname == "/pages/numero-mascara.html" ||
    window.location.pathname == "/pages/sms-programavel.html")
) {
  window.location.assign("./login.html");
}
