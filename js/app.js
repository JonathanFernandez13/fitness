/*FUNCTION TOGGLE MENU START*/
function toggleMenu () {  
    const navbar = document.querySelector('.navbar');//je creer ma variable et je target ma nav en la selectionnant par son nom de class html
    const burger = document.querySelector('.burger');// je creer ma variable je target mon bouton burger en le selectionnant par son nom de class html
    burger.addEventListener('click', (e) => {   //j'ecoute et appel un evenement par rapport a mon bouton burder quand je click dessus 
      navbar.classList.toggle('show-nav'); // j'ajoute a ma nav les propriéte et valeur donner a show-nav qui est une class css en utilisant Classlist toggle qui permet d'ajouter ou enlever show-nav
    });    
  }
  toggleMenu();
/*FUNCTION TOGGLE MENU END*/
/*FUNCTION CHANGE COLOR ON SCROLL START*/
function changeColorOnScroll(){//Function pour que ma barnav change de couleur quand on scroll
    const navbar = document.querySelector('.nav-fixed'); //ma const navbar qui recupere et target ma nav dans html par son nom (class="nav-fixed")
    window.onscroll = () => {// quand on scroll sur window( ma page) c'est egale a ma function
        if (window.scrollY > 300) {//si window scrollY ()axeY ou axe verticale est plus grand que 300px
            navbar.classList.add('nav-active');// on ajoute nav-active avec le classList.add
        } else {
            navbar.classList.remove('nav-active');// on enlève nav-active avec le classList.remove
        }
    };
}
changeColorOnScroll();
/*FUNCTION CHANGE COLOR ON SCROLL END*/
/*FUNCTION CHANGE COLOR ON SCROLL START*/
let pathArr = window.location.pathname.split('/')
if(pathArr.includes('contact.html')){
    let myForm = document.getElementById("myForm");
    myForm.addEventListener("submit", validForm);
    function validForm(e){
        let nom = document.getElementById("nom");
        let prenom = document.getElementById("prenom");
        let telephone = document.getElementById("number");
        let email = document.getElementById("email");
        
        let myRegex = (/^[a-zA-Z]+$/);
        let myRegexNumb = (/^[.0-9 ]+$/);
        let myRegexMail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        
            if (nom.value === "") {
                errorName.innerHTML = "Saisie ton Prenom";
                errorName.style.color = " red";
                nom.style.borderColor = "red";
                e.preventDefault();
            }
            else if (!myRegex.test(nom.value)) {
                errorName.innerHTML = "Pas de chiffre dans ton prenom!!";
                errorName.style.color = "red";
                nom.style.borderColor = "red";
                e.preventDefault();
            }
            else {
                errorName.innerHTML = "Bravo!!";
                errorName.style.color = "green";
                nom.style.borderColor = "green";
            }
            if (prenom.value === "") {
                errorFirstName.innerHTML = "Saisie ton Nom";
                errorFirstName.style.color = " red";
                prenom.style.borderColor = "red";
                e.preventDefault();
            }
            else if (!myRegex.test(prenom.value)) {
                errorFirstName.innerHTML = "Pas de chiffre dans ton nom!!";
                errorFirstName.style.color = "red";
                prenom.style.borderColor = "red";
                e.preventDefault();
            }
            else {
                errorFirstName.innerHTML = "Bravo!!";
                errorFirstName.style.color = "green";
                prenom.style.borderColor = "green";
            }
            if (telephone.value === "") {
                errorTel.innerHTML = "Saisie ton numero de tel";
                errorTel.style.color = " red";
                telephone.style.borderColor = "red";
                e.preventDefault();
            }
            else if (!myRegexNumb.test(telephone.value)) {
                errorTel.innerHTML = "Pas de lettre dans ton 06!!";
                errorTel.style.color = "red";
                telephone.style.borderColor = "red";
                e.preventDefault();
            }
            else {
                errorTel.innerHTML = "Bravo!!";
                errorTel.style.color = "green";
                telephone.style.borderColor = "green";
            }
            if (email.value === "") {
                errorEmail.innerHTML = "Saisie ton e-mail";
                errorEmail.style.color = " red";
                email.style.borderColor = "red";
                e.preventDefault();
            }
            else if (!myRegexMail.test(email.value)) {
                errorEmail.innerHTML = "e-mail non valide";
                errorEmail.style.color = "red";
                email.style.borderColor = "red";
                e.preventDefault();
            }
            else {
                errorEmail.innerHTML = "Bravo!!";
                errorEmail.style.color = "green";
                email.style.borderColor = "green";
            }
        }
}
