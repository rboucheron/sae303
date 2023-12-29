<section class="bg-slate-800 mt-20 shadow-lg shadow-slate-800/50">
    <h1 class="mt-10 text-2xl lg:text-4xl w-3/4 m-auto text-center text-white font-bold">Meteo</h1>
    <div class="w-1/2 m-auto mt-20">
        <h1 class="text-white w-1/3 m-auto text-center text-5xl">Paris </h1>
        <img src="./assets/images/meteo-sun.svg" class="w-1/3 m-auto mt-2" alt="soleil">


    </div>
    <?php
    $Meteos = new Meteo;
    $data = $Meteos->decode();


    foreach ($data['list'] as $result) {
        echo "Date: " . $result['dt_txt'] . ", Température: " . $result['main']['temp'] . " °C<br>";
    }
    ?>
      <canvas id="meteo" class=" mt-20 w-1/4 "></canvas>
    <script>
         const meteo = document.getElementById('meteo');
         new Chart(meteo, {
            type: 'line',
            data: {
                labels: [
                        <?php foreach ($data['list'] as $result) { 
                            echo $result['dt_txt'] . ',' . ' ';  }?>],
                datasets: [{
                    label: 'My First Dataset',
                    data: [
                        <?php foreach ($data['list'] as $result) { 
                            echo $result['main']['temp'] . ',' . ' ';  }?>],
                    borderColor: 'rgb(75, 192, 192)',
                    segment: {
                        borderColor: meteo => skipped(meteo, 'rgb(0,0,0,0.2)') || down(meteo, 'rgb(192,75,75)'),
                        borderDash: meteo => skipped(meteo, [6, 6]),
                    },
                    spanGaps: true
                }]
            },
            options: genericOptions
        });
    </script>



</section>