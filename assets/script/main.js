const burger = document.querySelector(".burger");
const nav = document.querySelector("nav");

burger.addEventListener("click", (event) => {
    burger.classList.toggle("cross");
    nav.classList.toggle("flex");
});