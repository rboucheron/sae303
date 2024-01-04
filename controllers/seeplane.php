<?php

function seeplane()
{
    // models 
    require('./model/Plane.php');
    require('./model/Reservation.php');
    // vues 
    require('./vue/Header.php');
    require('./vue/PhoneMenu.php');
    require('./vue/seePlane.php');
    require('./vue/Footer.php');
}
