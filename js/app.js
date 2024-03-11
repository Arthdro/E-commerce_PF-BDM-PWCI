const form = document.getElementById("login");
const signInForm = document.getElementById("register");
//const signInFormSec = document.getElementById("register2");
const syntaxRegex = /^[a-zA-ZÀ-ÿñÑ' ']{2,49}$/;
const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
const uppercaseRegex = /[A-Z]/;
const lowercaseRegex = /[a-z]/;
const specialCharRegex = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\|\-]/;
const digitRegex = /\d/;
const characterQuantity = /^.{8,50}$/;


form.addEventListener("submit", login);
signInForm.addEventListener("submit", signIn);

function login(e){
    e.preventDefault();

    const formData = new FormData(e.currentTarget);    
    const data = Object.fromEntries(formData.entries());

    //passwordValidation(data);
    if (blankSpaceLogin(data)) {
        return;
    } 
    else if(emailValidation(data)) {
        return;
    }
    else{
        let xhr = new XMLHttpRequest();
        const user = {
            username: data["user-email"].trim(),
            password: data["user-password"].trim()
        };
        xhr.open("POST", "../controller/login.php", true); // true en modo asicrono
        //window.location.href = "../views/landing-page2.html";
    }
}

function signIn(e){
    e.preventDefault();
    const formData = new FormData(e.currentTarget);    
    const data = Object.fromEntries(formData.entries());

    if (blankSpaceSignIn(data)) {
        return;
    } 
    else if(syntaxValidation(data)) {
        return;
    }
    else if(passwordValidation(data)){
        return;
    }
    else if(emailValidation(data)){
        return;
    }
    else{
        window.location.href = "../views/landing-page2.html";
    }
    /*blankSpaceSignIn(data);
    syntaxValidation(data);
    passwordValidation(data);
    emailValidation(data);*/
}

function emailValidation(aux) {
    let errors = [];
    //let message = document.getElementById("wrong-format");
    let variable = aux["user-email"];
    if (!emailRegex.test(variable)){
        //console.log(variable);
        //console.log("Formato correcto");
        errors.push({ msg: "El formato de email no es válido." });
        //message.style.display = "none";
    }       
    /*else {
        console.log(variable);
        console.log("Formato incorrecto");
        //message.style.display = "block";
    } */
    if(errors.length) {
        alert(JSON.stringify(errors));
        return true;
    }
}

function passwordValidation(aux) {
    let errors = [];
    let pass = aux["user-password"];
    //const errorMessage = document.querySelector('[data-message="password"]')
    //let number = document.getElementById("wrong-format-number");
    if (!uppercaseRegex.test(pass)) {
        /*console.log("Formato correcto");
        console.log(pass);*/
        errors.push({ msg: "La contraseña requiere una mayúscula." });
    } 
    if (!lowercaseRegex.test(pass)) {
        /*console.log("Formato correcto");
        console.log(pass);*/
        errors.push({ msg: "La contraseña requiere una minúsucla." });
    } 
    if (!specialCharRegex.test(pass)) {
        /*console.log("Formato correcto");
        console.log(pass);*/
        errors.push({ msg: "La contraseña requiere un caracter especial." });
    } 
    if (!digitRegex.test(pass)) {
        /*console.log("Formato correcto");
        console.log(pass);*/
        errors.push({ msg: "La contraseña requiere un número." });
    } 
    if (!characterQuantity.test(pass)) {
        /*console.log("Formato correcto");
        console.log(pass);*/
        errors.push({ msg: "La contraseña requiere al menos 8 caracteres." });
    } 
    /*else {
        //errorMessage.textContent = "- Debe contener al menos una mayúscula."
        //uppercase.style.display = "block";
        console.log("Formato incorrecto");
        console.log(pass);
    }*/
    //uppercaseRegex.test(pass) ? uppercase.style.display = "none" : uppercase.style.display = "block";
    //lowercaseRegex.test(pass) ? /*lowercase.style.display = "none"*/ console.log("Formato correcto"): /*lowercase.style.display = "block"*/console.log("Formato incorrecto");
    //specialCharRegex.test(pass) ? /*spcharacter.style.display = "none"*/ console.log("Formato correcto") : /*spcharacter.style.display = "block"*/ console.log("Formato incorrecto");
    //digitRegex.test(pass) ? /*number.style.display = "none"*/ console.log("Formato correcto") : /*number.style.display = "block"*/ console.log("Formato incorrecto");
    
    if(errors.length) {
        alert(JSON.stringify(errors));
        return true;
    }
}

function blankSpaceSignIn(aux){
    let errors = [];
    //let stringe = aux["fullName"];
    //console.log(stringe);
        
    if(!aux["fullName"] || !aux["fullName"].trim()) {
        errors.push({ msg: "Campo nombre está vacío." });
    }
    if(!aux["user-email"] || !aux["user-email"].trim()) {
        errors.push({ msg: "Campo correo está vacío." });
    }
    if(!aux["user-name"] || !aux["user-name"].trim()) {
        errors.push({ msg: "Campo nombre de usuario está vacío." });
    }
    if(!aux["user-password"] || !aux["user-password"].trim()) {     // No se valida email porque ya ese esta valdiando desde el formulario
        errors.push({ msg: "Campo contraseña está vacío." });
    }

    if(errors.length) {
        alert(JSON.stringify(errors));
        return true;
    }
}

function blankSpaceLogin(aux){
    let errors = [];
    //let stringe = aux["fullName"];
    //console.log(stringe);

    if(!aux["user-email"] || !aux["user-email"].trim()) {
        errors.push({ msg: "Campo correo está vacío." });
    }
    if(!aux["user-password"] || !aux["user-password"].trim()) {     // No se valida email porque ya ese esta valdiando desde el formulario
        errors.push({ msg: "Campo contraseña está vacío." });
    }

    if(errors.length) {
        alert(JSON.stringify(errors));
        return true;
    }
}

function syntaxValidation(aux) {
    let errors = [];
    //let message = aux["wrong-format-fullname"];
    let word = aux["fullName"];
    if (!syntaxRegex.test(word)){ 
        //console.log("El formato es valido");
        //message.style.display = "none";
        errors.push({ msg: "Hay caracterés no validos en el campo 'Nombre completo'." });
    }       

    if(errors.length) {
        alert(JSON.stringify(errors));
        return true;
    }
    /*else {
        //console.log("El formato NO es valido");
        //message.style.display = "block";
    } */
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