<?php
if (isset($_GET['plane'])) {
    $id = $_GET['plane'];
    $plane = new plane();
    $result = $plane->findSomeone($id);
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
    <div class="w-full bg-white mt-10">

        <div class="w-3/4 m-auto  p-2">
            <h2 class="text-5xl text-sky-800 w-full text-center">Choisir la date</h2>
            <div class="grid grid-cols-7 mt-5">
                <div class="border border-white  text-start p-2">
                    Dimanche

                </div>
                <div class="border border-white text-start p-2 ">
                    Lundi

                </div>
                <div class="border border-white  text-start p-2">
                    Mardi

                </div>
                <div class="border border-white   text-start p-2">
                    Mercredi

                </div>
                <div class="border border-white  text-start p-2">
                    Jeudi

                </div>
                <div class="border border-white  text-start p-2">
                    Vendredi

                </div>
                <div class="border border-white  text-start p-2">
                    Samedi

                </div>
            </div>
            <div class="grid grid-cols-7 mt-5" id="calendar">

            </div>



        </div>

    </div>

    </div>

</section>
<script>
    var today = new Date();
    var firstDay = new Date(today.getFullYear(), today.getMonth(), 1);
    var lastDay = new Date(today.getFullYear(), today.getMonth() + 1, 0);
    var div = "<div class='border border-white p-2'></div>";
    var calendar= div;
    console.log(firstDay.getDay()); 
    if (firstDay.getDay() > 1) {
        for (let y = 2; y <= firstDay.getDay(); y++) {
            calendar += div;
        }
    }
    for (let i = firstDay.getDate(); i <= lastDay.getDate(); i++) {
        calendar += "<div class='border border-sky-500 text-start p-2 pb-10 cursor-pointer hover:bg-sky-200' id='" + i + "/" + today.getMonth() + "'>" + i + "</div>";
    }
    document.getElementById('calendar').innerHTML = calendar;
</script>