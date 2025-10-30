import './bootstrap';
import Alpine from 'alpinejs'

window.Alpine = Alpine
 
Alpine.start()

import Swiper from 'swiper';
import 'swiper/css';

const swiper = new Swiper('.mySwiper', {
  loop: true,
  autoplay: { delay: 3000 },
  pagination: { el: '.swiper-pagination', clickable: true },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

