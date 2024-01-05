<?php

function connexion()
{
    // models 
    require('./model/Adherent.php');
    require('./model/administrateur.php');
    require('./model/moniteur.php');
    // vues 
    require('./vue/Header.php');
    require('./vue/PhoneMenu.php');
    require('./vue/ConnexionForm.php');
    require('./vue/Footer.php');
}
