<?php

$nbAdherent = new Adherent; 
$CountAdherent = $nbAdherent->Count(); 
$nbPlane = new Plane; 
$CountPlane = $nbPlane->Count(); 

?>


<section class="w-full">
    <div class="w-3/4 m-auto mt-20 gap-4 grid grid-cols-3">
        <div class="bg-purple-800 p-2 rounded-xl">
            <h2 class="w-full text-center text-white">Nombre d'adhérents </h2>
            <div class="mt-2 mb-2 p-2 text-white text-2xl text-center">
            <?= $CountAdherent[0]['count'] ?>
            </div>
        </div>
        <div class="bg-blue-800 p-2 rounded-xl">
            <h2 class="w-full text-center text-white">Nombre de reservations</h2>
            <div class="mt-2 mb-2 p-2 text-white text-2xl text-center">
            <?= $CountPlane[0]['count'] ?>
            </div>
        </div>
        <div class="bg-emerald-800 p-2 rounded-xl">
            <h2 class="w-full text-center text-white">Nombre D'avions</h2>
        </div>
    </div>
</section>