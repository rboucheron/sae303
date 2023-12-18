<?php

function Meteo() {
    $url = "https://api.openweathermap.org/data/2.5/forecast?q=Paris&appid=78886a19c93163d930ae4268518360a0&units=metric";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($response, true);
    return $json; 
}



