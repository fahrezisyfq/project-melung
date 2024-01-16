const humberger = document.querySelector(".humberger");
const headerul = document.querySelector("header ul");

humberger.addEventListener("click", () => {
    humberger.classList.toggle("active");
    headerul.classList.toggle("active");
})

document.querySelectorAll("header ul li a").forEach(n => n.addEventListener("click", () => {
    humberger.classList.remove("active");
    headerul.classList.remove("active");
}))