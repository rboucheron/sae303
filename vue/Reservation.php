<?php
if (isset($_GET['plane'])) {
    $id = $_GET['plane'];
    $plane = new plane();
    $result = $plane->findSomeone($id);
    if (isset($_SESSION['id'])) {
        if (isset($_POST['reservation0'])) {
            $i = 0;
            while (isset($_POST['reservation' . $i])) {
                $date = 'reservation' . $i;
                $heur = 'reservationhour' . $i;
                $reservation = new Reservation;
                $reservation->Add($_POST[$date], $_POST[$heur], 30, $_SESSION['id'], $_GET['plane']);
                $i++;
            }
        }
        $find = new Reservation;
        $resultat = $find->find($_SESSION['id'], $_GET['plane']);
        $other =  $find->Findother($_SESSION['id'], $_GET['plane']);
    }
} else {
    echo "avion innéxistant";
}

?>



<section>
    <div class="block lg:grid grid-cols-2 mt-20 gap-4">
        <div>
            <img class="w-3/4 m-auto" src="./assets/images/<?= $result[0]['image'] ?>" alt="<?= $result[0]['modele'] ?>">
        </div>
        <div class="p-2">
            <h1 class="text-5xl text-white text-center lg:text-left"><?= $result[0]['modele'] ?><?= $result[0]['marque'] ?></h1>
            <h2 class="text-2xl text-white text-center lg:text-left"><?= $result[0]['type'] ?></h2>
            <p class="m-2 lg:w-3/4 text-xl"><?= $result[0]['description'] ?></p>

        </div>
    </div>
    <?php if (isset($_SESSION['id'])) { ?>
        <div class="w-full bg-white mt-10">


            <div class="w-full lg:w-3/4 relative m-auto  p-2">

                <div class="hidden absolute top-0 w-full h-full bg-white" id="hourly">
                    <h2 class="mt-5 w-full text-center text-2xl text-sky-800">Choisissez votre Créneaux</h2>
                    <div class=" text-black text-xl text-center mt-10" id="hourly_date">Jeudi 28 Décembre</div>
                    <div class=" w-2/5 m-auto mt-10" id="hourly-hour">
                        <div class="border-y border-sky-800 text-xl text-black p-10 text-center cursor-pointer duration-300  hover:text-2xl hover:text-sky-800" onclick='ChooseHours(event)' id="10:00:00">
                            10h - 12h
                        </div>
                        <div class=" border-sky-800 text-xl text-black p-10 text-center cursor-pointer duration-300  hover:text-2xl hover:text-sky-800" onclick='ChooseHours(event)' id="13:00:00">
                            13h - 15h
                        </div>
                        <div class="border-y border-sky-800 text-xl text-black p-10 text-center cursor-pointer duration-300  hover:text-2xl hover:text-sky-800" onclick='ChooseHours(event)' id="15:10:00">
                            15h10 - 17h10
                        </div>
                    </div>
                </div>


                <h2 class="text-5xl text-sky-800 w-full text-center">Choisir la date</h2>
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
                <div class="w-full grid grid-cols-7 mt-5 text-sm lg:text-2sm text-center">
                    <div class="border border-white text-start p-2">Dimanche</div>
                    <div class="border border-white text-start p-2 ">Lundi</div>
                    <div class="border border-white text-start p-2">Mardi</div>
                    <div class="border border-white text-start p-2">Mercredi</div>
                    <div class="border border-white text-start p-2">Jeudi</div>
                    <div class="border border-white text-start p-2">Vendredi</div>
                    <div class="border border-white text-start p-2">Samedi</div>
                </div>
                <div class="grid grid-cols-7 mt-5" id="calendar"></div>
                <div class="p-2 bg-cyan-500 w-1/4 m-auto mt-2 text-center text-xl rounded-xl text-white cursor-pointer hover:bg-cyan-200" onclick="openForm(), Form()">Reservé</div>
            </div>
        </div>
    <?php } else { ?>

        <div class="mt-10 bg-white w-full  p-2">
            <h2 class="mt-2 text-3xl text-sky-800 w-full text-center">Vous devez vous connecter, pour finaliser votre reservation </h2>
            <div class="mt-10 mb-10 flex items-center text-xl justify-center">
                <div>
                    <a href="index.php?connexion" class="text-sky-600 decoration-solid font-semibold">Me Connecter</a>
                    ou
                    <a href="index.php?inscription" class="text-sky-600 decoration-solid font-semibold"> M'inscrire</a>
                </div>
            </div>
        </div>
    <?php } ?>



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
    const ever = <?php echo json_encode($resultat, JSON_UNESCAPED_UNICODE); ?>;
    const other = <?php echo json_encode($other, JSON_UNESCAPED_UNICODE); ?>;
</script>