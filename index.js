import { register } from 'swiper/element/bundle';
register();

const swiper = new Swiper(".swiper",{
    loop :true,    
})
Autoplay
swiper.slideNext(5000, runCallbacks)
const swiperSlides = document.querySelector(".swiper-slide");
swiperSlides.slideNext();