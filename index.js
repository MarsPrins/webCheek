
function screenWidth() {
    var screenWidth = screen.width;
    return screenWidth;
}

setInterval(() => {
    screenWidth()
}, 100);

let amount = 1;

if (screenWidth() >= 550) {
    amount = 2
}
if (screenWidth() >= 900) {
    amount = 3
}
if (screenWidth() >= 1200) {
    amount = 4
}


var swiper = new Swiper(".mySwiper", {
    slidesPerView: amount,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
});