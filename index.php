<?php


session_start();
require('./model/Model.php');
include('./controllers/home.php');
include('./controllers/connexion.php');
include('./controllers/inscription.php');
include('./controllers/profil.php');
include('./controllers/meteo.php');
include('./controllers/Admin.php');
include('./controllers/reservation.php');
include('./controllers/addplane.php');
include('./controllers/seeplane.php');
include('./controllers/deleteuser.php');
include('./controllers/ModifyUser.php');
include('./controllers/addmoniteur.php');
include('./controllers/deletemoniteur.php'); 




if (isset($_GET['connexion'])) {
    connexion();
} elseif (isset($_GET['inscription'])) {
    inscription();
} elseif (isset($_GET['profil'])) {
    profil();
} elseif (isset($_GET['meteo'])) {
    LaMeteo();
} elseif (isset($_GET['admin'])) {
    Admin();
} elseif (isset($_GET['plane'])) {
    reservation();
} elseif (isset($_GET['newplane'])) {
    addplane();
} elseif (isset($_GET['modify'])) {
    addplane();
} elseif (isset(($_GET['see']))) {
    seeplane();
} elseif (isset($_GET['deleteuser'])) {
    DeleteUser();
} elseif (isset($_GET['modifyUser'])) {
    ModifyUser();
} elseif (isset($_GET['AddMoniteur'])) {
    Addmoniteur();
} elseif (isset($_GET['deleteMoniteur'])) {
    DeleteMoniteur(); 
} else {
    home();
}
