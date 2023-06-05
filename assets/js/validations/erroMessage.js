export const tiposDeErro = [
  "valueMissing",
  "tooShort",
  "customError",
  "typeMissmatch",
  "patternMissmatch",
  "tooLong",
];

export const mensagens = {
  nome: {
    valueMissing: "O campo de nome não pode estar vazio.",
    patternMismatch: "Por favor, preencha um nome válido.",
    tooShort: "O campo de nome deve ter no mínimo 15 caractéres.",
    tooLong: "Por favor, preencha um nome válido",
  },
  nascimento: {
    valueMissing: "O campo de data de nascimento não pode estar vazio.",
  },
  sexo: {
    valueMissing: "O campo de sexo não pode estar vazio.",
  },
  nome_materno: {
    valueMissing: "O campo de nome não pode estar vazio.",
    patternMismatch: "Por favor, preencha um nome válido.",
    tooShort: "Por favor, preencha um nome válido.",
    tooLong: "Por favor, preencha um nome válido",
  },
  cpf: {
    valueMissing: "O campo de CPF não pode estar vazio.",
    patternMismatch: "Por favor, preencha um CPF válido.",
    customError: "O CPF digitado não existe.",
    tooShort: "O campo de CPF não tem caractéres suficientes.",
  },
  celular: {
    valueMissing: "O campo de celular não pode estar vazio.",
    patternMismatch: "Por favor, preencha um celular válido.",
    tooShort: "O campo de celular não tem números suficientes.",
  },
  telefone: {
    valueMissing: "O campo de telefone não pode estar vazio.",
    patternMismatch: "Por favor, preencha um telefone válido.",
    tooShort: "O campo de telefone não tem números suficientes.",
  },
  login: {
    valueMissing: "O campo de login não pode estar vazio.",
    tooShort: "O campo de login deve ter 6 caractéres.",
  },
  senha: {
    valueMissing: "O campo de senha não pode estar vazio.",
    tooShort: "O campo de senha deve ter 8 caractéres.",
  },
  confirma_senha: {
    valueMissing: "O campo de senha não pode estar vazio.",
    tooShort: "O campo de senha deve ter 8 caractéres.",
    customError: "Os campos de senha devem ser iguais.",
  },
  cep: {
    valueMissing: "O campo de CEP não pode estar vazio.",
    tooShort: "CEP inválido. Tente novamente!",
    customError: "CEP inválido. Tente novamente!",
  },
};
