
import Swiper from "swiper";
import {
    Autoplay,
    EffectFade,
    Navigation,
    Pagination,
} from "swiper/modules";
import "swiper/swiper-bundle.css";

//HERO CAROUSEL
new Swiper(".hero-carousel", {
    loop: false,
    effect: "fade",
    slidesPerView: 1,

    spaceBetween: 30,
    autoplay: {
        delay: 5500,
        disableOnInteraction: false,
    },
    modules: [Autoplay, EffectFade],
});

//FEATURES CAROUSEL
new Swiper(".features-carousel", {
    loop: true,
    grabCursor: true,
    slidesPerView: 1,

    breakpoints: {
        600: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
        1280: {
            slidesPerView: 4,
        },
        1600: {
            slidesPerView: 5,
        },
    },

    autoplay: {
        delay: 5000,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
    },

    navigation: {
        nextEl: ".feature-next",
        prevEl: ".feature-prev",
    },

    modules: [Autoplay,Navigation],
});

//TESTIMONIALS CAROUSEL
new Swiper(".testimonials-carousel", {
    loop: true,
    grabCursor: true,
    slidesPerView: 1,

    autoplay: {
        delay: 5000,
        disableOnInteraction: true,
        pauseOnMouseEnter: true,
    },

    modules: [Autoplay,],
});