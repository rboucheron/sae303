<?php


if (isset($_POST['email']) && isset($_POST['password'])) {

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="./dist/style.css">
</head>

<body>
    <img src="./assets/images/logof.png" class="w-32 m-auto mt-2 mb-2" alt="">
    <form action="connexion.php" method="post">
        <h1 class="w-full text-center text-2xl">Connexion</h1>
        <div class="w-3/4 m-auto flex flex-col ">
            <div class="mb-4">
                <input class="placeholder:italic placeholder:text-slate-400 mt-4 block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Email" type="email" name="email" />
            </div>
            <div class="mb-4">
                <input class="placeholder:italic placeholder:text-slate-400 mt-4 block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Mot de passe" type="password" name="password" />
            </div>
            <button type="submit" class="p-2 bg-cyan-100 w-1/3 m-auto mt-2">Se connecter</button>
        </div>
    </form>

    <p class="mt-4 text-sm text-gray-600 text-center">Pas encore inscrit? <a href="inscription.php" class="text-blue-500 hover:underline">Inscrivez-vous</a></p>

</body>

</html>
