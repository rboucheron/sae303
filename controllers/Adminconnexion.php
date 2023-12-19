<?php
function Admin()
{
    include('./model/administrateur.php');
    require('./vue/Header.php');
    include('./vue/ConnexionAdmin.php'); 
   
   



    require('./vue/Footer.php');

}
