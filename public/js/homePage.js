const hamburgerBtn = document.querySelector(".nav-toggler")
const navigation = document.querySelector("nav")
const html = document.querySelector("html")

hamburgerBtn.addEventListener("click", toggleNav)

function toggleNav() {
    hamburgerBtn.classList.toggle("active")
    navigation.classList.toggle("active")
    html.classList.toggle("active")
}