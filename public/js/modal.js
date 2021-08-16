//Modal
const open = document.getElementById('catalogo');
const modal = document.getElementById('modal');
const close = document.getElementById('cerrar');

open.addEventListener('click', () => {
    modal.classList.add('show');
});

close.addEventListener('click', () => {
    modal.classList.remove('show');
});