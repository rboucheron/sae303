<?php


if (isset($_GET['modifyUser'])) {
    $Adherent = new Adherent();
    $result = $Adherent->findbyId($_GET['modifyUser']);

    if (isset($_POST['nom'], $_POST['prenom'], $_POST['naissance'], $_POST['email'], $_POST['telephone'])) {

        $update = new Adherent();
        $update->update($_POST['nom'], $_POST['prenom'], $result[0]['civilité'], $_POST['naissance'], $_POST['email'], $_POST['telephone'], $result[0]['id'] );
        header('Location: index.php');
        exit();
    }


?>

    <div class="bg-gradient-to-r to-blue-500 bg-cyan-500 from-cyan-500 absolute z-100 w-full h-full" id="updateForm">
        <form action="" method="post">
            <h1 class="w-full text-center text-2xl mt-20">Modifier les informations</h1>
            <div class="w-3/4 m-auto flex flex-col ">
                <h3 class="w-full mt-4 text-slate-600 text-center"> Information Personel</h3>
                <div class="w-3/4 m-auto flex  place-content-start ">
                    <input class="placeholder:italic placeholder:text-slate-400 w-1/2 mr-2 mt-2 mb-2 bg-white border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" value="<?= $result[0]['Nom'] ?>" placeholder="nom" type="text" name="nom" />
                    <input class="placeholder:italic placeholder:text-slate-400 w-1/2 mt-2 mb-2 block bg-white w-3/4 border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" value="<?= $result[0]['prenom'] ?>" placeholder="prenom" type="text" name="prenom" />
                </div>

                <input class="placeholder:italic placeholder:text-slate-400 mt-2  block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="date de naissance" value="<?= $result[0]['naissance'] ?>" type="date" name="naissance" />

                <h3 class="w-full mt-4 text-slate-600 text-center">Coordonée</h3>
                <input class="placeholder:italic placeholder:text-slate-400 mt-4 block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="email" type="mail" value="<?= $result[0]['email'] ?>" name="email" />
                <input class="placeholder:italic placeholder:text-slate-400 mt-4 block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="téléphone" type="text" value="<?= $result[0]['telephone'] ?>" name="telephone" />

                <button type="submit" class="p-2 bg-cyan-100 w-1/3 m-auto mt-2">Modifier</button>

            </div>

        </form>

    </div>
<?php } ?>