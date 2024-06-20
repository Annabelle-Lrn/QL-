let currentIndex=0;
const slides= document.getElementsByClassName("carrousel-img");
const timer= 6000;
const slideActive=[...document.getElementsByClassName("active")];
console.log(slideActive)

 function showSlide(currentIndex){
    for(let i =0; i<slides.length; i++){
    slideActive.classList.remove("active");
    slides.classList.add("active");
    currentIndex++;  
}
}  
        

setInterval(showSlide, 6000);