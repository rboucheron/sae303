<?php if ((isset($_GET['see'])) && (isset($_SESSION['AdminId']))) {
    $plane = new Plane;
    $find = $plane->findSomeone($_GET['see']);
    $reservation = new Reservation;

    $findReservation =  $reservation->Findother($find[0]['id']);


?>

    <div class="w-full bg-white mt-10">


        <div class="w-full lg:w-3/4 relative m-auto  p-2">

            <h2 class="text-5xl text-sky-800 w-full text-center">Reservation Avion : <?= $find[0]['modele'] ?></h2>

            <div id="calendar"></div>

        </div>
    </div>
    <script>
        const reservation = <?= json_encode($findReservation, JSON_UNESCAPED_UNICODE) ?>;
    </script>


    <script src="./js/AdminCalendar.js"></script>
<?php } ?>