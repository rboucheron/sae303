<?php





if (isset($_POST['email']) && isset($_POST['password'])) {
    $connexion = new administrateur();
    $message = $connexion->connexion($_POST['email'], $_POST['password']);
    if ($message == false){
        echo "mot de passe incorrect"; 
        return false; 
    }else{
        $connexion->NewSession(); 
    }
}

?>

<section id="connexion" class="mt-20 w-full" > 
    <h1 class="text-sm lg:text-4xl w-3/4 m-auto text-center text-slate-700 font-bold">Connecter Vous En Admin</h1>
    <form action="" method="post">
        <div class="w-3/4 m-auto flex flex-col ">
            <h3 class="w-full mt-4 text-slate-600 text-center">Coordonée</h3>
            <input class="placeholder:italic placeholder:text-slate-400 mt-4 block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="email" type="mail" name="email" />
            <h3 class="w-full mt-4 text-slate-600 text-center">Mot de passe</h3>
            <input class="placeholder:italic placeholder:text-slate-400 mt-4 block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="mot de passe" type="password" name="password" />
            <button type="submit" class="p-2 bg-cyan-100 w-1/3 m-auto mt-2">Connexion</button>
        </div>
    </form>

    <p class="mt-4 text-sm text-gray-600 text-center">Pas encore inscrit? <a href="index.php?inscription" class="text-blue-500 hover:underline">Inscrivez-vous</a></p>
</section>

