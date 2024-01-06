<?php
$meteo = new Meteo;
$data = $meteo->today();
$date = date("F j, Y");
$time = date("H:i"); // Current time in 24-hour format

$bgImageClass = '';

switch ($data['weather']) {
    case 'Rain':
        $bgImageClass = 'rain-bg';
        break;
    case 'Clouds':
        $bgImageClass = 'clouds-bg';

        break;
    case 'Clear':
        $bgImageClass = 'clear-bg';
        break;
    default:
        $bgImageClass = 'default-bg';
        break;
}
?>

<style>
    .rain-bg {
        background: url('./assets/images/rainy.gif') center/cover no-repeat;
        background-size: 60%;
    }

    .clouds-bg {
        background: url('./assets/images/cloudy.gif') center/cover no-repeat;
        background-size: 60%;
    }

    .clear-bg {
        background: url('./assets/images/sunny.gif') center/cover no-repeat;
        background-size: 60%;
    }

    .default-bg {
        background-color: #fff;
    }
</style>


<section class="w-full mt-10 <?= $bgImageClass ?> p-2 pb-4" id="meteo">
    <h1 class="text-2xl lg:text-4xl w-3/4 m-auto text-white text-center text-slate-700 font-bold">Meteo</h1>

    <div class="block w-full lg:w-1/2 m-auto">
        <div class="w-full mt-10 mb-2">
            <h2 id="clock" class="w-full text-center text-sky-800 text-white font-bold text-2xl"><?= $date ?> - <?= $time ?></h2>
        </div>
        <div class="w-1/4 m-auto">
            <?php if ($data['weather'] == 'Rain') { ?>
                <img src="./assets/images/meteo-pluit.svg" alt="pluis" />
            <?php } ?>
            <?php if ($data['weather'] == 'Clouds') { ?>
                <img src="./assets/images/meteo-nuage.svg" alt="nuage" />
            <?php } ?>
            <?php if ($data['weather'] == 'Clear') { ?>
                <img src="./assets/images/meteo-sun.svg" alt="nuage" />
            <?php } ?>
        </div>

        <div class="pt-2 flex justify-center">
            <p class="bg-sky-800 text-white text-5sm  p-2 rounded-l-xl border-r border-white flex">
                <img src="./assets/images/meteo_temperature.svg" alt="temperatures"> <?= $data['temperature'] ?> °C
            </p>
            <p class="bg-sky-800 text-white text-5sm  p-2  border-r border-white flex">
                <img src="./assets/images/meteo_humidity.svg" alt="humidity"> <?= $data['humidity'] ?> g/m3
            </p>
            <p class="bg-sky-800 text-white text-5sm  p-2 rounded-r-xl flex ">
                <img src="./assets/images/meteo_wind.svg" alt="vend"> <?= $data['wind'] ?> km/h
            </p>
        </div>
    </div>

    <script>
        function updateClock() {
            var currentTime = new Date();
            var hours = currentTime.getHours();
            var minutes = currentTime.getMinutes();
            var timeString = hours + ":" + (minutes < 10 ? "0" : "") + minutes;
            document.getElementById("clock").innerHTML = '<?= $date ?> - ' + timeString;
        }

        // Update time every second
        setInterval(updateClock, 1000);
    </script>
</section>