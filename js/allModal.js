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
    document.body.style.overflow = "hidden"; 
 
}
function clodeForm() {
    var form = document.getElementById('updateForm');
    form.classList.add('hidden');
    document.body.style.overflow = "scroll"; 
}
function openMenu(){
    var Menu = document.getElementById('Menu');
    Menu.classList.remove('hidden');
    Menu.style.top = y + "px"; 
    Menu.style.left = x + "px"; 
    document.body.style.overflow = "hidden"; 
}
function closeMenu(){
    var Menu = document.getElementById('Menu');
    Menu.classList.add('hidden');
    document.body.style.overflow = "scroll"; 

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