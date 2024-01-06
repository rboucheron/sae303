<?php
if(isset($_POST['adherent']) && isset($_POST['moniteur']) && isset($_POST['plane']) && isset($_POST['reservation']) && isset($_POST['reservationhour']) && isset($_POST['duree'])){
   $reservation = new Reservation; 
   $reservation->Addall($_POST['reservation'], $_POST['reservationhour'], $_POST['duree'], $_POST['moniteur'], $_POST['adherent'], $_POST['plane']); 
   echo"<div class='bg-green-500 text-2xl text-white'>Reservation Ajouter avec succés</div>";
}


$adherent = new Adherent; 
$alladherent =  $adherent->findAll(); 
$moniteur = new Moniteur; 
$allmoniteur = $moniteur->findAll(); 
$plane = new Plane; 
$allplane = $plane->findAll(); 
?>

<section class="mt-20 w-full">
    <div id="erreur" class="text-red-500 text-2xl w-full text-center"></div>
    <form action="" method="post">
        <h1 class="text-sm lg:text-4xl w-3/4 m-auto text-center text-slate-700 font-bold">Nouvelle Reservation</h1>
        <div class="w-3/4 m-auto flex flex-col ">
            <h3 class="w-full mt-4 text-slate-600 text-center"> Adhérent</h3>
            <select class="placeholder:italic placeholder:text-slate-400 mt-2  block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="adherent" name="adherent">
                <?php foreach ($alladherent as $rowadherent) {?>
                <option value="<?= $rowadherent['id'] ?>"><?=$rowadherent['Nom']?> <?=$rowadherent['prenom']?></option>
                <?php } ?>
               
            </select>
            <h3 class="w-full mt-4 text-slate-600 text-center"> Moniteurs</h3>
            <select class="placeholder:italic placeholder:text-slate-400 mt-2  block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="moniteur" name="moniteur">
            <?php foreach ($allmoniteur as $rowmoniteur) {?>
                <option value="<?= $rowmoniteur['id'] ?>"><?=$rowmoniteur['nom']?> <?=$rowmoniteur['prenom']?></option>
            <?php } ?>
            </select>
            <h3 class="w-full mt-4 text-slate-600 text-center">Avions</h3>
            <select class="placeholder:italic placeholder:text-slate-400 mt-2  block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="plane" name="plane">
            <?php foreach ($allplane as $rowplane) {?>
                <option value="<?= $rowplane['id'] ?>"><?=$rowplane['modele']?></option>
            <?php } ?>
            </select>
            <h3 class="w-full mt-4 text-slate-600 text-center">Date</h3>
            <input class="placeholder:italic placeholder:text-slate-400 mt-2  block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" type="date" name="reservation"  />
            <h3 class="w-full mt-4 text-slate-600 text-center">Heure</h3>
            <input class="placeholder:italic placeholder:text-slate-400 mt-2  block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" type="time" name="reservationhour" />
            <h3 class="w-full mt-4 text-slate-600 text-center">Durée</h3>
            <input class="placeholder:italic placeholder:text-slate-400 mt-2  block bg-white w-3/4 m-auto border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" type="number" name="duree" />
            <button type="submit" class="p-2 bg-cyan-100 w-1/3 m-auto mt-2">Ajouter +</button>

        </div>

    </form>



</section>