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
