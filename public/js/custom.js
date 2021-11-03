var toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 100) {
        toTop.classList.add("nyala");
    } else {
        toTop.classList.remove("nyala");
    }
});
