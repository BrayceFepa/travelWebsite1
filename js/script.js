let menu = document.querySelector('#menu-btn');
let navBar = document.querySelector('.header .navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navBar.classList.toggle('active');
};

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navBar.classList.remove('active');
};


var swiper = new Swiper(".home-slider", {
    loop: true,
    autoplay: {
        disableOnInteraction: false,
        delay: 20000,
    },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
});