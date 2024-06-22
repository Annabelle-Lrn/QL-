function showCarrousel(diapo){
    const diapoimg = document.getElementById(diapo);
    diapoimg.append(diapoimg.firstElementChild);
    setTimeout(()=> showCarrousel(diapo),6000);
}
showCarrousel("diapo")