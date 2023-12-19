<section class=" mt-20 w-full">
    <h1 class="text-2xl lg:text-4xl w-3/4 m-auto text-center text-slate-700 font-bold">Catégories d'ULM</h1>
    <div class="block w-full lg:w-3/4 m-auto mt-20">
        <div class="w-full m-auto mt-10 ">
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
        <div class="w-full m-auto mt-10 ">
            <p class="text-2xl text-slate-700 font-semibold">l'association possède 3 types d'appareil : </p>
            <div class="mt-2 overflow-x-scroll  flex flex-nowrap relative gap-4 ">
                <?php
                $plane = new Plane();
                $searchPlane = $plane->findAll();
                foreach ($searchPlane as $model) {
                ?>
                    <div class="bg-gray-50  w-80 rounded-xl flex-none p-2">
                        <img src="./assets/images/b.jpg" alt="image d'élicoptère">
                        <p class="p-2 mb-4"> <?= $model['modele'] ?> <?= $model['marque'] ?> <?= $model['type'] ?></p>
                        <a class="p-2 bg-cyan-500 rounded-xl mb-2" href="#reserver">Réserver</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>