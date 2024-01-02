<?php 
$meteo = new Meteo; 
$data = $meteo->today(); 
echo $data['temperature']; 
?>