<?php 

function AddDispo() {
    require('./model/administrateur.php');
    require('./model/Adherent.php'); 
    require('./model/moniteur.php');
    require('./model/Plane.php');
    require('./model/Reservation.php'); 
    require('./vue/Header.php');
    if (isset($_SESSION['AdminNom']) && isset($_SESSION['AdminPrenom']) && isset($_SESSION['AdminEmail']) && isset($_SESSION['AdminTelephone'])) {
        require('./vue/admin-vue/addDispo.php');
    } 
    require('./vue/Footer.php');
}
?>