<?php

function gallery()
{
    // models 
    require('./model/Adherent.php');
    require('./model/administrateur.php');
    require('./model/moniteur.php');
    // vues 
    require('./vue/Header.php');
    require('./vue/Galerie.php');

    require('./vue/Footer.php');
}