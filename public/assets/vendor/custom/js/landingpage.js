// === Swipper === //
var swiper = new Swiper(".slide-container", {
    slidesPerView: 3,
    // spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    // loopFillGroupWithBlank: true,
    centerSlide: true,
    grabCursor: true,
    fade: true,
    autoplay: true,
    keyboard: {
        enabled: true,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        0: {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 20,
        },
        480: {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: 2,
            slidesPerGroup: 2,
            spaceBetween: 30,
        },
        1000: {
            slidesPerView: 3,
            slidesPerGroup: 3,
            spaceBetween: 50,
        },
    },
});


// var swiper = new Swiper(".slide-container", {
//     slidesPerView: 3,
//     spaceBetween: 30,
//     loop: true,
//     pagination: {
//         el: ".swiper-pagination",
//         clickable: true,
//     },
//     navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev",
//     },
// });
