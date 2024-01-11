<?php

class Meteo
{
    private $url = "https://api.openweathermap.org/data/2.5/forecast?q=Frotey-lès-Lure&&appid=78886a19c93163d930ae4268518360a0&units=metric";
    private $response;
  
    public function __construct()
    {
        $ch = curl_init($this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $this->response = curl_exec($ch);
        curl_close($ch);
    }
    public function decode()
    {
        return json_decode($this->response, true);
    }
    public function today()
    {
        $result = $this->decode(); 
        $today = [
            'temperature' => $result['list'][0]['main']['temp'],
            'humidity' => $result['list'][0]['main']['humidity'],
            'weather' => $result['list'][0]['weather'][0]['main'],
            'wind'  =>  $result['list'][0]['wind']['speed'],

        ];
        return $today; 
    }

}
