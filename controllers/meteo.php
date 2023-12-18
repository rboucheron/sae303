<?php 

function LaMeteo()
{
    // models 
    require('./class/Meteo.php');

    // vues 
    require('./component/Header.php');
    require('./component/MeteoActuelle.php');
    require('./component/Footer.php');
}