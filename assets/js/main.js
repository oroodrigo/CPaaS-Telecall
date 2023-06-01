const form = document.getElementById("form");
const senha = document.getElementById("senha");
const confirmaSenha = document.getElementById("confirma_senha");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  window.location.assign("./cadastro-2.html");
});

function verificaCampo(campo) {
  if (campo.id == "senha") {
    validaSenha();
  }
  if (campo.id == "cpf") {
    validaCPF(campo);
  }
}

const validaSenha = () => {
  if (senha == confirmaSenha) {
    return true;
  }
};
