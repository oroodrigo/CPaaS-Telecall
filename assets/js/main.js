import verificaCampo from "./validations/valida-campo.js";

const camposDoFormulario = document.querySelectorAll("[required]");
const form = document.getElementById("form_userInfo");

form.addEventListener("submit", async (e) => {
  e.preventDefault();

  const userInfo = {
    nome: e.target.elements["nome"].value,
    nascimento: e.target.elements["nascimento"].value,
    sexo: e.target.elements["sexo"].value,
    nomeMaterno: e.target.elements["nome_materno"].value,
    cpf: e.target.elements["cpf"].value,
    cel: e.target.elements["celular"].value
      .replace(/\D/g, "")
      .replace(/(\d{2})/, "(+55)$1")
      .replace(/(\)\d{2})(\d)/, "$1-")
      .replace(/(-\d{8,9})(\d+?$)/, "$1"),
    tel: e.target.elements["telefone"].value
      .replace(/\D/g, "")
      .replace(/(\d{2})/, "(+55)$1")
      .replace(/(\)\d{2})(\d)/, "$1-")
      .replace(/(-\d{8,9})(\d+?$)/, "$1"),
    login: e.target.elements["login_cadastro"].value,
    senha: e.target.elements["senha"].value,
  };

  console.log(userInfo);

  const dados = await fetch("../server/cadastrar.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(userInfo),
  });

  const res = await dados.json();
  console.log(res);
});
// sessionStorage.setItem("userInfo", JSON.stringify(userInfo));

// window.location.assign("./cadastro-2.php");

camposDoFormulario.forEach((campo) => {
  campo.addEventListener("focusout", () => verificaCampo(campo));
  campo.addEventListener("invalid", (evento) => {
    evento.preventDefault();
    verificaCampo(campo);
  });
});
