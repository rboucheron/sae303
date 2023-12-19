<?php
function Admin()
{
    include('./model/administrateur.php');
    require('./vue/Header.php');
    if (isset($_SESSION['AdminNom']) && isset($_SESSION['AdminPrenom']) && isset($_SESSION['AdminEmail']) && isset($_SESSION['AdminTelephone'])) {
        echo "salut";
    } else {
        include('./vue/ConnexionAdmin.php');
    }
    require('./vue/Footer.php');
}
