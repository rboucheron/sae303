<?php
if (isset($_GET['plane'])) {
    $id = $_GET['plane'];
    $plane = new plane();
    $result = $plane->findSomeone($id);
    if (isset($_SESSION['id'])) {
        if (isset($_POST['reservation0'])) {
            $reservation = new Reservation;
            $array = array_keys($_POST);
            foreach ($array as $value) {
                $reservation->Add($_POST[$value], 30, $_SESSION['id'], $_GET['plane']);
            }
        }
        $find = new Reservation;
        $resultat = $find->find($_SESSION['id'], $_GET['plane']);
?><?php
    }
} else {
    echo "avion innéxistant";
}

    ?>



<section>
    <div class="grid grid-cols-2 mt-20 gap-4">
        <div>
            <img class="w-3/4 m-auto" src="./assets/images/<?= $result[0]['image'] ?>" alt="<?= $result[0]['modele'] ?>">
        </div>
        <div>
            <h1 class="text-5xl text-white"><?= $result[0]['modele'] ?><?= $result[0]['marque'] ?></h1>
            <h2 class="text-2xl text-white"><?= $result[0]['type'] ?></h2>
            <p class="w-3/4 text-xl mt-2"><?= $result[0]['description'] ?></p>

        </div>
    </div>
    <?php if (isset($_SESSION['id'])) { ?>
        <div class="w-full bg-white mt-10">


            <div class="w-3/4 relative m-auto  p-2">

                <div class="hidden absolute top-0 w-full h-full bg-white" id="hourly">
                    <h2 class="mt-5 w-full text-center text-2xl text-sky-800">Choisissez votre Créneaux</h2>
                    <div class=" text-black text-xl text-center mt-10" id="hourly_date">Jeudi 28 Décembre</div>
                    <div class=" w-2/5 m-auto mt-10" id="hourly-hour">
                        <div class="border-y border-sky-800 text-xl text-black p-10 text-center cursor-pointer duration-300  hover:text-2xl hover:text-sky-800" onclick='Choose(event)' id="10:00:00">
                            10h - 12h
                        </div>
                        <div class=" border-sky-800 text-xl text-black p-10 text-center cursor-pointer duration-300  hover:text-2xl hover:text-sky-800" onclick='Choose(event)' id="13:00:00">
                            13h - 15h
                        </div>
                        <div class="border-y border-sky-800 text-xl text-black p-10 text-center cursor-pointer duration-300  hover:text-2xl hover:text-sky-800" onclick='Choose(event)' id="15:10:00">
                            15h10 - 17h10
                        </div>
                    </div>
                </div>


                <h2 class="text-5xl text-sky-800 w-full text-center">Choisir la date</h2>
                <div class="w-2/5 m-auto grid grid-cols-3 mt-10 mb-10">
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
                <div class="grid grid-cols-7 mt-5">
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
<div class="hidden fixed w-full h-full bg-cyan-700 bg-opacity-75 top-0 left-0" id="updateForm">
    <form action="" method="post">
        <div id="form">
        </div>
        <button type="submit" class=" mt-10 text-white text-xl border-2 border-white rounded-xl w-1/4 m-auto">Confirmé</button>
    </form>
</div>



<script>
    const ever = [<?php foreach ($resultat as $alldates) {
                        echo "'" . $alldates['date'] . "'" . "," . " ";
                    } ?>];
    const months = [
        'Janvier',
        'Février',
        'Mars',
        'Avril',
        'Mai',
        'Juin',
        'Juillet',
        'Aout',
        'Septembre',
        'Octobre',
        'Novembre',
        'Decembre',
    ];
    var form;
    var today = new Date();
    var month = today.getMonth();
    var year = today.getFullYear();
    var firstDay;
    var lastDay;
    Give();
    var div = "<div class='border border-white p-2'></div>";
    var calendar = div;
    Fill();
    Write();
    var ChooseDate = [];

    function AddMonth() {
        month++;
        if (month > 11) {
            month = 0;
            year++;
        }
        Give();
        calendar = div;
        Fill();
        Write();
    }

    function RemoveMonth() {
        month--;
        if (month < 0) {
            month = 11;
            year--;
        }
        Give();
        calendar = div;
        Fill();
        Write();
    }

    function Fill() {
        if (firstDay.getDay() > 1) {
            for (let y = 2; y <= firstDay.getDay(); y++) {
                calendar += div;
            }
        }
        var Classe;
        for (let i = 1; i <= lastDay.getDate(); i++) {

            var idMonth = firstDay.getMonth();
            var idDay = i;
            idMonth++;
            if (idMonth < 10) {
                idMonth = "0" + idMonth;
            }
            if (idDay < 10) {
                idDay = "0" + idDay;
            }
            var idDate = firstDay.getFullYear() + "-" + idMonth + "-" + idDay;
            if (
                (firstDay.getFullYear() < today.getFullYear()) ||
                (firstDay.getFullYear() === today.getFullYear() && firstDay.getMonth() < today.getMonth()) ||
                (firstDay.getFullYear() === today.getFullYear() && firstDay.getMonth() === today.getMonth() && i < today.getDate())
            ) {
                Classe = "border border-sky-500 text-start p-2 pb-10 bg-gray-200";
            } else {
                var index = ever.indexOf(idDate);
                if (index !== -1) {
                    Classe = "border border-sky-500 text-start p-2 pb-10 bg-green-500";
                } else {
                    Classe = "border border-sky-500 text-start p-2 pb-10 cursor-pointer hover:bg-sky-200";
                }

            }
            calendar += "<div class='" + Classe + "' id='" + idDate + "' " + " " + "onclick='Choose(event)'" + ">" + i + "</div>";
        }
    }

    function Write() {
        document.getElementById('month').innerText = months[firstDay.getMonth()];
        document.getElementById('calendar').innerHTML = calendar;
    }

    function Give() {
        firstDay = new Date(year, month, 1);
        lastDay = new Date(year, month + 1, 0);
    }

    function Choose(event) {
        var dateClique;
        var iddateClique;
        var hourClique;
        var idhourClique;
        var hourly = document.getElementById('hourly');
        
        /*
        var index = ChooseDate.indexOf(iddateClique);
       
        if (index !== -1) {
            ChooseDate.splice(index, 1);
          
            document.getElementById(iddateClique).classList.remove('bg-green-300');
        } else {
            */
        if (hourly.classList.contains("hidden")) {
            dateClique = event.target;
            iddateClique = dateClique.id;
            document.getElementById('hourly').classList.remove('hidden');
            document.getElementById('hourly_date').innerText = iddateClique;
        }else{  
            hourClique = event.target;
            idhourClique = dateClique.id;
            document.getElementById(iddateClique).classList.add('bg-green-300');
            ChooseDate.push(idhourClique + " " + iddateClique);
            document.getElementById('hourly').classList.add('hidden');
     
        }



        /*
            document.getElementById(iddateClique).classList.add('bg-green-300');
            ChooseDate.push(iddateClique);
           
        }
         */

    }

    function Form() {
        var form = "<h2 class='w-full text-white text-5xl text-center mt-2'>Confirmer Vos dates</h2>"
        for (let i = 0; i < ChooseDate.length; i++) {
            e = i + 1;
            form += '<h3 class=" ml-2 text-left text-white text-2xl">Date n°' + e + '</h3>';
            form += '<input class="placeholder:italic placeholder:text-slate-400 mt-2  block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" type="date" name="reservation' + i + '" value="' + ChooseDate[i] + '"/>';
        }
        console.log(form);
        document.getElementById('form').innerHTML = form;
    }
</script>