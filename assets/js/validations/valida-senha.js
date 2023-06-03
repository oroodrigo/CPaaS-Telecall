export default function validaSenha(campo) {
  const senha = document.getElementById("senha");

  if (campo.value != senha.value) {
    campo.setCustomValidity("As senhas devem ser iguais.");
  }
}
