const hamburgerBtns = document.querySelectorAll(".hamburger");
const closeBtn = document.querySelector("#close-btn")
const menu = document.querySelector("#menu");

const mobileMenuHandler = () => {
    console.log('ok');
    menu.classList.toggle("menu-open");
    menu.classList.toggle("menu-close");
};


hamburgerBtns.forEach((btn) => {
    btn.addEventListener("click", mobileMenuHandler);
});


closeBtn.addEventListener("click", mobileMenuHandler);


window.addEventListener("scroll", function () {
    const header = document.getElementById("header");

    if (window.scrollY >= 100) {
        header.classList.remove("-translate-y-[100%]");
    } else {
        header.classList.add("-translate-y-[100%]");
    }
});
