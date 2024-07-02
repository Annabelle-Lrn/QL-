const diapo = document.getElementById("diapo");
const items = document.querySelectorAll(".item");
const descrip = document.querySelectorAll(".description");
const modalImg =document.querySelector("#modal img");
const modal= document.getElementById("modal");
const close = document.querySelector(".close");
const legende = document.querySelector("#modal p");
const pdiv = document.querySelector(".description");
// console.log(pdiv.textContent)
let index =0;


function showItems(){
    if (index>=items.length-1){index=0}

    items[index].classList.remove("active");
    descrip[index].classList.remove("active");
    index++;

    items[items.length-1].classList.remove("active");
    descrip[items.length-1].classList.remove("active");

    items[index].classList.add("active");
    descrip[index].classList.add("active");
    
};

let t = setInterval(()=> {showItems()},3000);

items.forEach(item => {
    item.addEventListener("click",(e) =>{
        const img =e.target.src;
        const descr = e.target.alt;
        modalImg.src= img;
        legende.innerHTML=descr;
        modal.classList.add("show");
        pdiv.classList.add("show")
        clearInterval(t);
    })
});

close.addEventListener("click",() =>{
    modal.classList.remove("show");
    t = setInterval(() => {showItems()},3000);
});