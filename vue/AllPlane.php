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


<section class="bg-white mt-20 w-full" >
    
    <h1 class="text-2xl p-10 lg:text-4xl w-3/4 m-auto text-center text-slate-700 font-bold">Les Avions</h1>
    <div class="bg-white block w-full lg:w-3/4 m-auto mt-20">
        
        <div class=" w-full m-auto mt-10 p-10 lg:p-2">
            <div>
            <p class="text-2xl p-4 text-slate-700 font-semibold">Les 6 classes d’ULM  </p>

                <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                <h2 class="" id="accordion-flush-heading-1">
                    <button type="button" class="p-4 flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                    <span>Paramoteur </span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Le paramoteur est un type d'ULM caractérisé par l'utilisation d'un moteur portatif, généralement monté sur le dos du pilote, qui propulse une hélice. </p>
                    <p class="text-gray-500 dark:text-gray-400">Ce moteur est associé à une voile similaire à celle d'un parachute. Les paramoteurs offrent une approche simple et légère pour voler, permettant aux pilotes de décoller et atterrir à pied.</p>
                    </div>
                </div>


                <div id="accordion-flush-heading-2" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                <h2 class="" id="accordion-flush-heading-2">
                    <button type="button" class="p-4 flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-2" aria-expanded="true" aria-controls="accordion-flush-body-1">
                    <span>Pendulaire  </span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Les ULM pendulaires utilisent un système de pendule pour soutenir la nacelle du pilote. Ils sont équipés d'une aile souple et d'une configuration qui permet une flexibilité de mouvement pendant le vol. </p>
                    <p class="text-gray-500 dark:text-gray-400">Les ULM pendulaires offrent une expérience de vol unique avec une sensation proche du vol en deltaplane.</p>
                    </div>
                </div>


                <div id="accordion-flush-heading-3" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                <h2 class="" id="accordion-flush-heading-3">
                    <button type="button" class="p-4 flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-3" aria-expanded="true" aria-controls="accordion-flush-body-1">
                    <span>Multiaxes  </span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Les ULM multiaxes sont des aéronefs à ailes rigides dotés de commandes similaires à celles d'un avion conventionnel.</p>
                    <p class="text-gray-500 dark:text-gray-400">Ils offrent une maniabilité et une stabilité en vol, ce qui les rend populaires pour les pilotes qui recherchent une expérience de vol similaire à celle des avions traditionnels, mais à une échelle plus légère et plus accessible.</p>
                    </div>
                </div>


                <div id="accordion-flush-heading-4" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                <h2 class="" id="accordion-flush-heading-4">
                    <button type="button" class="p-4 flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-4" aria-expanded="true" aria-controls="accordion-flush-body-1">
                    <span>Autogire (Gyrocoptère) </span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Les autogires, également connus sous le nom de gyrocoptères, sont des ULM équipés d'une voilure fixe et d'un rotor non moteur qui tourne librement grâce à l'effet du vent relatif. </p>
                    <p class="text-gray-500 dark:text-gray-400">Ils combinent les caractéristiques d'un avion et d'un hélicoptère, offrant une solution de vol stable et efficace.</p>
                    </div>
                </div>


                <div id="accordion-flush-heading-5" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                <h2 class="" id="accordion-flush-heading-5">
                    <button type="button" class="p-4 flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-5" aria-expanded="true" aria-controls="accordion-flush-body-1">
                    <span>Aérostat ultraléger </span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-5" class="hidden" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Cette catégorie englobe les dirigeables ou ballons ultralégers propulsés par un moteur léger. Ils offrent une expérience de vol paisible et souvent plus lente, et sont utilisés à des fins récréatives ou publicitaires. </p>
                    <p class="text-gray-500 dark:text-gray-400">Les aérostats ultralégers peuvent avoir une structure légère et flexible.</p>
                    </div>
                </div>


                <div id="accordion-flush-heading-6" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                <h2 class="" id="accordion-flush-heading-6">
                    <button type="button" class="p-4 flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-6" aria-expanded="true" aria-controls="accordion-flush-body-1">
                    <span>Hélicoptère ultraléger </span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-6" class="hidden" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Les hélicoptères ultralégers sont des ULM conçus avec des caractéristiques d'hélicoptère, mais à une échelle plus légère et souvent plus simple. </p>
                    <p class="text-gray-500 dark:text-gray-400">Ils peuvent être équipés de rotors plus petits et d'un moteur adapté à la taille réduite de l'aéronef. Ces hélicoptères offrent une grande maniabilité et sont souvent utilisés pour des activités de loisirs.</p>
                    </div>
                </div>

            
        </div>
        </div>

        
           


            
           
    </div>
        <?php
        $nbPlane = new Plane;
        $CountPlane = $nbPlane->Count();

        ?>
        <div class="bg-white w-full m-auto mt-10 " id="plane">
            <p class="text-2xl text-slate-700 font-semibold w-3/4 m-auto text-center p-10 lg:w-full">L'association possède <?= $CountPlane[0]['count'] ?> appareils  </p>
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
                        <?php } elseif (isset($_SESSION['MoniteurId'])) { ?>
                            <a class="p-2 bg-sky-800 rounded-xl mb-2 mr-2 text-white absolute bottom-0 right-0 hover:bg-sky-500" href="index.php?plane=<?= $model['id'] ?>">Crée</a><!--  -->
                        <?php } elseif (isset($_SESSION['id'])) { ?>
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