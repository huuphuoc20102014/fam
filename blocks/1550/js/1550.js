$(document).ready(function () {
    $(".add_cart").click(function () {
        alert("Chức năng đang bảo trì vui lòng liên hệ trực tiếp SĐT: 0902.903.199. Hoặc chát trực tiếp với admin.");
    });
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