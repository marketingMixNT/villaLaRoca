import './bootstrap';
import './partials/footerYear'
import './partials/gallery'
import './partials/lightbox'
import './partials/mobileButtons'
import './partials/mobileDropdown'
import './partials/observer'
import './partials/preloader'
// import './partials/scrollToTop'
import './partials/swiper';



// const hamburgerBtn = document.querySelector("#hamburger");
// const closeBtn = document.querySelector("#close-btn");
// const menu = document.querySelector("#menu");


// const mobileMenuHandler = () => {
//     hamburgerBtn.classList.toggle("is-active");
//     menu.classList.toggle("menu-open");
//     menu.classList.toggle("menu-close");
//     // body.classList.toggle("overflow-hidden");
//     // navbar.classList.add("nav-color");
//     // navbar.classList.remove("nav-color--transparent");
// };



// closeBtn.addEventListener("click", mobileMenuHandler);
// hamburgerBtn.addEventListener("click", mobileMenuHandler);

const hamburgerBtns = document.querySelectorAll(".hamburger"); // Wszystkie przyciski hamburgera
const closeBtn = document.querySelector("#close-btn")
const menu = document.querySelector("#menu");

const mobileMenuHandler = () => {
    console.log('ok');
    menu.classList.toggle("menu-open");
    menu.classList.toggle("menu-close");
};

// Dodanie zdarzenia dla każdego przycisku hamburgera
hamburgerBtns.forEach((btn) => {
    btn.addEventListener("click", mobileMenuHandler);
});

// Dodanie zdarzenia dla każdego przycisku zamykającego
closeBtn.addEventListener("click", mobileMenuHandler);


window.addEventListener("scroll", function () {
    const header = document.getElementById("header");

    if (window.scrollY >= 100) {
        header.classList.remove("-translate-y-[100%]");
    } else {
        header.classList.add("-translate-y-[100%]");
    }
});
