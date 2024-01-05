<?php if ((isset($_GET['see'])) && (isset($_SESSION['AdminId']))) {
    $plane = new Plane;
    $find = $plane->findSomeone($_GET['see']);
    $reservation = new Reservation;

    $findReservation =  $reservation->Findother($find[0]['id']);


?>

    <div class="w-full bg-white mt-10">


        <div class="w-full lg:w-3/4 relative m-auto  p-2">

            <h2 class="text-5xl text-sky-800 w-full text-center">Reservation Avion : <?= $find[0]['modele'] ?></h2>
            <div class="w-full lg:w-1/2  m-auto grid grid-cols-3 mt-10 mb-10">
                <div>
                    <div class="bg-gray-200 p-2 rounded-xl place-items-end w-1/2 m-auto cursor-pointer hover:bg-sky-200" onclick="RemoveMonth()">
                        <img src="./assets/images/chevron-left.svg" alt="right">
                    </div>
                </div>
                <h3 class="text-2xl text-gray-800 text-center " id="month"></h3>
                <div>
                    <div class="bg-gray-200 p-2 rounded-xl place-items-end w-1/2 m-auto cursor-pointer hover:bg-sky-200" onclick="AddMonth()">
                        <img src="./assets/images/chevron-right.svg" alt="right">
                    </div>
                </div>
            </div>
            <div id="calendar"></div>

        </div>
    </div>
    <script>
        const reservation = <?= json_encode($findReservation, JSON_UNESCAPED_UNICODE) ?>;
        const menucalendar = '<div class="w-full grid grid-cols-7 mt-5 text-sm lg:text-2sm text-center">' +
            '<div class="border border-white text-start p-2">Dimanche</div>' +
            '<div class="border border-white text-start p-2 ">Lundi</div>' +
            '<div class="border border-white text-start p-2">Mardi</div>' +
            '<div class="border border-white text-start p-2">Mercredi</div>' +
            '<div class="border border-white text-start p-2">Jeudi</div>' +
            '<div class="border border-white text-start p-2">Vendredi</div>' +
            '<div class="border border-white text-start p-2">Samedi</div>' +
            '</div>';
    </script>


    <script src="./js/AdminCalendar.js"></script>
<?php } ?>