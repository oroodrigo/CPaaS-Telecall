import { mensagens, tiposDeErro } from "./erroMessage.js";
import validaCPF from "./valida-cpf.js";
import validaSenha from "./valida-senha.js";

export default function verificaCampo(campo, erro) {
  let mensagem = "";
  campo.setCustomValidity("");

  if (campo.name == "cpf" && campo.value.length >= 11) {
    validaCPF(campo);
  }
  if (campo.name == "confirma_senha") {
    validaSenha(campo);
  }
  if (campo.name == "cep" && campo.value.length >= 1 && erro) {
    campo.setCustomValidity("CEP inválido. Tente novamente.");
  }

  tiposDeErro.forEach((error) => {
    if (campo.validity[error]) {
      mensagem = mensagens[campo.name][error];
    }
  });

  const mensagemErro = campo.parentNode.querySelector(".mensagem_erro");
  const validador = campo.checkValidity();

  if (!validador) {
    mensagemErro.textContent = mensagem;
    campo.style.border = "2px solid red";
  } else {
    mensagemErro.textContent = "";
    campo.style.border = "";
  }
}
