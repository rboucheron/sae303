<?php
session_start();

include './class/Adherent.php';

if (isset($_GET['disconnect'])) {
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit();
}
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
    <?php include('./component/header.php'); ?>
    <?php if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {

    ?>

        <div class="grid grid-cols-2 gap-4  w-3/4 m-auto p-3 rounded-xl mt-10 mb-10">
            <div>
                <h2 class="text-5xl text-white">Données personnelles</h2>
                <p class="mt-2 text-xl">
                    <span class="text-white">Nom :</span> <?= $_SESSION['nom'] ?><br />
                    <span class="text-white">Prénom :</span> <?= $_SESSION['prenom'] ?><br />
                    <span class="text-white">Date de naissance :</span> <?= $_SESSION['naissance'] ?><br />
                    <span class="text-white">Civilité :</span> <?= $_SESSION['civilite'] ?>
                </p>
            </div>
            <div>
                <h2 class="text-5xl text-white">Coordonnées</h2>
                <p class="mt-2 text-xl">

                    <span class="text-white">Email :</span> <?= $_SESSION['email'] ?><br />
                    <span class="text-white"> N° téléphone :</span> <?= $_SESSION['telephone'] ?>
                </p>
            </div>
        </div>







    <?php
    } else {
    ?>

    <?php
    }
    ?>
    <div class="w-3/4 m-auto flex flex-col place-content-center">

        <div class="p-2 w-1/4 text-center border-2 border-cyan-100 cursor-pointer " onclick="openForm()">Modifier ses informations</div>

        <form action="profil.php" method="get">
            <button type="submit" name="disconnect" class="p-2 w-1/4 text-center bg-cyan-100 w-1/4 mt-2">Se déconnecter</button>
        </form>
    </div>

    <?php 
    if (isset($_POST['nom'], $_POST['prenom'], $_POST['civilite'], $_POST['naissance'], $_POST['email'], $_POST['telephone'])) {
        // Vérifiez la présence de toutes les données nécessaires
        $update = new Adherent(); 
        $update->update($_POST['nom'], $_POST['prenom'], $_POST['civilite'], $_POST['naissance'], $_POST['email'], $_POST['telephone'], $_SESSION['id']); 
        session_unset();
        session_destroy();
        $update->NewSession();
    
    }
?>


    <div class="hidden bg-gradient-to-r to-blue-500 bg-cyan-500 from-cyan-500 absolute z-100 bg-rose-50 w-full h-full" id="updateForm">
        <form action="profil.php" method="post">
            <h1 class="w-full text-center text-2xl mt-20">Modifier les informations</h1>
            <div class="w-3/4 m-auto flex flex-col ">
                <h3 class="w-full mt-4 text-slate-600 text-center"> Information Personel</h3>
                <div class="w-3/4 m-auto flex  place-content-start ">
                    <input class="placeholder:italic placeholder:text-slate-400 w-1/2 mr-2 mt-2 mb-2 bg-white border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" value="<?= $_SESSION['nom']?>" placeholder="nom" type="text" name="nom" />
                    <input class="placeholder:italic placeholder:text-slate-400 w-1/2 mt-2 mb-2 block bg-white w-3/4 border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" value="<?= $_SESSION['prenom']?>" placeholder="prenom" type="text" name="prenom" />
                </div>
                <select class="placeholder:italic placeholder:text-slate-400 mt-2  block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Civilité" value="<?= $_SESSION['civilite']?>" name="civilite">
                    <option value="1">Homme</option>
                    <option value="2">Femme</option>
                </select>
                <input class="placeholder:italic placeholder:text-slate-400 mt-2  block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="date de naissance" value="<?= $_SESSION['naissance']?>" type="date" name="naissance" />

                <h3 class="w-full mt-4 text-slate-600 text-center">Coordonée</h3>
                <input class="placeholder:italic placeholder:text-slate-400 mt-4 block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="email" type="mail" value="<?= $_SESSION['email']?>"  name="email" />
                <input class="placeholder:italic placeholder:text-slate-400 mt-4 block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="téléphone" type="text" value="<?= $_SESSION['telephone']?>" name="telephone" />

                <button type="submit" class="p-2 bg-cyan-100 w-1/3 m-auto mt-2">Modifier</button>

            </div>

        </form>

    </div>
    <script src="./js/form.js"></script>


</body>

</html>