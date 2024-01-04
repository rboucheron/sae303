<?php
if (isset($_SESSION['AdminId'])) {
    if (isset($_GET['delete'])) {
        $deleteReservation = new Reservation;
        $deleteReservation->DeleteWplane($_GET['delete']);
        $deletePlane = new Plane;
        $deletePlane->delete($_GET['delete']);
    }
}
?>


<section class=" mt-20 w-full">
    <h1 class="text-2xl w-3/4 m-auto text-center text-slate-700 text-3xl font-bold">Les Avions</h1>
    <div class="block w-full lg:w-3/4 m-auto mt-20">
        <div class="w-full m-auto mt-10 p-10 lg:p-2">
            <p class="text-2xl text-slate-700 font-semibold">Il existe 6 classes d’ULM : </p>
            <ul>
                <li class="text-white text-xl">Le paramoteur</li>
                <li class="text-white text-xl">Le pendulaire</li>
                <li class="text-white text-xl">Le multiaxes</li>
                <li class="text-white text-xl">L’autogire ultraléger</li>
                <li class="text-white text-xl">L’aérostat ultraléger</li>
                <li class="text-white text-xl">L’hélicoptère ultraléger</li>
            </ul>
        </div>
        <?php
        $nbPlane = new Plane;
        $CountPlane = $nbPlane->Count();

        ?>
        <div class="w-full m-auto mt-10 " id="plane">
            <p class="text-2xl text-slate-700 font-semibold w-3/4 m-auto lg:w-full">L'association possède <?= $CountPlane[0]['count'] ?> appareils : </p>
            <div class="mt-2 flex flex-wrap justify-center lg:flex-row  relative gap-4 w-full">

                <?php
                $plane = new Plane();
                $searchPlane = $plane->findAll();
                foreach ($searchPlane as $model) {
                ?>
                    <div class="bg-gray-50  w-80 rounded-lg border-2  relative">
                        <div class="w-full h-1/2">
                            <img class="w-full h-full cover rounded-t-lg" src="./assets/images/<?= $model['image'] ?>" alt="image d'élicoptère">
                        </div>
                        <p class="p-2 text-xl text-sky-800 font-bold"> <?= $model['modele'] ?> </p>
                        <p class="p-2 text-sky-800 pb-4">Avion de type <?= $model['type'] ?>, de la marque <?= $model['marque'] ?>. </p>
                        <?php if (isset($_SESSION['AdminId'])) { ?>
                            <div class="p-2  mb-2 mr-2 absolute bottom-0 right-0 flex">
                                <a href="?modify=<?= $model['id'] ?>" class="bg-yellow-500 text-white p-2 rounded-xl relative mr-2 hover:bg-yellow-700">Modifier</a>
                                <a href="?delete=<?= $model['id'] ?>" class="bg-red-500 text-white p-2 rounded-xl relative mr-2 hover:bg-red-700 ">Supprimer</a>
                                <a href="?see=<?= $model['id'] ?>" class="bg-sky-800  text-white p-2 rounded-xl relative hover:bg-sky-500">Consulter</a>
                            </div>
                        <?php } else { ?>
                            <a class="py-2 px-5 bg-sky-500 rounded-3xl mb-2 mr-2 text-white absolute bottom-0 right-0 hover:bg-black duration-300" href="index.php?plane=<?= $model['id'] ?>">Réserver</a>
                        <?php } ?>
                    </div>
                <?php } ?>
                <?php if (isset($_SESSION['AdminId'])) { ?>
                    <div class="bg-gray-300  w-80 rounded-xl border-2  ">
                        <div class="relative  m-auto   rounded-full w-1/2 h-1/2 mt-20 bg-gray-400 text-center flex items-center hover:bg-gray-300 hover:border-2">
                            <a href="?newplane" class="w-full text-white text-5xl ">+</a>
                        </div>



                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>