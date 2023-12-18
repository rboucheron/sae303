<?php
session_start();
require('./class/Model.php');
include('./controllers/home.php');
include('./controllers/connexion.php');
include('./controllers/inscription.php'); 




if (isset($_GET['connexion'])) {
    connexion();
} elseif (isset($_GET['inscription'])) {
    inscription();
} else {
    home();
}
