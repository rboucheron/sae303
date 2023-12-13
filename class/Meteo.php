<?php
function Meteo() {


    $url = "https://api.openweathermap.org/data/2.5/forecast?q=Paris&appid=78886a19c93163d930ae4268518360a0&units=metric%22";
    $raw = file_get_contents($url);
    $json = json_decode($raw);
    foreach($json as $result){
        echo$result[0]; 
    }
    
}

