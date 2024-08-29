const swiper = new Swiper(".swiper",{
    loop :true, 
    autoplay:{
        delay : 5000,
    },
    scrollbar:{
        el :".swiper-scrollbar",
    
    },
})

const form = document.querySelector('form');

form.addEventListener('submit',(e)=> {
    e.preventDefault();
    let errors=[ ];
    if (nameInput.value.trim() === ''){
        errors.push('Veuillez saisir votre nom.');
    }else if (nameInput.value.trim().length <4){
        errors.push("le nom doit contenir au moins 3 caractères");
    }
    
    if (email.value.trim() === ''){
        errors.push ("Veuillez saisir votre email.");
    }else if (!isValidEmail(email.value)){
        errors.push("Veuillez saisir une adresse email valide.");
    }
})

function isValidEmail(email) {
    const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return re.test(email);
}

function displayErrors(errors) {
    const elError = document.querySelectorAll(".error");
    elError.forEach(el =>{ el.remove()});

    const errorContainer = document.createElement("div");
    errorContainer.classList.add('error');
    errors.forEach(error =>{
        const errorMsg = document.createElement('p');
        errorMsg.textContent = error;
        errorContainer.appendChild(errorMsg);
    })
    form.appendChild(errorContainer);
}