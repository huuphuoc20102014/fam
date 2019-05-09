$(document).ready(function () {
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: 'span i.fa-angle-right',
            prevEl: 'span i.fa-angle-left',
        },
        breakpoints: {
            1200: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            960: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
        }
    });
});
