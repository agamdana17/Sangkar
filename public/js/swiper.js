document.addEventListener('DOMContentLoaded', function () {
  const swiper = new Swiper(".mySwiper", {
    slidesPerView: 3, // default (desktop)
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      // Ketika ukuran layar <= 640px (mobile)
      0: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      // Tablet
      768: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      // Desktop
      1024: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
  });
});
