const hamburgerBtn = document.querySelector(".nav-toggler")
const navigation = document.querySelector("nav")

hamburgerBtn.addEventListener("click", toggleNav)

function toggleNav() {
    hamburgerBtn.classList.toggle("active")
    navigation.classList.toggle("active")
}