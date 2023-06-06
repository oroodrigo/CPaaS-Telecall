export default class User {
  constructor(userInfo) {
    this.name = userInfo.nome;
    this.nascimento = userInfo.nascimento;
    this.sexo = userInfo.sexo;
    this.nomeMaterno = userInfo.nomeMaterno;
    this.cpf = userInfo.cpf;
    this.cel = userInfo.cel;
    this.tel = userInfo.tel;
    this.login = userInfo.login;
    this.senha = userInfo.senha;
  }
}
