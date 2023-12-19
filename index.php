<?php
session_start();
require('./model/Model.php');
include('./controllers/home.php');
include('./controllers/connexion.php');
include('./controllers/inscription.php');
include('./controllers/profil.php');
include('./controllers/meteo.php');




if (isset($_GET['connexion'])) {
    connexion();
} elseif (isset($_GET['inscription'])) {
    inscription();
} elseif (isset($_GET['profil'])) {
    profil();
} elseif (isset($_GET['meteo'])) {
    LaMeteo();
} else {
    home();
}
