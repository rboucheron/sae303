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
    

</section>