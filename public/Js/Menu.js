let menu = document.querySelector('#header');
let buttonMenu = document.querySelector('#icon-menu');

buttonMenu.addEventListener('click', function() {
    menu.classList.toggle('header-oculto');
    // alert('click');
    // console.log('Hola mundo');
})