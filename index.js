const btnMobile = document.getElementById('hamburguer-btn');

function toggleMenu(event){
    if(event.type === 'touchstart') {event.preventDefault();}
    const navMenu = document.getElementById('nav');
    navMenu.classList.toggle('active');
}

btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);