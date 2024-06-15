function carrousel() {
    const slides = document.getElementsByClassName("carrousel-img");
    const slideActive = document.getElementsByClassName("active");

    newIndex = [...slides].indexOf(slideActive);

    if (newIndex < 0) newIndex = [...slides].length - 1;
    if (newIndex >= [...slides].length) newIndex = 0;
    slides[newIndex].classList.add("active");

    slideActive.classList.remove("active");
}

setInterval(carrousel, 6000);