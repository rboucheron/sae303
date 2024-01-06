<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AC2FL</title>
    <link rel="stylesheet" href="./dist/style.css">
    <link rel="icon" type="image/svg+xml" href="./assets/images/logo.svg" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gradient-to-r from-cyan-500 to-blue-300 overflow-hidden overflow-y-scroll">
    <header class="grid grid-cols-2 gap-4 lg:grid-cols-4 bg-white shadow-xl ">
        <div class="cursor-pointer grid place-items-start pt-2 lg:col-span-1  "><img src="./assets/images/logof.png" class="w-14 mt-0 ml-12 mb-1 " alt=""></div>
        <div class="cursor-pointer grid place-items-end pb-2 pr-6 lg:hidden " onclick="openMenu ()"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-align-justify">
                <line x1="3" x2="21" y1="6" y2="6" />
                <line x1="3" x2="21" y1="12" y2="12" />
                <line x1="3" x2="21" y1="18" y2="18" />
            </svg></div>
        <?php
        if (isset($_SESSION['AdminNom']) && isset($_SESSION['AdminPrenom']) && isset($_SESSION['AdminEmail']) && isset($_SESSION['AdminTelephone'])) {

        ?> 
            <div class=" hidden lg:grid place-items-center col-span-2 grid-cols-7 p-3  ">
                <a class="grid font-semibold text-sm cursor-pointer text-black hover:underline text-black  pb-1 " href="index.php">Accueil</a>
                <a class="grid font-semibold text-sm cursor-pointer text-black hover:underline text-black  pb-1 " href="index.php#activites">Activités</a>
                <a class="grid font-semibold text-sm cursor-pointer text-black hover:underline text-black  pb-1 " href="index.php#plane">Avions</a>
                <a class="grid font-semibold text-sm cursor-pointer text-black hover:underline text-black  pb-1 " href="index.php#activites">Galerie</a>
                <a class="grid font-semibold text-sm cursor-pointer text-black hover:underline text-black  pb-1 " href="index.php#activites">Forfait</a>
                <a class="grid font-semibold text-sm cursor-pointer text-black hover:underline text-black  pb-1 ">Contact</a>
                <a class="grid font-semibold text-sm cursor-pointer text-black hover:underline text-black  pb-1 " href="index.php?admin">Dashboard</a>
            <?php
        } else {
            ?>
                <div class="hidden lg:grid place-items-center col-span-2 grid-cols-6 p-3 ">
                <a class="grid font-semibold text-sm cursor-pointer text-black hover:underline text-black  pb-1 " href="index.php">Accueil</a>
                <a class="grid font-semibold text-sm cursor-pointer text-black hover:underline text-black  pb-1 " href="index.php#activites">Activités</a>
                <a class="grid font-semibold text-sm cursor-pointer text-black hover:underline text-black  pb-1 " href="index.php#activites">Avions</a>
                <a class="grid font-semibold text-sm cursor-pointer text-black hover:underline text-black  pb-1 " href="index.php#activites">Galerie</a>
                <a class="grid font-semibold text-sm cursor-pointer text-black hover:underline text-black  pb-1 " href="index.php#activites">Forfait</a>
                <a class="grid font-semibold text-sm cursor-pointer text-black hover:underline text-black  pb-1 ">Contact</a>
       
                <?php
            }
                ?>



                </div>
                <?php if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {

                    $dateObj = new DateTime($_SESSION['naissance']);
                    $anniversaire = $dateObj->format('m-d');
                    $today = date('m-d');
                ?>
                    <div class="hidden lg:flex  place-items-center  self-center justify-end pr-10">
                        <img class="w-6" src="./assets/images/compte.svg" alt="compte identifier">
                        <a href="index.php?profil">
                            <p class="font-semibold text-sm text-blue-800"> <?= $_SESSION['prenom'] ?> <?= $_SESSION['nom'] ?><?php if ($anniversaire == $today) {
                                                                                                                                    echo "🎉";
                                                                                                                                } ?></p>
                        </a>
                    </div>
                <?php
                } elseif (isset($_SESSION['AdminNom']) && isset($_SESSION['AdminPrenom']) && isset($_SESSION['AdminEmail']) && isset($_SESSION['AdminTelephone'])) {
                ?>
                    <div class="hidden lg:flex  place-items-center  self-center justify-end pr-10">
                        <img class="w-6" src="./assets/images/compte.svg" alt="compte identifier">
                        <a href="index.php?profil">
                            <p class="font-semibold text-sm text-blue-800"> <?= $_SESSION['AdminPrenom'] ?> <?= $_SESSION['AdminNom'] ?> ✅</p>
                        </a>
                    </div>
                <?php
                } elseif (isset($_SESSION['MoniteurNom']) && isset($_SESSION['MoniteurPrenom']) && isset($_SESSION['MoniteurEmail']) && isset($_SESSION['MoniteurTelephone'])) {
                ?>
                    <div class="hidden lg:flex  place-items-center  self-center justify-end pr-10">
                        <img class="w-6" src="./assets/images/compte.svg" alt="compte identifier">
                        <a href="index.php?profil">
                            <p class="font-semibold text-sm text-blue-800"> <?= $_SESSION['MoniteurPrenom'] ?> <?= $_SESSION['MoniteurNom'] ?> ✅</p>
                        </a>
                    </div>
                <?php
                } else {
                ?>
                    <div class="hidden lg:grid place-items-center  pl-14 ">
                        <div class=" grid"> <a class="  w-full text-center rounded-sm text-white  text-md cursor-pointer  py-2 px-5  font-Arial bg-blue-800 hover:bg-blue-600 duration-300  hover:scale-105 " href="index.php?connexion">Se connecter</a></div>
                    </div>
                <?php
                }
                ?>
    </header>