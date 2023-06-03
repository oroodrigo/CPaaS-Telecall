import verificaCampo from "./validations/valida-campo.js";

const camposDoFormulario = document.querySelectorAll("[required]");
const form = document.getElementById("form");
export let userInfo;

form.addEventListener("submit", (e) => {
  e.preventDefault();
  const respostas = {
    nome: e.target.elements["nome"].value,
    nascimento: e.target.elements["nascimento"].value,
    sexo: e.target.elements["sexo"].value,
    nomeMaterno: e.target.elements["nome_materno"].value,
    cpf: e.target.elements["cpf"].value,
    cel: e.target.elements["celular"].value,
    tel: e.target.elements["telefone"].value,
    login: e.target.elements["login"].value,
    senha: e.target.elements["senha"].value,
    confirmaSenha: e.target.elements["confirma_senha"].value,
  };

  userInfo = respostas;
  sessionStorage.setItem("userInfo", JSON.stringify(respostas));

  window.location.assign("./cadastro-2.html");
});

camposDoFormulario.forEach((campo) => {
  campo.addEventListener("focusout", () => verificaCampo(campo));
  campo.addEventListener("invalid", (evento) => evento.preventDefault());
});
