let email  = document.getElementById("email");
let pass = document.getElementById("pass")
let icons = document.getElementsByClassName("fas fa-user");
let icons2 = document.getElementsByClassName("fas fa-key");
email.addEventListener('focusin',focusIn);
email.addEventListener('focusout',focusOut);
pass.addEventListener("focusin",focusIn2);
pass.addEventListener('focusout',focusOut2);

pass.addEventListener("focusin",)
function focusIn(i){ // make icon green if there focus
    icons[0].style.color="green";

}
function focusOut(i){
        icons[0].style.color="white";

}
function focusIn2(i){ // make icon green if there focus
    icons2[0].style.color="green";

}
function focusOut2(i){
    icons2[0].style.color="white";

}