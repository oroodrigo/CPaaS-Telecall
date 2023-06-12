import { dataBase } from "../dataBase.js"

export default function validaLogin(campo) {
  for (let i=0;i<dataBase.length;i++){
    if(campo.value == dataBase[i].login){
      campo.setCustomValidity("Login indisponível.")
    }
  }
}