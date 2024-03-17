var x = document.getElementById("login");
var y = document.getElementById("register");
var loginBtn = document.getElementById("loginBtn");
var signInBtn = document.getElementById("signInBtn");

var register2 = document.getElementById("register2");
var z = document.getElementById("btn");
var formbox = document.getElementById("form-box");

loginBtn.addEventListener("click", login);
signInBtn.addEventListener("click", register);

function register(){
    x.style.left = "-400px";
    y.style.left = "100px";
    register2.style.left = "450px";
    z.style.left = "110px";
    formbox.style.height = "700px"; 
    formbox.style.width = "800px"; 
}

function login(){
    x.style.left = "100px";
    y.style.left = "550px";
    register2.style.left = "550px";
    z.style.left = "0px";
    formbox.style.height = "540px";
    formbox.style.width = "480px"; 
}