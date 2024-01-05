<?php
if (isset($_GET['profil']) && $_GET['profil'] === 'disconnect') {
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit();
}
?>


<?php if (isset($_SESSION['nom']) && isset($_SESSION['prenom']) && isset($_SESSION['naissance']) && isset($_SESSION['civilite'])) {

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
} elseif (isset($_SESSION['AdminNom']) && isset($_SESSION['AdminPrenom']) && isset($_SESSION['AdminEmail']) && isset($_SESSION['AdminTelephone'])) {
?>
    <div class="grid grid-cols-2 gap-4  w-3/4 m-auto p-3 rounded-xl mt-10 mb-10">
        <div>
            <h2 class="text-5xl text-white">Données personnelles</h2>
            <p class="mt-2 text-xl">
                <span class="text-white">Nom :</span> <?= $_SESSION['AdminNom'] ?><br />
                <span class="text-white">Prénom :</span> <?= $_SESSION['AdminPrenom'] ?><br />

            </p>
        </div>
        <div>
            <h2 class="text-5xl text-white">Coordonnées</h2>
            <p class="mt-2 text-xl">

                <span class="text-white">Email :</span> <?= $_SESSION['AdminEmail'] ?><br />
                <span class="text-white"> N° téléphone :</span> <?= $_SESSION['AdminTelephone'] ?>
            </p>
        </div>
    </div>
<?php
} elseif (isset($_SESSION['MoniteurNom']) && isset($_SESSION['MoniteurPrenom']) && isset($_SESSION['MoniteurEmail']) && isset($_SESSION['MoniteurTelephone'])) {
?>
    <div class="grid grid-cols-2 gap-4  w-3/4 m-auto p-3 rounded-xl mt-10 mb-10">
        <div>
            <h2 class="text-5xl text-white">Données personnelles</h2>
            <p class="mt-2 text-xl">
                <span class="text-white">Nom :</span> <?= $_SESSION['MoniteurNom'] ?><br />
                <span class="text-white">Prénom :</span> <?= $_SESSION['MoniteurPrenom'] ?><br />

            </p>
        </div>
        <div>
            <h2 class="text-5xl text-white">Coordonnées</h2>
            <p class="mt-2 text-xl">

                <span class="text-white">Email :</span> <?= $_SESSION['MoniteurEmail'] ?><br />
                <span class="text-white"> N° téléphone :</span> <?= $_SESSION['MoniteurTelephone'] ?>
            </p>
        </div>
    </div>
<?php
}
?>

<div class="w-3/4 m-auto flex flex-col place-content-center">
    <?php if (isset($_SESSION['nom']) && isset($_SESSION['prenom']) && isset($_SESSION['naissance']) && isset($_SESSION['civilite'])) {

    ?>
        <div class="p-2 w-1/4 text-center border-2 border-cyan-100 cursor-pointer " onclick="openForm()">Modifier ses informations</div>
    <?php
    }
    ?>
    <form action="" method="get">
        <button type="submit" name="profil" value="disconnect" class="p-2 w-1/4 text-center bg-cyan-100 w-1/4 mt-2">Se déconnecter</button>
    </form>
</div>