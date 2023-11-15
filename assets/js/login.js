import verificaCampo from "./validations/valida-campo.js";

const boxLogin = document.getElementById("box-login");
const box2FA = document.getElementById("box-2fa");

const formLogin = document.getElementById("form_login");
const form2FA = document.getElementById("form_2fa");

const camposLogin = Array.from(formLogin.querySelectorAll("[required]"));
const campos2FA = Array.from(form2FA.querySelectorAll("[required]"));
const camposDoFormulario = [...camposLogin, ...campos2FA];

const entrarBtn = document.getElementById("entrar-btn");
const enviarBtn = document.getElementById("enviar-btn");

const loginResult = Array.from(document.getElementsByClassName("login_result"));

let loginInfo = {};

entrarBtn.addEventListener("click", () => {
  camposLogin.forEach((campo) => verificaCampo(campo));
});

enviarBtn.addEventListener("click", () => {
  campos2FA.forEach((campo) => verificaCampo(campo));
});

formLogin.addEventListener("submit", async (e) => {
  e.preventDefault();

  loginInfo = {
    login: e.target.elements["login"].value,
    senha: e.target.elements["senha"].value,
  };

  const req = await fetch("../server/entrar.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(loginInfo),
  });

  const res = await req.json();

  const { success, response, role } = res;

  if (success && role === "admin") {
    displayMessage(response, 0, success);

    sessionStorage.setItem("isLogged", true);

    window.location.assign("../index.php");
  } else if (success && role === "user") {
    e.target.elements["login"].value = "";
    e.target.elements["senha"].value = "";

    boxLogin.classList.remove("flex");
    boxLogin.classList.add("hidden");

    box2FA.classList.remove("hidden");
  } else {
    displayMessage(response, 0, success);

    sessionStorage.setItem("isLogged", false);
  }
});

form2FA.addEventListener("submit", async (e) => {
  e.preventDefault();
  loginInfo = {
    ...loginInfo,
    perguntaSecreta: e.target.elements["pergunta_secreta"].value,
    respostaSecreta: e.target.elements["resposta_secreta"].value,
  };

  const req = await fetch("../server/verificacao-2fa.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(loginInfo),
  });

  const res = await req.json();

  const { success, response } = res;

  if (success) {
    displayMessage(response, 1, success);

    sessionStorage.setItem("isLogged", true);

    window.location.assign("../index.php");
  } else {
    displayMessage(response, 1, success);

    sessionStorage.setItem("isLogged", false);
  }
});

//voltar para form de login
const voltarBtn = document.getElementById("voltar-btn");
voltarBtn.addEventListener("click", () => {
  box2FA.classList.add("hidden");

  boxLogin.classList.remove("hidden");
  boxLogin.classList.add("flex");
});

camposDoFormulario.forEach((campo) => {
  campo.addEventListener("focusout", () => {
    verificaCampo(campo);
  });
  campo.addEventListener("invalid", (e) => {
    e.preventDefault();
  });
});

function displayMessage(mensagem, index, sucesso) {
  if (sucesso) {
    loginResult[index].style.color = "green";
    loginResult[index].textContent = mensagem;
  } else {
    loginResult[index].style.color = "red";
    loginResult[index].textContent = mensagem;
  }
  setTimeout(() => {
    loginResult[index].textContent = "";
  }, 5000);
}

const perguntaSecreta = document.getElementById("pergunta_secreta");
const respostaSecreta = document.getElementById("resposta_secreta");

perguntaSecreta.addEventListener("change", (e) => {
  if (e.target.value === "data_nascimento") {
    respostaSecreta.type = "date";
  } else {
    respostaSecreta.type = "text";
  }
});
