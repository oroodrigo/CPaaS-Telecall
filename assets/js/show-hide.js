export default function showHide(btn){
  trocarIcon(btn)

  const input = btn.parentNode.querySelector("input")
  if (input.type == "password"){
    return input.type = "text"
  }
  input.type = "password"

}

function trocarIcon(btn) {
  if (btn.classList.contains("fa-eye")) {
    btn.classList.remove("fa-eye");
    btn.classList.add("fa-eye-slash");
  } else {
    btn.classList.remove("fa-eye-slash");
    btn.classList.add("fa-eye");
  }
}