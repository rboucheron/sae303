<?php

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['telephone']) && isset($_POST['password'])) {
    $newuser = new Moniteur();
    $date = date('m-d');
    $name = "assets/images/" . $date . $_FILES['image']['name'];
    $dbname = $date . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $name);


    $newuser->add($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'], $_POST['password'], $_POST['role'], $dbname);
    header('Location: index.php');
    exit();
}
?>

<section class="mt-20 w-full">
    <form action="" method="post" enctype='multipart/form-data'>
        <h1 class="text-sm lg:text-4xl w-3/4 m-auto text-center text-slate-700 font-bold">Nouveau Moniteur</h1>
        <div class="w-3/4 m-auto flex flex-col ">
            <h3 class="w-full mt-4 text-slate-600 text-center"> Information Personel</h3>
            <div class="w-3/4 m-auto flex  place-content-start ">
                <input class="placeholder:italic placeholder:text-slate-400 w-1/2 mr-2 mt-2 mb-2 bg-white border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="nom" type="text" name="nom" />
                <input class="placeholder:italic placeholder:text-slate-400 w-1/2 mt-2 mb-2 block bg-white w-3/4 border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="prenom" type="text" name="prenom" />
            </div>
            <input class="placeholder:italic placeholder:text-slate-400 mt-4 block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="role" type="text" name="role" />
            <input class="placeholder:italic placeholder:text-slate-400 mt-4 block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" id='image' type='file' name='image' />
            <h3 class="w-full mt-4 text-slate-600 text-center">Coordonée</h3>
            <input class="placeholder:italic placeholder:text-slate-400 mt-4 block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="email" type="mail" name="email" />
            <input class="placeholder:italic placeholder:text-slate-400 mt-4 block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="téléphone" type="text" name="telephone" />
            <h3 class="w-full mt-4 text-slate-600 text-center">Mot de passe</h3>
            <input class="placeholder:italic placeholder:text-slate-400 mt-4 block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="mot de passe" type="password" name="password" />

            <button type="submit" class="p-2 bg-cyan-100 w-1/3 m-auto mt-2">S’inscrire</button>
        </div>
    </form>
</section>