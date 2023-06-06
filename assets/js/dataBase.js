export const dataBase =
  JSON.parse(localStorage.getItem("dataBase")) ||
  localStorage.setItem("dataBase", JSON.stringify([]));
