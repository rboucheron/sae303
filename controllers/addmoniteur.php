<?php
function Addmoniteur()
{

    require('./model/moniteur.php');
    require('./vue/Header.php');
    if (isset($_SESSION['AdminNom']) && isset($_SESSION['AdminPrenom']) && isset($_SESSION['AdminEmail']) && isset($_SESSION['AdminTelephone'])) {
        require('./vue/admin-vue/AddMoniteur.php');
    } 
    require('./vue/Footer.php');
}