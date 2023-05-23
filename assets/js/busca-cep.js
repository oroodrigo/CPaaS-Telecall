const logradouro = document.getElementById("endereco");
const bairro = document.getElementById("bairro");
const cidade = document.getElementById("cidade");
const estado = document.getElementById("estado");
const numero = document.getElementById("endereco_numero");
const complemento = document.getElementById("endereco_complemento");
const mensagemErro = document.getElementById("mensagem_erro");

const buscaCep = async (cep) => {
  logradouro.value = "...";
  bairro.value = "...";
  cidade.value = "...";
  numero.value = "";
  complemento.value = "";
  mensagemErro.textContent = "";

  try {
    const url = `https://viacep.com.br/ws/${cep}/json/`;
    const consultaCEP = await fetch(url);
    const consultaCEPConvertida = await consultaCEP.json();

    if (consultaCEPConvertida.erro) {
      throw Error("CEP não existe");
    }

    logradouro.value = consultaCEPConvertida.logradouro;
    bairro.value = consultaCEPConvertida.bairro;
    cidade.value = consultaCEPConvertida.localidade;
    estado.value = consultaCEPConvertida.uf;

    console.log(consultaCEPConvertida);
  } catch (erro) {
    mensagemErro.textContent = "CEP inválido. Tente novamente!";
    console.log(erro);
  }
};

const cep = document.getElementById("cep");
cep.addEventListener("focusout", () => {
  buscaCep(cep.value);
});
