async function afficheMeteo(){
    try {
        const response = await fetch('https://api.openweathermap.org/data/2.5/forecast?q=Paris&appid=78886a19c93163d930ae4268518360a0&units=metric%22');
        const text = await response.text();
        console.log(text);
      } catch (error) {
        console.error(error);
      }
 
}
afficheMeteo();