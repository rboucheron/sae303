<?php
function reservation()
{
    include('./model/Plane.php');
    include('./model/Reservation.php');
    require('./vue/Header2.php');
    require('./vue/PhoneMenu.php');
    if(isset($_SESSION['id'])){
        include('./vue/adherent-vue/Reservation.php');
    }
    if(isset($_SESSION['MoniteurId'])){
        include('./vue/moniteur-vue/Reservation.php');
    }
  
    
    require('./vue/Footer.php');
}
