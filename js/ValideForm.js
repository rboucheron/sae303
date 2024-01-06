function valide() {
    var nom = document.getElementById('nom').value;
    var prenom = document.getElementById('prenom').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    if (nom == '' || prenom == '' || email == '' || password == '') {
        document.getElementById('erreur').innerText = "Vous n'avez pas remplit les champs obligatoires";
        return false;
    } else {
        return true;
    }

}