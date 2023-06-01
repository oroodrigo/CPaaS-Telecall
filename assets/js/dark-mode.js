const btn = document.getElementById("dark-btn");

const trocarIcon = () => {
  if (btn.classList.contains("fa-moon")) {
    btn.classList.remove("fa-moon");
    btn.classList.add("fa-sun");
  } else {
    btn.classList.remove("fa-sun");
    btn.classList.add("fa-moon");
  }
};

const userTheme = localStorage.getItem("theme");
const systemTheme = window.matchMedia("prefers-color-scheme: dark").matches;

export const verificacaoInicial = () => {
  if (userTheme == "dark" || (!userTheme && systemTheme)) {
    document.documentElement.classList.add("dark");
    btn.classList.remove("fa-sun");
    btn.classList.add("fa-moon");

    localStorage.setItem("theme", "dark");
  } else {
    btn.classList.remove("fa-moon");
    btn.classList.add("fa-sun");
    localStorage.setItem("theme", "light");
  }
};

export const trocarTema = () => {
  trocarIcon();
  if (document.documentElement.classList.contains("dark")) {
    document.documentElement.classList.remove("dark");
    localStorage.setItem("theme", "light");
    return;
  }

  document.documentElement.classList.add("dark");
  localStorage.setItem("theme", "dark");
};
