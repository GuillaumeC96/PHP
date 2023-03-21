document.querySelector('#nom').oninput = function () {
    fnom()
}

document.querySelector('#prenom').oninput = function () {
    fprenom()
}

document.querySelector('#postal').oninput = function () {
    fpostal()
}

document.querySelector('#adresse').oninput = function () {
    fadresse()
}

document.querySelector('#ville').oninput = function () {
    fville()
}

document.querySelector('#email').oninput = function () {
    femail()
}

document.querySelector('#controle').oninput = function () {
    fcontrole()
}

document.querySelector('#question').oninput = function () {
    fquestion()
}

// Entrer un nom obligatoirement avec les caractères autorisés 
function fnom(e) {
    var nom = document.getElementById('nom').value
    var regnom = new RegExp("^[a-zA-Z-'çéè]{1,}$")
    var valide = regnom.test(nom)

    var msgnom = document.querySelector("#msgnom")

    if (valide == false) {
        msgnom.innerHTML = "Entrez uniquement des lettres"
        e.preventDefault()
    } else {
        msgnom.innerHTML = ""
    }

}

// Entrer un prenom obligatoirement avec les caractères autorisés 
function fprenom(e) {
    var prenom = document.getElementById('prenom').value
    var regprenom = new RegExp("^[a-zA-Z-çéè]{1,}$")
    var valide = regprenom.test(prenom)

    var msgprenom = document.querySelector("#msgprenom")

    if (valide == false) {
        msgprenom.innerHTML = "Entrez uniquement des lettres"
        e.preventDefault()
    } else {
        msgprenom.innerHTML = ""
    }

}

// Un seul choix possible obligatoirement, impossible de sélectionner les deux
function fsexe (e) {

    var fem = document.getElementById("fem").checked
    var hom = document.getElementById("hom").checked

    var msgsexe = document.querySelector("#msgsexe")


    if (fem == false && hom == false) {
        msgsexe.innerHTML = "Choisissez une option"
        e.preventDefault()
    } else {
        msgsexe.innerHTML = ""
    }

}

// mettre une date valide obligatoirement
function fdate (e) {
    var date = document.getElementById('date').value
    var msgdate = document.querySelector("#msgdate")
   
    if (date == "") {
        msgdate.innerHTML = "Indiquez votre date de naissance"
        e.preventDefault()
    } else {
        msgdate.innerHTML = ""
    }

}

// Entrer un code postal avec 5 chiffres obligatoirement
function fpostal(e) {
    var postal = document.getElementById('postal').value
    var regpostal = new RegExp("^[0-9]{5,5}$")
    var valide = regpostal.test(postal)

    var msgpostal = document.querySelector("#msgpostal")

    if (valide == false) {
        msgpostal.innerHTML = "Entrer uniquement 5 chiffres"
        e.preventDefault()
    } else {
        msgpostal.innerHTML = ""
    }

}

// Entrer une adresse valide avec les caractères autorisés, saisie non obligatoire
function fadresse(e) {
    var adresse = document.getElementById('adresse').value
    var regadresse = new RegExp("^[a-zA-Z0-9- éè'ç]{0,}$")
    var valide = regadresse.test(adresse)

    var msgadresse = document.querySelector("#msgadresse")

    if (valide == false) {
        msgadresse.innerHTML = "Indiquez votre adresse"
        e.preventDefault()
    } else {
        msgadresse.innerHTML = ""
    }

}

// Entrer une ville valide avec les caractères autorisés, saisie non obligatoire
function fville(e) {
    var ville = document.getElementById('ville').value
    var regville = new RegExp("^[a-zA-Z-éè']{0,}$")
    var valide = regville.test(ville)

    var msgville = document.querySelector("#msgville")

    if (valide == false) {
        msgville.innerHTML = "Indiquez votre ville (uniquement des lettres)"
        e.preventDefault()
    } else {
        msgville.innerHTML = ""
    }

}

// Entrer une adresse mail valide, avec les caractères autorisés obligatoirement
function femail(e) {
    var email = document.getElementById('email').value
    var regemail = new RegExp("^[a-zA-Z-éè'@._]{1,}$")
    var valide = regemail.test(email)

    var msgemail = document.querySelector("#msgemail")

    if (valide == false) {
        msgemail.innerHTML = "Indiquez une adresse mail valide"
        e.preventDefault()
    } else {
        msgemail.innerHTML = ""
    }

}

// Confirmer l'adresse mail obligatoirement
function fcontrole(e) {
    var controle = document.getElementById('controle').value
    var regcontrole = new RegExp("^[a-zA-Z-éè'@._]{1,}$")
    var valide = regcontrole.test(controle)

    var msgcontrole = document.querySelector("#msgcontrole")

    if (valide == false) {
        msgcontrole.innerHTML = "Indiquez une adresse mail valide"
        e.preventDefault()
    } else {
        msgcontrole.innerHTML = ""
    }

}

// Choisir un seul et unique sujet dans la liste obligatoirement
function fsujet (e) {
    
    var sujet = document.getElementById('sujet').value
    var msgsujet = document.querySelector("#msgsujet")

    if (sujet == "Veuillez sélectionner un sujet") {
        msgsujet.innerHTML = "Veuillez cliquer sur un sujet"
        e.preventDefault()
    } else {
        msgsujet.innerHTML = ""
    }

}

// Posez une question avec les caractères autorisés obligatoirement
function fquestion(e) {
    var question = document.getElementById('question').value
    var regquestion = new RegExp("^[a-zA-Z0-9 -!?,.;:éèà@()'$£€&°çê]{1,}$")
    var valide = regquestion.test(question)

    var msgquestion = document.querySelector("#msgquestion")

    if (valide == false) {
        msgquestion.innerHTML = "Entrez votre question"
        e.preventDefault()
    } else {
        msgquestion.innerHTML = ""
    }

}

// Cochez la case obligatoirement avant envoie du formulaire
function fcheck (e) {

    
    var check = document.getElementById('check').checked

    var msgcheck = document.querySelector("#msgcheck")


    if (check == false) {
        msgcheck.innerHTML = "Cocher la case pour envoyer"
        e.preventDefault()
    } else {
        msgcheck.innerHTML = ""
    }

}

function verif (e) {
    fnom(e)
    fprenom(e)
    fsexe(e)
    fdate(e)
    fpostal(e)
    fadresse(e)
    fville(e)
    femail(e)
    fcontrole(e)
    fsujet(e)
    fquestion(e)
    fcheck(e)
}

document.getElementById("submit").addEventListener("click", verif); 