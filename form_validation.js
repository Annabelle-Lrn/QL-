function mailIsValid(email){
    const verifEmail =/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
   return verifEmail.test(email)

}


// function validation_form(){

// }