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
