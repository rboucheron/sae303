<?php
include './class/Model.php';
include './class/Adherent.php';

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['civilite']) && isset($_POST['naissance']) && isset($_POST['email']) && isset($_POST['telephone']) && isset($_POST['password'])) {
    $newuser = new Adherent();
    $newuser->add($_POST['nom'], $_POST['prenom'], $_POST['civilite'], $_POST['naissance'], $_POST['email'], $_POST['telephone'], $_POST['password']);
    $newuser->NewSession(); 
    header('Location: index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="./dist/style.css">
</head>

<body>
    <img src="./assets/images/logo.svg" class="w-40 m-auto mt-2 mb-2" alt="">
    <form action="inscription.php" method="post">
        <h1 class="w-full text-center text-2xl">Inscription</h1>
        <div class="w-3/4 m-auto flex flex-col ">
            <h3 class="w-full mt-4 text-slate-600 text-center"> Information Personel</h3>
            <div class="w-3/4 m-auto flex  place-content-start ">
                <input class="placeholder:italic placeholder:text-slate-400 w-1/2 mr-2 mt-2 mb-2 bg-white border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="nom" type="text" name="nom" />
                <input class="placeholder:italic placeholder:text-slate-400 w-1/2 mt-2 mb-2 block bg-white w-3/4 border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="prenom" type="text" name="prenom" />
            </div>
            <select class="placeholder:italic placeholder:text-slate-400 mt-2  block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Civilité" name="civilite">
                <option value="1">Homme</option>
                <option value="2">Femme</option>
            </select>
            <input class="placeholder:italic placeholder:text-slate-400 mt-2  block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="date de naissance" type="date" name="naissance" />

            <h3 class="w-full mt-4 text-slate-600 text-center">Coordonée</h3>
            <input class="placeholder:italic placeholder:text-slate-400 mt-4 block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="email" type="mail" name="email" />
            <input class="placeholder:italic placeholder:text-slate-400 mt-4 block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="téléphone" type="text" name="telephone" />
            <h3 class="w-full mt-4 text-slate-600 text-center">Mot de passe</h3>
            <input class="placeholder:italic placeholder:text-slate-400 mt-4 block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="mot de passe" type="password" name="password" />
            <button type="submit" class="p-2 bg-cyan-100 w-1/3 m-auto mt-2">S’inscrire</button>

        </div>

    </form>

</body>

</html>