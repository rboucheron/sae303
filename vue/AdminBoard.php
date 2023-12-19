<?php

$nbAdherent = new Adherent;
$CountAdherent = $nbAdherent->Count();
$nbPlane = new Plane;
$CountPlane = $nbPlane->Count();
$nbReservation = new Reservation();
$CountReservation = $nbReservation->Count();
$AllAdherent = new Adherent;
$tablAdherent = $AllAdherent->findAll();
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
            <h2 class="w-full text-center text-white">Nombre D'avions</h2>
            <div class="mt-2 mb-2 p-2 text-white text-2xl text-center">
                <?= $CountPlane[0]['count'] ?>
            </div>
        </div>
        <div class="bg-emerald-800 p-2 rounded-xl">
            <h2 class="w-full text-center text-white">Nombre de reservations</h2>
            <div class="mt-2 mb-2 p-2 text-white text-2xl text-center">
                <?= $CountReservation[0]['count'] ?>
            </div>
        </div>
    </div>
</section>

<section>
    <table class="w-3/4 m-auto mt-20">
        <thead class="p-11 bg-gray-300 ">
            <tr>
                <th class="border-r-2 border-b-2 border-blue-300 p-2">Id</th>
                <th class="border-r-2 border-b-2 border-blue-300 ">Nom</th>
                <th class="border-r-2 border-b-2 border-blue-300 ">Prenom</th>
                <th class="border-r-2 border-b-2 border-blue-300 ">Date de naissance</th>
                <th class="border-r-2 border-b-2 border-blue-300 ">Email</th>
                <th class=" border-b-2 border-blue-300 ">Téléphone</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tablAdherent as $rowAdherent) { ?>
                <tr class="p-11 bg-white ">
                    <td class="border-r-2 border-b border-blue-300 p-2"><?= $rowAdherent['id'] ?></td>
                    <td class="border-r-2 border-b border-blue-300 p-2"><?= $rowAdherent['Nom'] ?></td>
                    <td class="border-r-2 border-b border-blue-300 p-2"><?= $rowAdherent['prenom'] ?></td>
                    <td class="border-r-2 border-b border-blue-300 p-2"><?= $rowAdherent['naissance'] ?></td>
                    <td class="border-r-2 border-b border-blue-300 p-2"><?= $rowAdherent['email'] ?></td>
                    <td class=" border-b border-blue-300 p-2"><?= $rowAdherent['telephone'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>