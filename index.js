const swiper = new Swiper(".swiper",{
    loop :true, 
    autoplay:{
        delay : 5000,
    },
    scrollbar:{
        el :".swiper-scrollbar",
    
    },
})

// swiper.slideNext(5000, runCallbacks)
// const swiperSlides = document.querySelector(".swiper-slide");
// swiperSlides.slideNext();