const menu = document.querySelector(".menu-mobile");

export default function toggleMenu() {
  if (menu.classList.contains("open")) {
    menu.classList.remove("open");
    menu.classList.add("hidden");
  } else {
    menu.classList.add("open");
    menu.classList.remove("hidden");
  }
}
