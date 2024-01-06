<?php
function inscription()
{
    // models 
    require('./model/Adherent.php');
    // vues 

    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['civilite']) && isset($_POST['naissance']) && isset($_POST['email']) && isset($_POST['telephone']) && isset($_POST['password'])) {
        $newuser = new Adherent();
        $newuser->add($_POST['nom'], $_POST['prenom'], $_POST['civilite'], $_POST['naissance'], $_POST['email'], $_POST['telephone'], $_POST['password']);
        $newuser->NewSession();
        header('Location: index.php');
        exit();
    }

    require('./vue/Header.php');
    require('./vue/PhoneMenu.php');
    require('./vue/InscriptionForm.php');
    require('./vue/Footer.php');
}
