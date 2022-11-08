function toggleMenu () {
    const navbar = document.querySelector('.navbar');
    const burger = document.querySelector('.burger');
    burger.addEventListener('click', (e) => {
      navbar.classList.toggle('show-nav');
    });
  }
  toggleMenu();
function changeColorOnScroll(){
    const navbar = document.querySelector('.nav-fixed'); 
    this.onscroll = () => {
        if (this.scrollY > 300) {
            navbar.classList.add('nav-active');
        } else {
            navbar.classList.remove('nav-active');
        }
    };
}
changeColorOnScroll()


let pathArray = window.location.pathname.split("/");
if( pathArray.includes('contact.php')){
let myForm = document.getElementById("myForm");


myForm.addEventListener("submit", validForm)


function validForm(e){
let nom = document.getElementById("nom");
let prenom = document.getElementById("prenom");
let telephone = document.getElementById("number");
let email = document.getElementById("email");

let errorName = document.getElementById("errorName");
let errorFirstName = document.getElementById("errorFirstName");
let errorTel = document.getElementById("errorTel");
let errorEmail = document.getElementById("errorEmail");


let myRegex = (/^[a-zA-Z]+$/);
let myRegexNumb = (/^[.0-9 ]+$/);
let myRegexMail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (nom.value === "") {
        errorName.innerHTML = "Saisir votre Prenom svp";
        errorName.style.color = " red";
        nom.style.borderColor = " red";
        e.preventDefault();
    }
    else if (!myRegex.test(nom.value)) {
        errorName.innerHTML = "Saisir un prenom valide!!";
        errorName.style.color = "red";
        nom.style.borderColor = " red";
        e.preventDefault();
    }
    else {
        errorName.innerHTML = "Merci!!";
        errorName.style.color = "green";
        nom.style.borderColor = " green";
    }
    if (prenom.value === "") {
        errorFirstName.innerHTML = "Saisir votre Nom svp";
        errorFirstName.style.color = " red";
        prenom.style.borderColor = " red";
        e.preventDefault();
    }
    else if (!myRegex.test(prenom.value)) {
        errorFirstName.innerHTML = "Saisir un nom valide!!";
        errorFirstName.style.color = "red";
        prenom.style.borderColor = " red";
        e.preventDefault();
    }
    else {
        errorFirstName.innerHTML = "Merci !!";
        errorFirstName.style.color = "green";
        prenom.style.borderColor = " green";
    }
    if (telephone.value === "") {
        errorTel.innerHTML = "Saisie ton numero de tel";
        errorTel.style.color = " red";
        telephone.style.borderColor = " red";
        e.preventDefault();
    }
    else if (!myRegexNumb.test(telephone.value)) {
        errorTel.innerHTML = "Saisir un numero valide Svp!!";
        errorTel.style.color = "red";
        telephone.style.borderColor = " red";
        e.preventDefault();
    }
    else {
        errorTel.innerHTML = "Merci !!";
        errorTel.style.color = "green";
        telephone.style.borderColor = "green";
    }
    if (email.value === "") {
        errorEmail.innerHTML = "Saisie ton e-mail";
        errorEmail.style.color = " red";
        email.style.borderColor = " red";
        e.preventDefault();
    }
    else if (!myRegexMail.test(email.value)) {
        errorEmail.innerHTML = "e-mail non valide";
        errorEmail.style.color = "red";
        email.style.borderColor = " red";
        e.preventDefault();
    }
    else {
        errorEmail.innerHTML = "c'est Bon!!";
        errorEmail.style.color = "green";
        email.style.borderColor = " green";
    }
    if (sujet.value === "") {
        errorSujet.innerHTML = "Saisie ton e-mail";
        errorSujet.style.color = " red";
        sujet.style.borderColor = " red";
        e.preventDefault();
    }
    else if (!myRegex.test(sujet.value)) {
        errorSujet.innerHTML = "e-mail non valide";
        errorSujet.style.color = "red";
        sujet.style.borderColor = " red";
        e.preventDefault();
    }
    else {
        errorSujet.innerHTML = "c'est Bon!!";
        errorSujet.style.color = "green";
        sujet.style.borderColor = " green";
    }
    if (message.value === "") {
        errorMessage.innerHTML = "Saisie ton message";
        errorMessage.style.color = " red";
        message.style.borderColor = " red";
        e.preventDefault();
    }
    else if (!myRegex.test(message.value)) {
        errorMessage.innerHTML = "veuillez ecrire votre message";
        errorMessage.style.color = "red";
        mesasge.style.borderColor = " red";
        e.preventDefault();
    }
    else {
        errorMessage.innerHTML = "c'est Bon!!";
        errorMessage.style.color = "green";
        message.style.borderColor = " green";
    }
}

}




