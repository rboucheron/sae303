<?php

function home()
{
    // models 
    require('./model/Plane.php');
    require('./model/Meteo.php');
    require('./model/Reservation.php');
    require('./model/moniteur.php');
    // vues 
    require('./vue/Header.php');
    require('./vue/PhoneMenu.php');
    require('./vue/Accueil.php');
    require('./vue/WhiteBlock.php');
    require('./vue/Activites.php');
    require('./vue/AllPlane.php');
    require('./vue/AllMoniteur.php');
    require('./vue/MeteoActuelle.php');
    require('./vue/Galerie.php');
    require('./vue/Forfait.php');
  
    
    require('./vue/Footer.php');
}

