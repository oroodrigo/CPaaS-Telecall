import excluirUsuario from "./excluirUsuario.js";

const listaUsuarios = document.getElementById("user_list");
const sectionVerUsuarios = document.getElementById("view_user_section");
const tabelaUsuarios = document.getElementById("user_table");
const feedbackMessage = document.getElementById("feedback_message");

const buscarUsuarios = async () => {
  const req = await fetch("../server/listar.php", {
    method: "GET",
    headers: {
      "Content-Type": "application/json",
    },
  });

  const res = await req.json();

  return res;
};

const renderizarFuncoes = () => {
  const botaoExcluir = document.querySelectorAll(".botao-excluir");

  botaoExcluir?.forEach((botao) => {
    botao.addEventListener("click", async () => {
      const { success, response } = await excluirUsuario(
        botao.getAttribute("data-id")
      );
      if (success) {
        message(response, success);
        while (listaUsuarios.firstChild) {
          listaUsuarios.removeChild(listaUsuarios.firstChild);
        }
        renderizarUsuarios();
      } else {
        message(response, success);
      }
    });
  });
};

async function renderizarUsuarios() {
  const { success, response, usuarios } = await buscarUsuarios();

  if (success) {
    usuarios.map((usuario, index) => {
      tabelaUsuarios.classList.remove("hidden");
      const novaLinha = document.createElement("tr");
      novaLinha.className = index % 2 === 0 ? "bg-zinc-200" : "bg-zinc-300";
      novaLinha.innerHTML = `
    <td class="text-left p-4">${usuario.id}</td>
    <td class="text-left p-4 lg:text-center">${usuario.nome}</td>
    <td class="text-left p-4">${usuario.role}</td>
    <td class="text-lg text-center p-4 text-gray-500 xl:text-left hover:text-red-600 cursor-pointer duration-150"><button class="botao-excluir" type="button" data-id=${usuario.id}><i class="fa-solid fa-trash"></i></button></td>
    `;

      listaUsuarios.appendChild(novaLinha);
    });
  } else {
    tabelaUsuarios.parentNode.removeChild(tabelaUsuarios);
    const mensagem = document.createElement("span");
    mensagem.innerHTML = `<p class="text-lg text-center font-medium">${response}</p>`;

    sectionVerUsuarios.appendChild(mensagem);
  }

  renderizarFuncoes();
}

renderizarUsuarios();

function message(message, success) {
  success
    ? (feedbackMessage.style.color = "green")
    : (feedbackMessage.style.color = "red");

  feedbackMessage.textContent = message;
  setTimeout(() => {
    feedbackMessage.textContent = "";
  }, 5000);
}
