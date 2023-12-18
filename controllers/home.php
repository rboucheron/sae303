<?php

function home()
{
    // models 


    require('./class/Plane.php');
    // vues 
    require('./component/Header.php');
    require('./component/PhoneMenu.php');
    require('./component/Accueil.php');
    require('./component/WhiteBlock.php');
    require('./component/Activites.php');
    require('./component/AllPlane.php');
    require('./component/Galerie.php');
    require('./component/Forfait.php');
    require('./component/Footer.php');
}
