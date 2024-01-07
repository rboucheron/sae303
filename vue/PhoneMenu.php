<div class="hidden z-50 fixed w-full h-full bg-cyan-700 bg-opacity-75 " id="Menu">
    <div class=" mt-10 w-3/4 m-auto block">
        <div class="w-full mt-5 mb-5 text-center">
            <a href="index.php" class="text-5xl text-white" onclick="closeMenu()">Accueil</a>
        </div>
        <div class="w-full mt-5 mb-5  text-center">
            <a href="index.php#activites" class="text-5xl text-white" onclick="closeMenu()">Activités</a>
        </div>
        <div class="w-full mt-5 mb-5  text-center">
            <a href="index.php#plane" class="text-5xl text-white" onclick="closeMenu()">Avions</a>
        </div>
        <div class="w-full mt-5 mb-5  text-center">
            <a href="index.php#galerie" class="text-5xl text-white" onclick="closeMenu()">Galerie</a>
        </div>
        <div class="w-full mt-5 mb-5  text-center">
            <a href="index.php#forfait" class="text-5xl text-white" onclick="closeMenu()">Forfait</a>
        </div>
        <div class="w-full mt-5 mb-5 text-center">
            <a class="text-5xl text-white">Contact</a>
        </div>

        <?php if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
        ?>
            <div class="w-full mt-5 mb-5 text-center">
                <a class="text-5xl text-white" href="index.php?profil"><?= $_SESSION['prenom'] ?> <?= $_SESSION['nom'] ?></a>
            </div>


        <?php
        } else {

        ?>
            <div class="w-full mt-5 mb-5  text-center">
                <a href="index.php?connexion" class="text-5xl text-white" onclick="closeMenu()">Connexion</a>
            </div>
        <?php
        }
        ?>

    </div>

    <div class="absolute top-0 right-0" onclick="closeMenu()">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x">
            <path d="M18 6 6 18" />
            <path d="m6 6 12 12" />
        </svg>
    </div>
</div>