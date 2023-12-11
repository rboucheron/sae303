<?php

include './class/Adherent.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $connexion = new Adherent();
    $message = $connexion->connexion($_POST['email'], $_POST['password']);
    if ($message == false){
        echo "mot de passe incorrect"; 
    }else{
        $connexion->NewSession(); 
        header('Location: index.php');
        exit();

    }
  





  

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
    <img src="./assets/images/logo.svg" class="w-40 m-auto mt-2 mb-2" alt="">
    <form action="connexion.php" method="post">
        <div class="w-3/4 m-auto flex flex-col ">
            <h3 class="w-full mt-4 text-slate-600 text-center">Coordonée</h3>
            <input class="placeholder:italic placeholder:text-slate-400 mt-4 block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="email" type="mail" name="email" />
            <h3 class="w-full mt-4 text-slate-600 text-center">Mot de passe</h3>
            <input class="placeholder:italic placeholder:text-slate-400 mt-4 block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="mot de passe" type="password" name="password" />
            <button type="submit" class="p-2 bg-cyan-100 w-1/3 m-auto mt-2">Connexion</button>

        </div>

    </form>

</body>

</html>