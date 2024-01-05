<?php

//adherent
$nbAdherent = new Adherent;
$CountAdherent = $nbAdherent->Count();
$tablAdherent = $nbAdherent->findAll();

$moniteur = new moniteur;
$tablMoniteur = $moniteur->findAll();

//plane 
$nbPlane = new Plane;
$CountPlane = $nbPlane->Count();

//reservation 
$nbReservation = new Reservation();
$CountReservation = $nbReservation->Count();
$today = date('Y-m-d');

for ($i = 0; $i <= 6; $i++) {
    $daytoday = date('Y-m-d', strtotime($today . ' +' . $i . ' day'));
    $TodayCount = $nbReservation->CountDay($daytoday);
    $date[$i] = $daytoday;
    $dateCount[$i] = $TodayCount[0]['count'];
}

$month = date("Y-m");

for ($e = 0; $e <= 12; $e++) {
    $lastMonth = date('Y-m', strtotime('-' . $e . ' month'));
    $affMonth[$e] = date('M', strtotime('-' . $e . ' month'));
    $monthYearCount = $nbReservation->CountMonth($lastMonth);

    $monthYear[$e] = $lastMonth;
    $themonthYearCount[$e] = $monthYearCount[0]['count'];
}

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
<section class="mt-20 w-full bg-white gap-4 p-2 block lg:grid grid-cols-2">
    <div class="mt-10">
        <h2 class=" text-2xl text-blue-800 text-center">Nombres de Reservation cette semaine</h2>
        <canvas id="day" class=" mt-2 w-1/4 "></canvas>
    </div>
    <div class="mt-10">
        <h2 class=" text-2xl text-blue-800 text-center">Nombres de Reservation par Mois</h2>
        <canvas id="month" class=" mt-2 w-1/4 "></canvas>
    </div>
</section>
<section class="w-full mt-20">
    <h2 class=" text-2xl text-white text-center">Adhérents</h2>
    <table class="w-3/4 m-auto mt-2">
        <thead class="p-2 lg:p-11 bg-gray-300 ">
            <tr>
                <th class="border-r-2 border-b-2 border-blue-300 p-2">Id</th>
                <th class="border-r-2 border-b-2 border-blue-300 ">Nom</th>
                <th class="border-r-2 border-b-2 border-blue-300 ">Prenom</th>
                <th class="border-r-2 border-b-2 border-blue-300 ">Date de naissance</th>
                <th class="border-r-2 border-b-2 border-blue-300 ">Email</th>
                <th class="border-r-2  border-b-2 border-blue-300">Téléphone</th>
                <th class=" border-b-2 border-blue-300 ">Options</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tablAdherent as $rowAdherent) { ?>
                <tr class="p2 lg:p-11 bg-white ">
                    <td class="border-r-2 border-b border-blue-300 p-2"><?= $rowAdherent['id'] ?></td>
                    <td class="border-r-2 border-b border-blue-300 p-2"><?= $rowAdherent['Nom'] ?></td>
                    <td class="border-r-2 border-b border-blue-300 p-2"><?= $rowAdherent['prenom'] ?></td>
                    <td class="border-r-2 border-b border-blue-300 p-2"><?= $rowAdherent['naissance'] ?></td>
                    <td class="border-r-2 border-b border-blue-300 p-2"><?= $rowAdherent['email'] ?></td>
                    <td class="border-r-2 border-b border-blue-300 p-2"><?= $rowAdherent['telephone'] ?></td>
                    <td class=" border-b border-blue-300 p-4">
                        <a href="?deleteuser=<?= $rowAdherent['id'] ?>" class="bg-red-500 text-white p-2 rounded-xl relative mr-2 hover:bg-red-700 ">Supprimer</a>
                        <a href="?modifyUser=<?= $rowAdherent['id'] ?>" class="bg-yellow-500 text-white p-2 rounded-xl relative mr-2 hover:bg-yellow-700">Modifier</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>


<section class="w-full mt-20">
    <h2 class=" text-2xl text-white text-center">Moniteurs</h2>
    <div class="mt-4 w-full flex items-center justify-center">
        <a href="?AddMoniteur" class="bg-green-400 text-2xl text-white p-2 rounded-xl relative mr-2 hover:bg-green-700">Ajouter + </a>
    </div>
    <table class="w-3/4 m-auto mt-2">
        <thead class="p-2 lg:p-11 bg-gray-300 ">
            <tr>
                <th class="border-r-2 border-b-2 border-blue-300 p-2">Id</th>
                <th class="border-r-2 border-b-2 border-blue-300 ">Nom</th>
                <th class="border-r-2 border-b-2 border-blue-300 ">Prenom</th>
                <th class="border-r-2 border-b-2 border-blue-300 ">Email</th>
                <th class="border-r-2  border-b-2 border-blue-300">Téléphone</th>
                <th class=" border-b-2 border-blue-300 ">Options</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tablMoniteur as $rowMoniteur) { ?>
                <tr class="p2 lg:p-11 bg-white ">
                    <td class="border-r-2 border-b border-blue-300 p-2"><?= $rowMoniteur['id'] ?></td>
                    <td class="border-r-2 border-b border-blue-300 p-2"><?= $rowMoniteur['nom'] ?></td>
                    <td class="border-r-2 border-b border-blue-300 p-2"><?= $rowMoniteur['prenom'] ?></td>

                    <td class="border-r-2 border-b border-blue-300 p-2"><?= $rowMoniteur['email'] ?></td>
                    <td class="border-r-2 border-b border-blue-300 p-2"><?= $rowMoniteur['telephone'] ?></td>
                    <td class=" border-b border-blue-300 p-4">
                        <a href="?deleteMoniteur=<?= $rowMoniteur['id'] ?>" class="bg-red-500 text-white p-2 rounded-xl relative mr-2 hover:bg-red-700 ">Supprimer</a>
                        <a href="?modifyMoniteur=<?= $rowMoniteur['id'] ?>" class="bg-yellow-500 text-white p-2 rounded-xl relative mr-2 hover:bg-yellow-700">Modifier</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>



<script>
    const ctx = document.getElementById('day');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['<?= $date[0] ?>', '<?= $date[1] ?>', '<?= $date[2] ?>', '<?= $date[3] ?>', '<?= $date[4] ?>', '<?= $date[5] ?>', '<?= $date[6] ?>'],
            datasets: [{
                label: 'Nombre de Reservation',
                data: [<?= $dateCount[0] ?>, <?= $dateCount[1] ?>, <?= $dateCount[3] ?>, <?= $dateCount[4] ?>, <?= $dateCount[5] ?>, <?= $dateCount[6] ?>],
                borderWidth: 3
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<script>
    const xtc = document.getElementById('month');

    new Chart(xtc, {
        type: 'line',
        data: {

            labels: ['<?= $affMonth[11] ?>', '<?= $affMonth[10] ?>', '<?= $affMonth[9] ?>', '<?= $affMonth[8] ?>', '<?= $affMonth[7] ?>', '<?= $affMonth[6] ?>', '<?= $affMonth[5] ?>', '<?= $affMonth[4] ?>', '<?= $affMonth[3] ?>', '<?= $affMonth[2] ?>', '<?= $affMonth[1] ?>', '<?= $affMonth[0] ?>'],
            datasets: [{
                label: 'Nombre de Reservation',
                data: [<?= $themonthYearCount[11] ?>, <?= $themonthYearCount[10] ?>, <?= $themonthYearCount[9] ?>, <?= $themonthYearCount[8] ?>, <?= $themonthYearCount[7] ?>, <?= $themonthYearCount[6] ?>, <?= $themonthYearCount[5] ?>, <?= $themonthYearCount[4] ?>, <?= $themonthYearCount[3] ?>, <?= $themonthYearCount[2] ?>, <?= $themonthYearCount[1] ?>, <?= $themonthYearCount[0] ?>],
                borderWidth: 3
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>