import verificaCampo from "./valida-campo.js";

const logradouro = document.getElementById("endereco");
const bairro = document.getElementById("bairro");
const cidade = document.getElementById("cidade");
const estado = document.getElementById("estado");
const numero = document.getElementById("endereco_numero");
const complemento = document.getElementById("endereco_complemento");

const buscaCep = async (cepValue) => {
  const cepConvertido = cepValue.replace(/-/g, "");
  logradouro.value = "...";
  bairro.value = "...";
  cidade.value = "...";
  numero.value = "";
  complemento.value = "";

  try {
    const url = `https://viacep.com.br/ws/${cepConvertido}/json/`;
    const consultaCEP = await fetch(url);
    const consultaCEPConvertida = await consultaCEP.json();

    if (consultaCEPConvertida.erro) {
      throw new Error("CEP não existe");
    }

    logradouro.value = consultaCEPConvertida.logradouro;
    bairro.value = consultaCEPConvertida.bairro;
    cidade.value = consultaCEPConvertida.localidade;
    estado.value = consultaCEPConvertida.uf;
  } catch (erro) {
    verificaCampo(cep, erro);
    console.log(erro);
  }
};

const cep = document.getElementById("cep");
cep.addEventListener("focusout", () => {
  verificaCampo(cep);
  buscaCep(cep.value);
});
