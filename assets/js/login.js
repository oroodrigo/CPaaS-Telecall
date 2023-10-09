import verificaCampo from "./validations/valida-campo.js";

const form = document.getElementById("form_login");
const loginResult = document.getElementById("login_result");
const camposDoFormulario = document.querySelectorAll("[required]");

console.log("teste");
form.addEventListener("submit", async (e) => {
  e.preventDefault();

  const loginInfo = {
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
  const { sucess, response } = res;
  console.log(res);

  if (sucess) {
    loginResult.style.color = "green";
    loginResult.textContent = response;
    sessionStorage.setItem("isLogged", true);
    window.location.assign("../index.html");
  } else {
    loginResult.style.color = "red";
    loginResult.textContent = response;
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
