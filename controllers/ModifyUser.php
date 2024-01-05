<?php 

function ModifyUser()
{
    // models 
    require('./model/Adherent.php');

    // vues 
    require('./vue/Header.php');
    require('./vue/PhoneMenu.php');
    require('./vue/admin-vue/ModifyUser.php');
    require('./vue/Footer.php');
}