<?php if ((isset($_GET['plane'])) && (isset($_SESSION['id']))) {
    if (isset($_POST['reservation0'])) {
        $i = 0;
        while (isset($_POST['reservation' . $i])) {
            $id = 'reservation' . $i;

            $reservation = new Reservation;
            $reservation->AddAdherent($_POST[$id], $_SESSION['id']);
            $i++;
        }
    }
    $plane = new Plane;
    $find = $plane->findSomeone($_GET['plane']);
    $reservation = new Reservation;
    $findReservation =  $reservation->withoutAdheran($find[0]['id']);
    $findUserReservation = $reservation->FindUser($_SESSION['id'], $find[0]['id']);

?>
    <section>
        <div class=" block lg:grid grid-cols-2 mt-20 gap-4">
            <div>
                <img class="w-3/4 m-auto" src="./assets/images/<?= $find[0]['image'] ?>" alt="<?= $find[0]['modele'] ?>">
            </div>
            <div class="p-2">
                <h1 class="text-5xl text-white text-center lg:text-left"><?= $find[0]['modele'] ?><?= $find[0]['marque'] ?></h1>
                <h2 class="text-2xl text-white text-center lg:text-left"><?= $find[0]['type'] ?></h2>
                <p class="m-2 lg:w-3/4 text-xl"><?= $find[0]['description'] ?></p>

            </div>
        </div>
        <div class="w-full bg-white mt-10">
            <div class="w-full lg:w-3/4 relative m-auto  p-2">
                <h2 class="text-5xl text-sky-800 w-full text-center">Choisissez une date</h2>

                <div id="calendar"></div>
                <div class="p-2 border-2 border-sky-800 text-sky-800 w-1/4 m-auto mt-10 text-center text-xl rounded-xl cursor-pointer hover:bg-sky-800 hover:text-white" onclick="openForm(), Form()">Reservé</div>
            </div>
        </div>
    </section>
    <div class="hidden fixed w-full h-full bg-cyan-700 bg-opacity-75 top-0 left-0 scroll-y" id="updateForm">
        <form action="" method="post">
            <div id="form">
            </div>
            <div class="w-full flex justify-center">
                <button type="submit" class=" mt-10 text-white text-xl border-2 p-2 bg-sky-800 rounded-xl">Confirmé</button>
            </div>
        </form>
    </div>

    <script>
        const reservation = <?= json_encode($findReservation, JSON_UNESCAPED_UNICODE) ?>;
        const userReservation = <?= json_encode($findUserReservation, JSON_UNESCAPED_UNICODE) ?>;
    </script>


    <script src="./js/AdherentCalendar.js"></script>
<?php } ?>