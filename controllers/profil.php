
<?php
function profil()
{
    // models 
    require('./model/Adherent.php');
    // vues 
    if (isset($_GET['profil']) && $_GET['profil'] === 'disconnect') {
        session_unset();
        session_destroy();
        header('Location: index.php');
        exit();
    }
    require('./vue/Header.php');
    require('./vue/PhoneMenu.php');
    require('./vue/ChangeinfoForm.php');
    require('./vue/Profil.php');

    require('./vue/Footer.php');
}
