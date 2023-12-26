<?php
function reservation()
{
    require('./vue/Header.php');
    include('./model/Plane.php');
    include('./model/Reservation.php');
    include('./vue/Reservation.php');
    require('./vue/Footer.php');
}
