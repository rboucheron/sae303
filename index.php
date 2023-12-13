<?php
session_start();
include './class/Plane.php';
$_SESSION['today'] = date("m-d");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AC2FL</title>
    <link rel="stylesheet" href="./dist/style.css">
    <link rel="icon" type="image/svg+xml" href="./assets/images/logo.svg" />
</head>
<body class="bg-gradient-to-r to-blue-500 bg-cyan-500 from-cyan-500 overflow-hidden overflow-y-scroll">
    <?php include('./component/Header.php') ?>
    <?php include('./component/PhoneMenu.php') ?>
    <?php include('./component/Accueil.php') ?>
    <?php include('./component/Event.php') ?>
    <?php include('./component/Activites.php') ?>
    <?php include('./component/AllPlane.php') ?>
    


    <script src="./js/allModal.js"></script>
</body>

</html>