import './bootstrap';

// Uncomment if you need Alpine.js
import Alpine from 'alpinejs'
import example from './components/AlpineExample'
Alpine.data('example', example)
window.Alpine = Alpine
Alpine.start()

import Swiper from 'swiper/bundle';

import 'swiper/css/bundle';

var slider = new Swiper('.slider', {
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    autoplay: {
     delay: 10000,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });


  import { Fancybox } from "@fancyapps/ui";
  import "@fancyapps/ui/dist/fancybox/fancybox.css";

  Fancybox.bind("[data-fancybox]", {
    // Your custom options
  });
