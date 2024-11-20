import './bootstrap';
import './partials/footerYear'
import './partials/mobileButtons'
import './partials/mobileDropdown'
import './partials/preloader'
import './partials/scrollToTop'
import './partials/swiper';



const hamburgerBtn = document.querySelector("#hamburger");
const closeBtn = document.querySelector("#close-btn");
const menu = document.querySelector("#menu");


const mobileMenuHandler = () => {
    hamburgerBtn.classList.toggle("is-active");
    menu.classList.toggle("menu-open");
    menu.classList.toggle("menu-close");
    // body.classList.toggle("overflow-hidden");
    // navbar.classList.add("nav-color");
    // navbar.classList.remove("nav-color--transparent");
};



closeBtn.addEventListener("click", mobileMenuHandler);
hamburgerBtn.addEventListener("click", mobileMenuHandler);