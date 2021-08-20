//Modal
const open = document.getElementById('catalogo');
const modal = document.getElementById('modal');
const close = document.getElementById('cerrar');
const close2 = document.getElementById('cerrar2');

open.addEventListener('click', () => {
    modal.classList.add('show');
});

close.addEventListener('click', () => {
    modal.classList.remove('show');
});

close2.addEventListener('click', () => {
    modal.classList.remove('show');
});