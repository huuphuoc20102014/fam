$(document).ready(function() {
    var swiper = new Swiper('.swiper-container', {
      effect: 'cube',
      grabCursor: true,
      centeredSlides: true,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
});
function swap(image) {
    document.getElementById("main").src = image.href;
}