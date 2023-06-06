import User from "./User.js";
import { dataBase } from "./dataBase.js";

const form = document.getElementById("form_endereco");
form.addEventListener("submit", (e) => {
  e.preventDefault();

  const userEndereco = {
    cep: e.target.elements["cep"].value,
    endereco: e.target.elements["endereco"].value,
    endereco_numero: e.target.elements["endereco_numero"].value,
    endereco_complemento: e.target.elements["endereco_complemento"].value,
    bairro: e.target.elements["bairro"].value,
    cidade: e.target.elements["cidade"].value,
    estado: e.target.elements["estado"].value,
  };

  const userInfo = JSON.parse(sessionStorage.getItem("userInfo"));
  const novoUsuario = new User(userInfo);
  novoUsuario.endereco = userEndereco;

  dataBase.push(novoUsuario);
  localStorage.setItem("dataBase", JSON.stringify(dataBase));
  sessionStorage.removeItem("userInfo");
  window.location.assign("./cadastro-3.html");
});
