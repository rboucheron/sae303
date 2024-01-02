<?php

function home()
{
    // models 
    require('./model/Plane.php');
    require('./model/Meteo.php');
    // vues 
    require('./vue/Header.php');
    require('./vue/PhoneMenu.php');
    require('./vue/Accueil.php');
    require('./vue/WhiteBlock.php');
    require('./vue/Activites.php');
<<<<<<< HEAD

=======
>>>>>>> c81f84751ac81633fa092aa5293b2249aed9d539
    require('./vue/AllPlane.php');
    require('./vue/MeteoActuelle.php');

    require('./vue/Forfait.php');
    require('./vue/Footer.php');
}

