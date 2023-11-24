import verificaCampo from "./validations/valida-campo.js";

const formNovaSenha = document.getElementById("form_newPassword");
const campoNovaSenha = document.getElementById("senha");
const feedbackMessage = document.querySelector(".mensagem_erro");

formNovaSenha.addEventListener("submit", async (e) => {
  e.preventDefault();
  verificaCampo(campoNovaSenha);

  const dados = {
    novaSenha: e.target.elements["senha"].value,
  };

  const req = await fetch("../server/trocarSenha.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(dados),
  });
  const res = await req.json();

  const { success, response } = res;

  if (success) {
    feedbackMessage.style.color = "green";
    feedbackMessage.textContent = response;
  } else {
    feedbackMessage.style.color = "red";
    feedbackMessage.textContent = response;
  }

  setTimeout(() => {
    feedbackMessage.textContent = "";
  }, 5000);
});

campoNovaSenha.addEventListener("focusout", (e) => verificaCampo(e.target));
campoNovaSenha.addEventListener("invalid", (e) => e.preventDefault());
