<?php
include './class/Model.php';
include './class/Adherent.php';
include './class/Plane.php';
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

<body class="bg-cyan-500 overflow-hidden overflow-y-scroll">

    <?php include('./component/Header.php') ?>
    <?php include('./component/PhoneMenu.php') ?>
    <?php include('./component/Accueil.php') ?>
    <?php include('./component/Event.php') ?>
    <?php include('./component/Activites.php') ?>
    <?php include('./component/AllPlane.php') ?>

    <?php include('./component/Forfait.php') ?>

    <script src="./js/allModal.js"></script>
    <script src="./js/apiMeteo.js"></script>
</body>

</html>