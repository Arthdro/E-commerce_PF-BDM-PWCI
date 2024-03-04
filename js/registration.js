const registratioForm = document.getElementById("registration");

const usernameSyntnax = 0;
const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,49}$/;
const syntaxRegex = /^[a-zA-ZÀ-ÿñÑ' ']{2,49}$/;
const uppercaseRegex = /[A-Z]/;
const lowercaseRegex = /[a-z]/;
const specialCharRegex = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\|\-]/;
const digitRegex = /\d/;


//Contraseña
//Correo
//Trim
//Sintaxis
//Fecha

registratioForm.addEventListener("submit", sendForm);

function sendForm(e){
    e.preventDefault();

    const formData = new FormData(e.currentTarget);    
    const data = Object.fromEntries(formData.entries());
     
    syntaxValidation(data['firstNames']);
    syntaxValidation(data['lastNames']);
    emailValidation(data['email']);
    //syntaxValidation
    //passwordValidation(data);
}

function emailValidation(aux) {
    //let message = document.getElementById("wrong-format");
    //let email = aux.trim();
    if (emailRegex.test(aux)){ 
        console.log(aux);
        console.log("El formato es valido");
        //message.style.display = "none";
    }       
    else {
        console.log(aux);
        console.log("El formato NO es valido");
       //message.style.display = "block";
    } 
}

function syntaxValidation(word) {
    //let message = document.getElementById("wrong-format");
    //let word = aux["user-email"];
    if (syntaxRegex.test(word)){ 
        console.log(word);
        console.log("El formato es valido");
        //message.style.display = "none";
    }       
    else {
        console.log(word);
        console.log("El formato NO es valido");
        //message.style.display = "block";
    } 
}

