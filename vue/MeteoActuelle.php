<?php
$meteo = new Meteo;
$data = $meteo->today();
$date = date("F j, Y");

?>
<section class="w-full mt-10 " id="meteo">
    <h1 class="text-2xl lg:text-4xl w-3/4 m-auto text-center text-slate-700 font-bold">Meteo</h1>
    <div class="grid grid-cols-2">
        <div class="block ">
            <div class="w-full mt-10 mb-2">
                <h2 class="w-full text-center text-sky-800 font-bold text-2xl"><?= $date ?></h2>
            </div>
            <div class="w-1/4 m-auto">
                <?php if ($data['weather'] == 'Rain') { ?>
                    <img src="./assets/images/meteo-pluit.svg" alt="pluis" />
                <?php } ?>
                <?php if ($data['weather'] == 'Clouds') { ?>
                    <img src="./assets/images/meteo-nuage.svg" alt="nuage" />
                <?php } ?>
            </div>
            <div class="pt-2 flex justify-center">
                <p class="bg-sky-800 text-white text-5sm  p-2 rounded-l-xl border-r border-white flex"> <img src="./assets/images/meteo_temperature.svg" alt="temperatures"> <?= $data['temperature'] ?> °C</p>
                <p class="bg-sky-800 text-white text-5sm  p-2  border-r border-white flex"> <img src="./assets/images/meteo_humidity.svg" alt="humidity"> <?= $data['humidity'] ?> g/m3</p>
                <p class="bg-sky-800 text-white text-5sm  p-2 rounded-r-xl flex "> <img src="./assets/images/meteo_wind.svg" alt="vend"> <?= $data['wind'] ?> km/h</p>
            </div>
        </div>
        <div class="w-full mt-10 mb-2">
            <table>
    
                <tr class="bg-sky-800 flex rounded-xl"><td class="text-white text-5sm  p-2 rounded-l-xl border-r border-white flex"><img src="./assets/images/meteo_humidity.svg" alt="humidity"> 83 g/m3</td><td class="text-white text-5sm  p-2 rounded-l-xl border-r border-white flex"><img src="./assets/images/meteo_humidity.svg" alt="humidity"> 83 g/m3</td><td class="text-white text-5sm  p-2 rounded-l-xl border-r border-white flex"><img src="./assets/images/meteo_humidity.svg" alt="humidity"> 83 g/m3</td><td class="text-white text-5sm  p-2 rounded-l-xl flex"><img src="./assets/images/meteo_humidity.svg" alt="humidity"> 83 g/m3</td></tr>
            </table>
        </div>
    </div>

</section>