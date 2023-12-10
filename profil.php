<?php
session_start();
include './class/Plane.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./dist/style.css">
</head>
<body class="bg-gradient-to-r to-blue-500 bg-cyan-500 from-cyan-500">
    <?php include('./component/header.php');?>
    <?php if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
            $dateObj = new DateTime($_SESSION['naissance']);
            $anniversaire = $dateObj->format('m-d');
        ?>


        <h3>nom : <?=$_SESSION['nom'] ?></h3>
        <h3>prenom : <?=$_SESSION['prenom'] ?></h3>
        <h3>date de naissance: <?= $_SESSION['naissance'] ?></h3>
        <h3>Civilité: <?= $_SESSION['civilite'] ?></h3>
        <h3>email: <?= $_SESSION['email'] ?></h3>
        <h3> n° telephone: <?= $_SESSION['telephone'] ?></h3>
    
 
        <?php
        } else {
        ?>
       
        <?php
        }
        ?>
    
</body>
</html>