const dropdown = document.getElementById("dropdown")
const menudropdown = document.getElementById("menudropdown")
console.log(menudropdown.classList)

dropdown.addEventListener("click",() => {
  if(menudropdown.classList.contains("hidden")){
    menudropdown.classList.remove("hidden")
    return
  }
  menudropdown.classList.add("hidden")
})

dropdown.addEventListener("mous")