<?php
function DeleteUser()
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
        if(isset($_GET['deleteuser'])){
            $Delete = new Adherent; 
            $Delete->delete($_GET['deleteuser']); 
            require('./vue/admin-vue/AdminBoard.php');
        }
    } 
    
    require('./vue/Footer.php');
}
