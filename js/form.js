var x = 0, y = 0;

window.addEventListener('scroll', function() {
    x++;
    y++;
});

function openForm() {
    var form = document.getElementById('updateForm');
    form.classList.remove('hidden');
    form.style.top = y + "px"; 
    form.style.left = x + "px"; 
 
}
function clodeForm() {
    var form = document.getElementById('updateForm');
    form.classList.add('hidden');
}

async function afficheMeteo(){
    try {
        const response = await fetch('http://api.openweathermap.org/data/2.5/forecast?q=Paris&appid=8886a19c93163d930ae4268518360a0&units=metric";');
        const text = await response.text();
        console.log(text);
      } catch (error) {
        console.error(error);
      }
 
}
afficheMeteo();