const form = document.getElementById("login");
//const email = document.querySelector('input[name="user-email"');
//const pass = document.querySelector('input[name="user-password"');
//const message = document.getElementById("wrong-format");
//const message = document.getElementById("wrong-format");

//const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+{}\[\]:;<>,.?~\\|\-]).{8,50}$/;
const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
const uppercaseRegex = /[A-Z]/;
const lowercaseRegex = /[a-z]/;
const specialCharRegex = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\|\-]/;
const digitRegex = /\d/;


form.addEventListener("submit", sendForm);

function sendForm(e){
    e.preventDefault();

    const formData = new FormData(e.currentTarget);    
    const data = Object.fromEntries(formData.entries());
    //data["user-email"]
    emailValidation(data);
    passwordValidation(data);
}

function emailValidation(aux) {
    let message = document.getElementById("wrong-format");
    let variable = aux["user-email"];
    if (emailRegex.test(variable)){
        message.style.display = "none";
    }       
    else {
        message.style.display = "block";
    } 
}

function passwordValidation(aux) {
    let pass = aux["user-password"];
    const errorMessage = document.querySelector('[data-message="password"]')
    let number = document.getElementById("wrong-format-number");
    if (uppercaseRegex.test(pass)) {
        console.log(pass);
    } else {
        errorMessage.textContent = "- Debe contener al menos una mayúscula."
        //uppercase.style.display = "block";
        console.log(pass);
    }
    //uppercaseRegex.test(pass) ? uppercase.style.display = "none" : uppercase.style.display = "block";
    lowercaseRegex.test(pass) ? lowercase.style.display = "none" : lowercase.style.display = "block";
    specialCharRegex.test(pass) ? spcharacter.style.display = "none" : spcharacter.style.display = "block";
    digitRegex.test(pass) ? number.style.display = "none" : number.style.display = "block";
    

}

/*function emailValidation(user_email) {
    if (emailRegex.test(user_email.value)){
        console.log(user_email.value);
        message.style.display = "block";
        console.log("La dirección de correo electrónico es válida.");
    }       
    else {
        console.log(user_email.value);
        message.style.display = "block";
        console.log("La dirección de correo electrónico no es válida.");
    } 
}*/

function passwordValidation(user_pass) {

}