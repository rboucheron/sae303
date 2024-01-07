<?php
$moniteur = new Moniteur();
$resultat = $moniteur->findAll();
?>

<section class="bg-gradient-to-r from-cyan-400 to-blue-500 p-10 w-full shadow-xl">
    <h1 class="text-2xl lg:text-4xl w-3/4 m-auto text-center text-white font-test">Notre équipe</h1>
    <h2 class="text-xl lg:text-xl w-3/4 m-auto text-center text-slate-700 font-bold">Les personnes qui vont vous accueillir dans notre aéroclub</h2>
    <div class="w-full m-auto mt-10 " id="plane">
        <div class="mt-2 flex flex-wrap justify-center lg:flex-row  relative gap-4 w-full">
            <?php foreach ($resultat as $rowMoniteur) { ?>
                <div class="bg-gray-50  w-80 rounded-lg border-2  border-cyan-500  relative">
                    <div class="w-full ">
                        <img class="w-1/2 m-auto cover rounded-t-lg" src="./assets/images/<?= $rowMoniteur['profil'] ?>" alt="image d'élicoptère">
                    </div>
                    <p class="p-2 text-xl text-sky-800 font-bold text-center"> <?= $rowMoniteur['prenom']  ?> <?= $rowMoniteur['nom']  ?></p>
                    <p class="p-2 text-sky-800 pb-4"><?= $rowMoniteur['role'] ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</section>