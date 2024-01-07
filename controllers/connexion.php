<?php

function connexion()
{
    // models 
    require('./model/Adherent.php');
    require('./model/administrateur.php');
    require('./model/moniteur.php');
    // vues 
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $connexion = new Adherent();
        $message = $connexion->connexion($_POST['email'], $_POST['password']);
        if ($message == false) {
            $admin = new administrateur();
            $messages = $admin->connexion($_POST['email'], $_POST['password']);
            if ($messages == false) {
                $moniteur = new moniteur();
                $messages = $moniteur->connexion($_POST['email'], $_POST['password']);
                if ($messages == false) {
                    echo "<div class='text-red-500 text-xl p-2 text-center'>Mot de passe ou Adresse e-mail incorrect</div>";
                } else {
                    $moniteur->NewSession();
                    header('Location: index.php');
                    exit();
                }
            } else {
                $admin->NewSession();
                header('Location: index.php');
                exit();
            }
        } else {
            $connexion->NewSession();
            header('Location: index.php');
            exit();
        }
    }
    require('./vue/Header.php');
    require('./vue/PhoneMenu.php');
    require('./vue/ConnexionForm.php');
    require('./vue/Footer.php');
}


