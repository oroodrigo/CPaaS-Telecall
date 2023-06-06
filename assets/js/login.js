import { dataBase } from "./dataBase.js";
import verificaCampo from "./validations/valida-campo.js";

const form = document.getElementById("form_login");
const loginResult = document.getElementById("login_result");
const camposDoFormulario = document.querySelectorAll("[required]");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  const loginInfo = {
    login: e.target.elements["login"].value,
    senha: e.target.elements["senha"].value,
  };

  for (let i = 0; i < dataBase.length; i++) {
    if (
      loginInfo.login == dataBase[i].login &&
      loginInfo.senha == dataBase[i].senha
    ) {
      loginResult.style.color = "green";
      loginResult.textContent = "Login concluido!";
      sessionStorage.setItem("isLogged", true);
      window.location.assign("../index.html");
      break;
    }
    if (
      loginInfo.login == dataBase[i].login ||
      loginInfo.senha == dataBase[i].senha
    ) {
      loginResult.style.color = "red";
      loginResult.textContent = "Login ou senha incorreto.";
      sessionStorage.setItem("isLogged", false);
      break;
    }
    loginResult.style.color = "red";
    loginResult.textContent = "Login não encontrado.";
    sessionStorage.setItem("isLogged", false);
  }
});

camposDoFormulario.forEach((campo) => {
  campo.addEventListener("focusout", () => {
    verificaCampo(campo);
  });
  campo.addEventListener("invalid", (e) => {
    e.preventDefault();
    verificaCampo(campo);
  });
});
