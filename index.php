<?php
session_start();
require('./class/Model.php');
include('./controllers/home.php');
include('./controllers/connexion.php');



if (isset($_GET['connexion'])) {
    connexion();
} else {
    home();
}
