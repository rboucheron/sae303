<?php 

function LaMeteo()
{
    // models 
    require('./model/Meteo.php');

    // vues 
    require('./vue/Header.php');
    require('./vue/MeteoActuelle.php');
    require('./vue/Footer.php');
}