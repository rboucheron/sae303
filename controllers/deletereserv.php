<?php
function deletereserv()
{
    // models 
    require('./model/administrateur.php');
    require('./model/Adherent.php');
    require('./model/Plane.php');
    require('./model/Reservation.php');
    require('./model/moniteur.php');
    // vues 
    require('./vue/Header.php');
    require('./vue/PhoneMenu.php');
    if (isset($_SESSION['AdminNom']) && isset($_SESSION['AdminPrenom']) && isset($_SESSION['AdminEmail']) && isset($_SESSION['AdminTelephone'])) {
        $DeleteReservation = new Reservation;
        $DeleteReservation->Delete($_GET['deletereserv']);
        require('./vue/admin-vue/AdminBoard.php');
    }

    require('./vue/Footer.php');
}
