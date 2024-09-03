const swiper = new Swiper(".swiper",{
    loop :true, 
    autoplay:{
        delay : 5000,
    },
    scrollbar:{
        el :".swiper-scrollbar",
    
    },
});
// Fléche pour remonter
arrowUp.addEventListener('click',() =>{
  window.scrollTo({
    top:0,
    left:0,
    behavior:'smooth',
  })
});

window.addEventListener("scroll", ()=> {
  let scrollValue = (window.scrollY + window.innerHeight) / document.body.offsetHeight;


  if (scrollValue >= 0.51){
    arrowUp.style.opacity=1;
    if(scrollValue >=0.9){
      arrowUp.style.bottom="150px";
    }
  }else{
    arrowUp.style.opacity=0;
  }
});

window.addEventListener("submit",(e)=>{
  if(!accord.checked){
    alert("Veuillez cocher la case pour que je puisse vous contacter");
  }
})

