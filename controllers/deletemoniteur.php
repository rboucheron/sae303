
<?php
function DeleteMoniteur()
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
        if(isset($_GET['deleteMoniteur'])){
            $Delete = new Moniteur; 
            $DeleteReservation = new Reservation; 
            $DeleteReservation->DeleteMoniteur($_GET['deleteMoniteur']); 
            $Delete->delete($_GET['deleteMoniteur']); 
            require('./vue/admin-vue/AdminBoard.php');
        }
    } 
    
    require('./vue/Footer.php');
}
