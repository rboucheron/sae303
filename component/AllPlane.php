<?php
$plane = new Plane();
$searchPlane = $plane->findAll();

foreach ($searchPlane as $model) {
?>
    <section class="w-11/12 m-auto overflow-x-scroll mt-36 flex flex-nowrap relative">
        <div class="bg-gray-50 m-2 w-80 rounded-xl flex-none p-2">
            <img src="./assets/images/b.jpg" alt="image d'élicoptère">
            <p class="p-2 mb-4"> <?= $model['modele'] ?> <?= $model['marque'] ?> <?= $model['type'] ?></p>
            <a class="p-2 bg-cyan-500 rounded-xl mb-2" href="#reserver">Réserver</a>
        </div>


    </section>

<?php } ?>